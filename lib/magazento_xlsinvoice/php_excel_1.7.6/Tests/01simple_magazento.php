<?php
error_reporting(E_ALL);

date_default_timezone_set('Europe/London');

require_once '../Classes/PHPExcel.php';
require('../Classes/PHPExcel/IOFactory.php');

class MagazentoXlsReplace {
	protected $objPHPExcel;
	protected $cellValues;
 
        public function getCellValues($force = false){
                if ( !is_null($this->cellValues) && $force === false ){
                        return $this->cellValues;
                }
                $currentIndex = $this->objPHPExcel->getActiveSheetIndex();
                $this->objPHPExcel->setActiveSheetIndex(0);


                $sheet = $this->objPHPExcel->getActiveSheet();
                $highestColumn = $sheet->getHighestColumn(); //e.g., 'G'
                $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); //e.g., 6
                $highestRow= $sheet->getHighestRow();

                $this->cellValues = array();
                for ( $i =0 ; $i < $highestColumnIndex; $i++ ){
                        $column = PHPExcel_Cell::stringFromColumnIndex($i);
                        for ( $j = 1; $j <= $highestRow; $j++ ){
                                $this->cellValues[$column . $j] = $sheet->getCellByColumnAndRow($i, $j)->getValue();
                        }
                }
                $this->objPHPExcel->setActiveSheetIndex($currentIndex);
                return $this->cellValues;
        }
        
        public function getCellByValue($search) {
                $nonPrintableChars = array("\n", "\r", "\t", "\s");
                $search = str_replace($nonPrintableChars, '', $search);
                foreach ( $this->getCellValues() as $cell => $value ){
                        if ( strcasecmp(str_replace($nonPrintableChars, '', $value), $search) == 0  ){
                                return $cell;
                        }
                }
                return false;
        }        
        
	function __construct($filename){
		$this->objPHPExcel = PHPExcel_IOFactory::load($filename);
	}
}


$file = '01simple.xls';
$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objPHPExcel = $objReader->load($file);

$MagazentoXlsReplace = new MagazentoXlsReplace($file);

$cell = $MagazentoXlsReplace->getCellByValue('Hello');
$objPHPExcel->getActiveSheet()->setCellValue($cell, '!!!');


$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save($file);

