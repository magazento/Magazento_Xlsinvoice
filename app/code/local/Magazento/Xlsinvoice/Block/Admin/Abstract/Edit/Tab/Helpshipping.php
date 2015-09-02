<?php
/*
 *  Created on Aug 30, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Xlsinvoice_Block_Admin_Abstract_Edit_Tab_Helpshipping extends Mage_Adminhtml_Block_Widget_Form {


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
                    

{{xls.shipping.entity_id}} <br/>
{{xls.shipping.parent_id}} <br/>
{{xls.shipping.customer_address_id}} <br/>
{{xls.shipping.quote_address_id}} <br/>
{{xls.shipping.region_id}} <br/>
{{xls.shipping.customer_id}} <br/>
{{xls.shipping.fax}} <br/>
{{xls.shipping.region}} <br/>
{{xls.shipping.postcode}} <br/>
{{xls.shipping.lastname}} <br/>
{{xls.shipping.street}} <br/>
{{xls.shipping.city}} <br/>
{{xls.shipping.email}} <br/>
{{xls.shipping.telephone}} <br/>
{{xls.shipping.country_id}} <br/>
{{xls.shipping.firstname}} <br/>
{{xls.shipping.address_type}} <br/>
{{xls.shipping.prefix}} <br/>
{{xls.shipping.middlename}} <br/>
{{xls.shipping.suffix}} <br/>
{{xls.shipping.company}} <br/>
{{xls.shipping.address_id}} <br/>
{{xls.shipping.gift_message_id}} <br/>
{{xls.shipping.tax_id}} <br/>
                    
                '),            
        ));        
        
        
//        $form->setValues($model->getData());
        $this->setForm($form);

        return parent::_prepareForm();
    }

}
