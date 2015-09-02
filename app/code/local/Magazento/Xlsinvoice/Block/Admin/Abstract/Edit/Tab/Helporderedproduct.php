<?php
/*
 *  Created on Aug 30, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Xlsinvoice_Block_Admin_Abstract_Edit_Tab_Helporderedproduct extends Mage_Adminhtml_Block_Widget_Form {


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
                    

{{xls.item.order_id}} <br/>
{{xls.item.parent_item_id}} <br/>
{{xls.item.quote_item_id}} <br/>
{{xls.item.store_id}} <br/>
{{xls.item.created_at}} <br/>
{{xls.item.updated_at}} <br/>
{{xls.item.product_id}} <br/>
{{xls.item.product_type}} <br/>
{{xls.item.product_options}} <br/>
{{xls.item.weight}} <br/>
{{xls.item.is_virtual}} <br/>
{{xls.item.sku}} <br/>
{{xls.item.name}} <br/>
{{xls.item.description}} <br/>
{{xls.item.applied_rule_ids}} <br/>
{{xls.item.additional_data}} <br/>
{{xls.item.free_shipping}} <br/>
{{xls.item.is_qty_decimal}} <br/>
{{xls.item.no_discount}} <br/>
{{xls.item.qty_backordered}} <br/>
{{xls.item.qty_canceled}} <br/>
{{xls.item.qty_invoiced}} <br/>
{{xls.item.qty_ordered}} <br/>
{{xls.item.qty_refunded}} <br/>
{{xls.item.qty_shipped}} <br/>
{{xls.item.base_cost}} <br/>
{{xls.item.price}} <br/>
{{xls.item.base_price}} <br/>
{{xls.item.original_price}} <br/>
{{xls.item.base_original_price}} <br/>
{{xls.item.tax_percent}} <br/>
{{xls.item.tax_amount}} <br/>
{{xls.item.base_tax_amount}} <br/>
{{xls.item.tax_invoiced}} <br/>
{{xls.item.base_tax_invoiced}} <br/>
{{xls.item.discount_percent}} <br/>
{{xls.item.discount_amount}} <br/>
{{xls.item.base_discount_amount}} <br/>
{{xls.item.discount_invoiced}} <br/>
{{xls.item.base_discount_invoiced}} <br/>
{{xls.item.amount_refunded}} <br/>
{{xls.item.base_amount_refunded}} <br/>
{{xls.item.row_total}} <br/>
{{xls.item.base_row_total}} <br/>
{{xls.item.row_invoiced}} <br/>
{{xls.item.base_row_invoiced}} <br/>
{{xls.item.row_weight}} <br/>
{{xls.item.gift_message_id}} <br/>
{{xls.item.gift_message_available}} <br/>
{{xls.item.base_tax_before_discount}} <br/>
{{xls.item.tax_before_discount}} <br/>
{{xls.item.weee_tax_applied}} <br/>
{{xls.item.weee_tax_applied_amount}} <br/>
{{xls.item.weee_tax_applied_row_amount}} <br/>
{{xls.item.base_weee_tax_applied_amount}} <br/>
{{xls.item.base_weee_tax_applied_row_amnt}} <br/>
{{xls.item.weee_tax_disposition}} <br/>
{{xls.item.weee_tax_row_disposition}} <br/>
{{xls.item.base_weee_tax_disposition}} <br/>
{{xls.item.base_weee_tax_row_disposition}} <br/>
{{xls.item.ext_order_item_id}} <br/>
{{xls.item.locked_do_invoice}} <br/>
{{xls.item.locked_do_ship}} <br/>
{{xls.item.price_incl_tax}} <br/>
{{xls.item.base_price_incl_tax}} <br/>
{{xls.item.row_total_incl_tax}} <br/>
{{xls.item.base_row_total_incl_tax}} <br/>
{{xls.item.hidden_tax_amount}} <br/>
{{xls.item.base_hidden_tax_amount}} <br/>
{{xls.item.hidden_tax_invoiced}} <br/>
{{xls.item.base_hidden_tax_invoiced}} <br/>
{{xls.item.hidden_tax_refunded}} <br/>
{{xls.item.base_hidden_tax_refunded}} <br/>
{{xls.item.is_nominal}} <br/>
{{xls.item.tax_canceled}} <br/>
{{xls.item.hidden_tax_canceled}} <br/>
{{xls.item.tax_refunded}} <br/>

                '),            
        ));        
        
        
//        $form->setValues($model->getData());
        $this->setForm($form);

        return parent::_prepareForm();
    }

}
