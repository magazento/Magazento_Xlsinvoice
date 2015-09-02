<?php
/*
 *  Created on Aug 30, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Xlsinvoice_Admin_InvoiceController extends Magazento_Xlsinvoice_Controller_Abstract {
    
    public $_type = 'invoice';
    
    public function printxlsAction() {
        if ($invoiceId = $this->getRequest()->getParam('invoice_id')) {
            $invoice = Mage::getModel("sales/order_invoice")->load($invoiceId);
            Mage::getModel('xlsinvoice/invoice')->drawInvoice($invoice);                
        }
    }    

}