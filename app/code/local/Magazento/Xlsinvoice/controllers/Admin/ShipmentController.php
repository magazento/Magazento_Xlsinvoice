<?php
/*
 *  Created on Aug 30, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Xlsinvoice_Admin_ShipmentController extends Magazento_Xlsinvoice_Controller_Abstract {
    
    public $_type = 'shipment';
    
    public function printxlsAction() {
        if ($invoiceId = $this->getRequest()->getParam('shipment_id')) {
            $invoice = Mage::getModel("sales/order_shipment")->load($invoiceId);
            Mage::getModel('xlsinvoice/shipment')->drawInvoice($invoice);                
        }
    }    
    

}