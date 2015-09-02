<?php
/*
 *  Created on Aug 30, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Xlsinvoice_Block_Admin_Abstract_Edit_Tab_Helporder extends Mage_Adminhtml_Block_Widget_Form {


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
{{xls.order.entity_id}}</br>
{{xls.order.state}}</br>
{{xls.order.status}}</br>
{{xls.order.coupon_code}}</br>
{{xls.order.protect_code}}</br>
{{xls.order.shipping_description}}</br>
{{pdf.order.payment_description}}</br>
{{xls.order.is_virtual}}</br>
{{xls.order.store_id}}</br>
{{xls.order.customer_id}}</br>
{{xls.order.base_discount_amount}}</br>
{{xls.order.base_discount_canceled}}</br>
{{xls.order.base_discount_invoiced}}</br>
{{xls.order.base_discount_refunded}}</br>
{{xls.order.base_grand_total}}</br>
{{xls.order.base_shipping_amount}}</br>
{{xls.order.base_shipping_canceled}}</br>
{{xls.order.base_shipping_invoiced}}</br>
{{xls.order.base_shipping_refunded}}</br>
{{xls.order.base_shipping_tax_amount}}</br>
{{xls.order.base_shipping_tax_refunded}}</br>
{{xls.order.base_subtotal}}</br>
{{xls.order.base_subtotal_canceled}}</br>
{{xls.order.base_subtotal_invoiced}}</br>
{{xls.order.base_subtotal_refunded}}</br>
{{xls.order.base_tax_amount}}</br>
{{xls.order.base_tax_canceled}}</br>
{{xls.order.base_tax_invoiced}}</br>
{{xls.order.base_tax_refunded}}</br>
{{xls.order.base_to_global_rate}}</br>
{{xls.order.base_to_order_rate}}</br>
{{xls.order.base_total_canceled}}</br>
{{xls.order.base_total_invoiced}}</br>
{{xls.order.base_total_invoiced_cost}}</br>
{{xls.order.base_total_offline_refunded}}</br>
{{xls.order.base_total_online_refunded}}</br>
{{xls.order.base_total_paid}}</br>
{{xls.order.base_total_qty_ordered}}</br>
{{xls.order.base_total_refunded}}</br>
{{xls.order.discount_amount}}</br>
{{xls.order.discount_canceled}}</br>
{{xls.order.discount_invoiced}}</br>
{{xls.order.discount_refunded}}</br>
{{xls.order.grand_total}}</br>
{{xls.order.shipping_amount}}</br>
{{xls.order.shipping_canceled}}</br>
{{xls.order.shipping_invoiced}}</br>
{{xls.order.shipping_refunded}}</br>
{{xls.order.shipping_tax_amount}}</br>
{{xls.order.shipping_tax_refunded}}</br>
{{xls.order.store_to_base_rate}}</br>
{{xls.order.store_to_order_rate}}</br>
{{xls.order.subtotal}}</br>
{{xls.order.subtotal_canceled}}</br>
{{xls.order.subtotal_invoiced}}</br>
{{xls.order.subtotal_refunded}}</br>
{{xls.order.tax_amount}}</br>
{{xls.order.tax_canceled}}</br>
{{xls.order.tax_invoiced}}</br>
{{xls.order.tax_refunded}}</br>
{{xls.order.total_canceled}}</br>
{{xls.order.total_invoiced}}</br>
{{xls.order.total_offline_refunded}}</br>
{{xls.order.total_online_refunded}}</br>
{{xls.order.total_paid}}</br>
{{xls.order.total_qty_ordered}}</br>
{{xls.order.total_refunded}}</br>
{{xls.order.can_ship_partially}}</br>
{{xls.order.can_ship_partially_item}}</br>
{{xls.order.customer_is_guest}}</br>
{{xls.order.customer_note_notify}}</br>
{{xls.order.billing_address_id}}</br>
{{xls.order.customer_group_id}}</br>
{{xls.order.edit_increment}}</br>
{{xls.order.email_sent}}</br>
{{xls.order.forced_do_shipment_with_invoice}}</br>
{{xls.order.gift_message_id}}</br>
{{xls.order.payment_authorization_expiration}}</br>
{{xls.order.paypal_ipn_customer_notified}}</br>
{{xls.order.quote_address_id}}</br>
{{xls.order.quote_id}}</br>
{{xls.order.shipping_address_id}}</br>
{{xls.order.adjustment_negative}}</br>
{{xls.order.adjustment_positive}}</br>
{{xls.order.base_adjustment_negative}}</br>
{{xls.order.base_adjustment_positive}}</br>
{{xls.order.base_shipping_discount_amount}}</br>
{{xls.order.base_subtotal_incl_tax}}</br>
{{xls.order.base_total_due}}</br>
{{xls.order.payment_authorization_amount}}</br>
{{xls.order.shipping_discount_amount}}</br>
{{xls.order.subtotal_incl_tax}}</br>
{{xls.order.total_due}}</br>
{{xls.order.weight}}</br>
{{xls.order.customer_dob}}</br>
{{xls.order.increment_id}}</br>
{{xls.order.applied_rule_ids}}</br>
{{xls.order.base_currency_code}}</br>
{{xls.order.customer_email}}</br>
{{xls.order.customer_firstname}}</br>
{{xls.order.customer_lastname}}</br>
{{xls.order.customer_middlename}}</br>
{{xls.order.customer_prefix}}</br>
{{xls.order.customer_suffix}}</br>
{{xls.order.customer_taxvat}}</br>
{{xls.order.discount_description}}</br>
{{xls.order.ext_customer_id}}</br>
{{xls.order.ext_order_id}}</br>
{{xls.order.global_currency_code}}</br>
{{xls.order.hold_before_state}}</br>
{{xls.order.hold_before_status}}</br>
{{xls.order.order_currency_code}}</br>
{{xls.order.original_increment_id}}</br>
{{xls.order.relation_child_id}}</br>
{{xls.order.relation_child_real_id}}</br>
{{xls.order.relation_parent_id}}</br>
{{xls.order.relation_parent_real_id}}</br>
{{xls.order.remote_ip}}</br>
{{xls.order.shipping_method}}</br>
{{xls.order.store_currency_code}}</br>
{{xls.order.store_name}}</br>
{{xls.order.x_forwarded_for}}</br>
{{xls.order.customer_note}}</br>
{{xls.order.created_at}}</br>
{{xls.order.updated_at}}</br>
{{xls.order.total_item_count}}</br>
{{xls.order.customer_gender}}</br>
{{xls.order.base_custbalance_amount}}</br>
{{xls.order.currency_base_id}}</br>
{{xls.order.currency_code}}</br>
{{xls.order.currency_rate}}</br>
{{xls.order.custbalance_amount}}</br>
{{xls.order.is_hold}}</br>
{{xls.order.is_multi_payment}}</br>
{{xls.order.real_order_id}}</br>
{{xls.order.tax_percent}}</br>
{{xls.order.tracking_numbers}}</br>
{{xls.order.hidden_tax_amount}}</br>
{{xls.order.base_hidden_tax_amount}}</br>
{{xls.order.shipping_hidden_tax_amount}}</br>
{{xls.order.base_shipping_hidden_tax_amount}}</br>
{{xls.order.hidden_tax_invoiced}}</br>
{{xls.order.base_hidden_tax_invoiced}}</br>
{{xls.order.hidden_tax_refunded}}</br>
{{xls.order.base_hidden_tax_refunded}}</br>

                    
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
