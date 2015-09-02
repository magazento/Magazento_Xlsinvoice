<?php
/*
 *  Created on Aug 30, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Xlsinvoice_Block_Admin_Abstract_Edit_Tab_Helpinvoice extends Mage_Adminhtml_Block_Widget_Form {


    protected function _prepareForm() {
        
        $form = new Varien_Data_Form(array('id' => 'edit_form_item', 'action' => $this->getData('action'), 'method' => 'post'));
        $form->setHtmlIdPrefix('item_');
        $fieldset = $form->addFieldset('base_fieldset', array('legend' => Mage::helper('xlsinvoice')->__('Additional Information'), 'class' => 'fieldset-wide'));

        if (Mage::helper('xlsinvoice')->versionUseWysiwig()) {
            $wysiwygConfig = Mage::getSingleton('xlsinvoice/wysiwyg_config')->getConfig();
        } else {
            $wysiwygConfig = '';
        }

        $fieldset->addField('Invoice', 'label', array(
                'label'=> Mage::helper('catalog')->__(''),
                'name'=>'',
                'note'  => Mage::helper('catalog')->__('
                    
{{xls.invoice.entity_id}} <br/>
{{xls.invoice.store_id}}  <br/>
{{xls.invoice.base_grand_total}}  <br/>
{{xls.invoice.shipping_tax_amount}}  <br/>
{{xls.invoice.tax_amount}}   <br/>
{{xls.invoice.base_tax_amount}}  <br/>
{{xls.invoice.store_to_order_rate}}  <br/>
{{xls.invoice.base_shipping_tax_amount}}   <br/>
{{xls.invoice.base_discount_amount}}  <br/>
{{xls.invoice.base_to_order_rate}}  <br/>
{{xls.invoice.grand_total}}  <br/>
{{xls.invoice.shipping_amount}}   <br/>
{{xls.invoice.subtotal_incl_tax}}   <br/>
{{xls.invoice.base_subtotal_incl_tax}}   <br/>
{{xls.invoice.store_to_base_rate}}  <br/>
{{xls.invoice.base_shipping_amount}}  <br/>
{{xls.invoice.total_qty}}   <br/>
{{xls.invoice.base_to_global_rate}} <br/>
{{xls.invoice.subtotal}}  <br/>
{{xls.invoice.base_subtotal}}  <br/>
{{xls.invoice.discount_amount}} <br/>
{{xls.invoice.billing_address_id}}  <br/>
{{xls.invoice.is_used_for_refund}}   <br/>
{{xls.invoice.order_id}} <br/>
{{xls.invoice.email_sent}}<br/>
{{xls.invoice.can_void_flag}}  <br/>
{{xls.invoice.state}} <br/>
{{xls.invoice.shipping_address_id}} <br/>
{{xls.invoice.cybersource_token}} <br/>
{{xls.invoice.store_currency_code}}  <br/>
{{xls.invoice.transaction_id}}   <br/>
{{xls.invoice.order_currency_code}}  <br/>
{{xls.invoice.base_currency_code}} <br/>
{{xls.invoice.global_currency_code}} <br/>
{{xls.invoice.increment_id}}  <br/>
{{xls.invoice.created_at}}  <br/>
{{xls.invoice.updated_at}}  <br/>
{{xls.invoice.customer_id}}  <br/>
{{xls.invoice.invoice_status_id}}  <br/>
{{xls.invoice.invoice_type}} <br/>
{{xls.invoice.is_virtual}} <br/>
{{xls.invoice.real_order_id}}    <br/>
{{xls.invoice.total_due}}  <br/>
{{xls.invoice.total_paid}}<br/>
{{xls.invoice.hidden_tax_amount}}  <br/>
{{xls.invoice.base_hidden_tax_amount}} <br/>
{{xls.invoice.shipping_hidden_tax_amount}}  <br/>
{{xls.invoice.base_shipping_hidden_tax_amount}} <br/>
{{xls.invoice.shipping_incl_tax}} <br/>
{{xls.invoice.base_shipping_incl_tax}} <br/>
{{xls.invoice.base_total_refunded}} <br/>
                    
                '),            
        ));        
        
        

//        print_r($model->getData());
//        exit();
//        $form->setUseContainer(true);
//        $form->setValues($model->getData());
        $this->setForm($form);

        return parent::_prepareForm();
    }

}
