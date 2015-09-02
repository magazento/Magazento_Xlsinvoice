<?php
Class Magazento_Xlsinvoice_Model_Xls {
    
    protected $_xls;
    protected $_pageCss;
    protected $_file;
    protected $_templatefiletype = '';
    protected $_outputfiletype = '';
    protected $_sheetData;
    protected $_itemRow = false;
    

    public function __setup($node) {
        
        $lib_PHPExcel = Mage::getBaseDir('lib') . '/magazento_xlsinvoice/php_excel_1.7.6/Classes/PHPExcel.php' ;
        $lib_IOFactory = Mage::getBaseDir('lib') . '/magazento_xlsinvoice/php_excel_1.7.6/Classes/PHPExcel/IOFactory.php';
        $this->_file = Mage::getStoreConfig("xlsinvoice/".$node."/file");
        $this->_file = Mage::getBaseDir('media') . DS . 'magazento_xlsinvoice'.DS.$this->_file;
        $this->_templatefiletype = Mage::getStoreConfig("xlsinvoice/".$node."/template_type");        
        
        if (Mage::getStoreConfig("xlsinvoice/".$node."/template_type") == 'Excel2007') $this->_outputfiletype = ".xlsx";
        if (Mage::getStoreConfig("xlsinvoice/".$node."/template_type") == 'Excel5') $this->_outputfiletype = ".xls";
        
        require_once($lib_PHPExcel);
        require_once($lib_IOFactory);
        
    }
    
    
    public function processXLS($invoice,$order,$block,$node) {
        
        $this->__setup($node);
        $objReader = PHPExcel_IOFactory::createReader($this->_templatefiletype);
        $objPHPExcel = $objReader->load($this->_file);

        $this->_sheetData =  array();
        $worksheet = $objPHPExcel->getActiveSheet();
        foreach ($worksheet->getRowIterator() as $row) {
            $cellIterator = $row->getCellIterator();
            foreach ($cellIterator as $cell) {
                if (Mage::helper('xlsinvoice/data')->checkValue($cell->getValue())) {
                    $this->_sheetData[$cell->getRow()][$cell->getColumn()] = $cell->getValue();                    
                }
            }
        }

        $i = 0;
        foreach ($this->_sheetData as $k => $row) {
            foreach ($row as $col => $value) {
                if ($value) {
                    $i++;
                    $cell = $col.$k;
                    $this->_sheetData[$k][$col] = Mage::helper('xlsinvoice/data')->xlsInvoiceTemplateParce($invoice,$this->_sheetData[$k][$col]);
                    $this->_sheetData[$k][$col] = Mage::helper('xlsinvoice/data')->xlsOrderTemplateParce($order,$this->_sheetData[$k][$col]);
                    $this->_sheetData[$k][$col] = Mage::helper('xlsinvoice/data')->xlsBillingTemplateParce($order,$this->_sheetData[$k][$col]);
                    $this->_sheetData[$k][$col] = Mage::helper('xlsinvoice/data')->xlsShippingTemplateParce($order,$this->_sheetData[$k][$col]);
//                    echo $cell." => ". $this->_sheetData[$k][$col]."<br/>";
                    $worksheet->setCellValue($cell, $this->_sheetData[$k][$col]);
                    
                    $cell = Mage::helper('xlsinvoice/xls')->getItemCell($k,$this->_sheetData[$k][$col]);
                    if ($cell) {
                        $this->_itemRow = $cell;
                    }
                }
            }
        }
        
        if ($this->_itemRow) {
            
            $items = Mage::getResourceModel('sales/order_item_collection')->setOrderFilter($order->getId());  
            $total_oredered = $items->count();

//            var_dump(count($order->getAllItems()));
//            exit();
            
            if ($total_oredered > 1 ) {
                $worksheet->insertNewRowBefore($this->_itemRow+1, $total_oredered-1);
            }

            foreach ($this->_sheetData as $k => $row) {
                foreach ($row as $col => $value) {
                    if ($value) {
                        $i = 0;
//                        var_dump(count($items));
                        foreach ($items as $num => $item) {
                            $data = Mage::helper('xlsinvoice/data')->xlsItemTemplateParce($item,$this->_sheetData[$k][$col]);   
                            $data.= Mage::helper('xlsinvoice/data')->xlsAttributeTemplateParce($item,$this->_sheetData[$k][$col]);   
//                            var_dump($data);
//                            if ($data) {
                            if ($data && ($i < $total_oredered-1) ||
                                    $data && ($i == 0)) {
//                                echo $i;
                                $cell = $col.($k+$i);
                                $worksheet->setCellValue($cell,$data);
                            }
                            $i++;
                        }
                    }
                }
            }
//            exit();
        }


        ob_end_clean();    
        
        $fileName = $node.'_'.$invoice->getId().'_'.time().$this->_outputfiletype;
        
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$fileName.'"');
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        $objPHPExcel->disconnectWorksheets();
        unset($objPHPExcel);        
        
        exit();    
    }
    
    
    
}
?>