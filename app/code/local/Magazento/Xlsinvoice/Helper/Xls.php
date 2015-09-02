<?php
/*
 *  Created on AUG 30, 2012
 *  Author Ivan Proskuryakov  - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2012. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php class Magazento_Xlsinvoice_Helper_Xls extends Mage_Core_Helper_Abstract {
	
    
    public function getItemCell($row,$content) {
        $vars = Mage::helper('xlsinvoice/data')->__parse($content);
        foreach ($vars as $key => $params){
            if ($params[1] == 'item') {
                return $row;
            }
        }
        
    }      
    
    public function getProductAttibutes() {
        
        $collection = Mage::getResourceModel('catalog/product_attribute_collection')->addVisibleFilter();
        $html = '';
        foreach ($collection as $item) {
            $html.= $item->getData('frontend_label')." {{xls.attribute.".$item->getData('attribute_code')."}} <br/>";
        }
        return $html;
        
    }      
    
    
}
