<?php
/*
 *  Created on Aug 30, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Xlsinvoice_Block_Admin_Abstract_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs {

    public function __construct() {
        parent::__construct();
        $pdfType = Mage::helper('xlsinvoice')->getXlsTypeByController();
        $this->setId('xlsinvoice_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('xlsinvoice')->__('XLS - '.$pdfType));
    }

    protected function _beforeToHtml() {
        $pdfType = Mage::helper('xlsinvoice')->getXlsTypeByController();
        
        $this->addTab('form_section_page', array(
            'label' => Mage::helper('xlsinvoice')->__('Page settings'),
            'label' => Mage::helper('xlsinvoice')->__('Page settings'),
            'content' => $this->getLayout()->createBlock('xlsinvoice/admin_abstract_edit_tab_page')->toHtml(),
        ));
        
//        $this->addTab('form_section_helpgeneral', array(
//            'label' => Mage::helper('xlsinvoice')->__('General variables'),
//            'title' => Mage::helper('xlsinvoice')->__('General variables'),
//            'content' => $this->getLayout()->createBlock('xlsinvoice/admin_abstract_edit_tab_helpgeneral')->toHtml(),
//        ));        
        
        $this->addTab('form_section_helpinvoice', array(
            'label' => Mage::helper('xlsinvoice')->__('Invoice variables'),
            'title' => Mage::helper('xlsinvoice')->__('Invoice variables'),
            'content' => $this->getLayout()->createBlock('xlsinvoice/admin_abstract_edit_tab_helpinvoice')->toHtml(),
        ));
        
        $this->addTab('form_section_helporder', array(
            'label' => Mage::helper('xlsinvoice')->__('Order variables'),
            'title' => Mage::helper('xlsinvoice')->__('Order variables'),
            'content' => $this->getLayout()->createBlock('xlsinvoice/admin_abstract_edit_tab_helporder')->toHtml(),
        ));
        
        $this->addTab('form_section_helporderedproduct', array(
            'label' => Mage::helper('xlsinvoice')->__('Ordered item variables'),
            'title' => Mage::helper('xlsinvoice')->__('Ordered item variables'),
            'content' => $this->getLayout()->createBlock('xlsinvoice/admin_abstract_edit_tab_helporderedproduct')->toHtml(),
        ));
        
        $this->addTab('form_section_helpbilling', array(
            'label' => Mage::helper('xlsinvoice')->__('Billing variables'),
            'title' => Mage::helper('xlsinvoice')->__('Billing variables'),
            'content' => $this->getLayout()->createBlock('xlsinvoice/admin_abstract_edit_tab_helpbilling')->toHtml(),
        ));
        
        $this->addTab('form_section_helpshipping', array(
            'label' => Mage::helper('xlsinvoice')->__('Shipping variables'),
            'title' => Mage::helper('xlsinvoice')->__('Shipping variables'),
            'content' => $this->getLayout()->createBlock('xlsinvoice/admin_abstract_edit_tab_helpshipping')->toHtml(),
        ));
        
        $this->addTab('form_section_helpfunction', array(
            'label' => Mage::helper('xlsinvoice')->__('Help Functions'),
            'title' => Mage::helper('xlsinvoice')->__('Help Functions'),
            'content' => $this->getLayout()->createBlock('xlsinvoice/admin_abstract_edit_tab_helpfunction')->toHtml(),
        ));       
        
        $this->addTab('form_section_helpattribute', array(
            'label' => Mage::helper('xlsinvoice')->__('Product Attributes'),
            'title' => Mage::helper('xlsinvoice')->__('Product Attributes'),
            'content' => $this->getLayout()->createBlock('xlsinvoice/admin_abstract_edit_tab_helpattribute')->toHtml(),
        ));        
        
        return parent::_beforeToHtml();
    }

}