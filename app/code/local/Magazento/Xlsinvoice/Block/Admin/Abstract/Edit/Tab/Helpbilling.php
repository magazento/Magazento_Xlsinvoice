<?php
/*
 *  Created on Aug 30, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Xlsinvoice_Block_Admin_Abstract_Edit_Tab_Helpbilling extends Mage_Adminhtml_Block_Widget_Form {


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
                    

{{xls.billing.entity_id}} <br/>
{{xls.billing.parent_id}} <br/>
{{xls.billing.customer_address_id}} <br/>
{{xls.billing.quote_address_id}} <br/>
{{xls.billing.region_id}} <br/>
{{xls.billing.customer_id}} <br/>
{{xls.billing.fax}} <br/>
{{xls.billing.region}} <br/>
{{xls.billing.postcode}} <br/>
{{xls.billing.lastname}} <br/>
{{xls.billing.street}} <br/>
{{xls.billing.city}} <br/>
{{xls.billing.email}} <br/>
{{xls.billing.telephone}} <br/>
{{xls.billing.country_id}} <br/>
{{xls.billing.firstname}} <br/>
{{xls.billing.address_type}} <br/>
{{xls.billing.prefix}} <br/>
{{xls.billing.middlename}} <br/>
{{xls.billing.suffix}} <br/>
{{xls.billing.company}} <br/>
{{xls.billing.address_id}} <br/>
{{xls.billing.gift_message_id}} <br/>
{{xls.billing.tax_id}} <br/>
                    
                '),            
        ));        
        
        
//        $form->setValues($model->getData());
        $this->setForm($form);

        return parent::_prepareForm();
    }

}
