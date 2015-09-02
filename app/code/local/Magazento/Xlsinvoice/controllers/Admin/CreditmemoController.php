<?php
/*
 *  Created on Aug 30, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Xlsinvoice_Admin_CreditmemoController extends Magazento_Xlsinvoice_Controller_Abstract {
    
    public $_type = 'creditmemo';
    
    public function printxlsAction() {
        if ($invoiceId = $this->getRequest()->getParam('creditmemo_id')) {
            $invoice = Mage::getModel("sales/order_creditmemo")->load($invoiceId);
            Mage::getModel('xlsinvoice/creditmemo')->drawInvoice($invoice);                
        }
    }    
    

}