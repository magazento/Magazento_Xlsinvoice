<?php
/*
 *  Created on AUG 30, 2012
 *  Author Ivan Proskuryakov  - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2012. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php class Magazento_Xlsinvoice_Helper_Data extends Mage_Core_Helper_Abstract {
	
    public function versionUseAdminTitle() {
        $info = explode('.', Mage::getVersion());
        if ($info[0] > 1) {
            return true;
        }
        if ($info[1] > 3) {
            return true;
        }
        return false;
    }

    public function versionUseWysiwig() {
        $info = explode('.', Mage::getVersion());
        if ($info[0] > 1) {
            return true;
        }
        if ($info[1] > 3) {
            return true;
        }
        return false;
    }
    
    public function getXlsTypeByController() {
       $action = Mage::app()->getRequest()->getControllerName();
       switch ($action) {
           case 'admin_invoice':
               $return = 'invoice';
               break;
           case 'admin_shipment':
               $return = 'shipment';
               break;
           case 'admin_creditmemo':
               $return = 'creditmemo';
               break;
           default:
               break;
       }
       return $return;
    }

    public function numberArray($max,$text) {

        $items = array();
        for ($index = 1; $index <= $max; $index++) {
            $items[$index]=$text.' '.$index;
        }
        return $items;
    }
    
    public function xlsFunctions($params,$value) {
       
        switch ($params[3]) {
            case 'round':
                $data = round($value);
            break;
            case 'day':
                $timestamp = strtotime($value);
                $data = date('d',$timestamp);
//                var_dump($data);                
            break;
            case 'month':
                $timestamp = strtotime($value);
                $data = date('m',$timestamp);
//                var_dump($data);     
            break;
            case 'year':
                $timestamp = strtotime($value);
                $data = date('Y',$timestamp);
//                var_dump($data);     
            break;
            default:
                $value = null;        
        }
        return $data;
    }    

    
    public function xlsInvoiceTemplateParce($invoice,$content) {
        
        $vars = $this->__parse($content);

        foreach ($vars as $key => $params){
            
            if ($params[1] == 'invoice') {
                $value = $invoice->getData($params[2]);
                
                if ($params[3]) {
                    $value = $this->xlsFunctions($params,$value);
                }
                
                $content = str_replace($key, $value, $content);
            }
        }
        return $content;
    }    
    
    public function xlsOrderTemplateParce($order,$content) {
        
        $vars = $this->__parse($content);

        foreach ($vars as $key => $params){
            
            if ($params[1] == 'order') {
                $value = $order->getData($params[2]);
                
                if ($params[2] == 'payment_description') {
                    $paymentInfo = Mage::helper('payment')->getInfoBlock($order->getPayment())
                            ->setIsSecureMode(true)
                            ->toHtml();                     
                    $value = trim($paymentInfo);
                }
                
                if ($params[3]) {
                    $value = $this->xlsFunctions($params,$value);
                }                
                
                $content = str_replace($key, $value, $content);
            }
        }
        return $content;
    }    
    
    public function xlsBillingTemplateParce($order,$content) {
        $shippingId = $order->getBillingAddress()->getId();
        $address = Mage::getModel('sales/order_address')->load($shippingId);  

        $vars = $this->__parse($content);
        foreach ($vars as $key => $params){
//            var_dump($params[1])."<br/>";      
            if ($params[1] == 'billing') {
                 
                $value = $address->getData($params[2]);
                
                if ($params[3]) {
                    $value = $this->xlsFunctions($params,$value);
                } 
                
                $content = str_replace($key, $value, $content);
            }
        }
        return $content;
    }    
    
    public function xlsShippingTemplateParce($order,$content) {
        $shippingId = $order->getShippingAddress()->getId();
        $address = Mage::getModel('sales/order_address')->load($shippingId);  
        $vars = $this->__parse($content);
        foreach ($vars as $key => $params){
            if ($params[1] == 'shipping') {
  
                $value = $address->getData($params[2]);

                if ($params[3]) {
                    $value = $this->xlsFunctions($params,$value);
                } 
                
                $content = str_replace($key, $value, $content);
            }
        }
        return $content;
    }    
    
    public function xlsItemTemplateParce($item,$content) {
        $return = false;
        $vars = $this->__parse($content);
        foreach ($vars as $key => $params){
            if ($params[1] == 'item') {
                $value = $item->getData($params[2]);
//                var_dump($value);
                if ($params[3]) {
                    $value = $this->xlsFunctions($params,$value);
                } 
                $return = str_replace($key, $value, $content);
            }
        }
        return $return;
    }    
    
    public function xlsAttributeTemplateParce($item,$content) {
        $return = false;
        $vars = $this->__parse($content);
        foreach ($vars as $key => $params){
            if ($params[1] == 'attribute') {
                $_productId = $item->getData('product_id');
                
                $attributeItem = $params[2];
                $storeId = $item->getData('store_id');
                $_product = Mage::getModel('catalog/product')->setStoreId($storeId)->load($_productId);  
                $value = $_product->getResource()->getAttribute($attributeItem)->setStoreId($storeId)->getFrontend()->getValue($_product);    
                
                    
//                var_dump($valueId);
//                var_dump($value_label);
//                exit();
                if ($params[3]) {
                    $value = $this->xlsFunctions($params,$value);
                } 
                $return = str_replace($key, $value, $content);
            }
        }
        return $return;
    }    
    

    public function checkValue($value)
    {
        $result = false;
        preg_match_all('~(\{{(.*?)\}})~', $value, $matches, PREG_SET_ORDER);
        foreach ($matches as $match){
            $var = explode(".",$match[2]);
            $vars[$match[1]]= $var;
            if ($var) $result = true;
        }
        
        return $result;
    }      
    
    public function __parse($template)
    {
        $vars = array();
        preg_match_all('~(\{{(.*?)\}})~', $template, $matches, PREG_SET_ORDER);
        foreach ($matches as $match){
            $var = explode(".",$match[2]);
            $vars[$match[1]]= $var;
//                var_dump($vars);
//                exit();
        }
        return $vars;
    }      
    
    
}
