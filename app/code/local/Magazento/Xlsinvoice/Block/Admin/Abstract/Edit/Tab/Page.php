<?php
/*
 *  Created on Aug 30, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Xlsinvoice_Block_Admin_Abstract_Edit_Tab_Page extends Mage_Adminhtml_Block_Widget_Form {


    protected function _prepareForm() {
        
        $node = Mage::helper('xlsinvoice')->getXlsTypeByController();
        $data = Mage::getSingleton('xlsinvoice/data')->getSettings($node);
        $path = Mage::getBaseDir() . DS .'media'. DS . 'magazento_xlsinvoice'.DS;
//        var_dump($path.$data[$node]['file']);
        
        $form = new Varien_Data_Form(array('id' => 'edit_form_item', 'action' => $this->getData('action'), 'method' => 'post'));
        $form->setHtmlIdPrefix('item_');
        $fieldset = $form->addFieldset('base_fieldset', array('legend' => Mage::helper('xlsinvoice')->__('General Information'), 'class' => 'fieldset-wide'));

        if (Mage::helper('xlsinvoice')->versionUseWysiwig()) {
            $wysiwygConfig = Mage::getSingleton('xlsinvoice/wysiwyg_config')->getConfig();
        } else {
            $wysiwygConfig = '';
        }

        $fieldset->addField('label', 'label', array(
          'label'     => Mage::helper('xlsinvoice')->__('Excel template'),
          'name'      => 'label',
            'note' => "Loaded template file location",
          'value' => $path.$data[$node]['file'],  
        )); 
        
        $fieldset->addField('file', 'file', array(
          'label'     => Mage::helper('xlsinvoice')->__('Upload & update '),
          'required'  => false,
          'name'      => 'file',
          'value' => $path.$data[$node]['file'],  
        )); 
        
        $fieldset->addField('template_type', 'select', array(
            'label' => Mage::helper('xlsinvoice')->__('Template file type'),
            'title' => Mage::helper('xlsinvoice')->__('Template file type'),
            'name' => 'template_type',
            'value' => $data[$node]['template_type'],
            'required' => true,
            'note' => "Template file type in this selet should be equal to your tempalte file",
            'options' => array(
                'Excel2007' => Mage::helper('xlsinvoice')->__('*.xlsx - Excel2007'),
                'Excel5' => Mage::helper('xlsinvoice')->__('*.xls - Excel5'),
            ),
        ));
        
//        $fieldset->addField('output_type', 'select', array(
//            'label' => Mage::helper('xlsinvoice')->__('Output file type'),
//            'title' => Mage::helper('xlsinvoice')->__('Output file type'),
//            'name' => 'output_type',
//            'value' => $data[$node]['output_type'],
//            'required' => true,
//            'options' => array(
//                'Excel2007' => Mage::helper('xlsinvoice')->__('*.xlsx - Excel2007'),
//                'Excel5' => Mage::helper('xlsinvoice')->__('*.xls - Excel5'),
//            ),
//        ));
//        
        
        
        $this->setForm($form);

        return parent::_prepareForm();
    }

}
