<?php
/*
 *  Created on Aug 30, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Xlsinvoice_Block_Admin_Abstract_Edit_Tab_Helpfunction extends Mage_Adminhtml_Block_Widget_Form {


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
                    <b><i> You can you following functions to format invoice and order varables</i></b><br/>
                    round {{xls.invoice.XXX.round}} <br/>
                    day {{xls.invoice.XXX.day}} <br/>
                    month {{xls.invoice.XXX.month}} <br/>
                    year {{xls.invoice.XXX.year}} <br/>
                    round {{xls.order.XXX.round}} <br/>
                    day {{xls.order.XXX.day}} <br/>
                    month {{xls.order.XXX.month}} <br/>
                    year {{xls.order.XXX.year}} <br/><br/>
                    
                    
                    <b><i>Example:</i></b><br/>
                    {{xls.invoice.shipping_tax_amount}} will display 1002.01<br/>
                    {{xls.invoice.shipping_tax_amount.round}} will display 1002
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
