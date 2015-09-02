<?php
/*
 *  Created on Aug 30, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Xlsinvoice_Block_Admin_Abstract_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    public function __construct()
    {
    	$this->_objectId = 'item_id';
        $pdfType = Mage::helper('xlsinvoice')->getXlsTypeByController();
        $this->_controller = 'admin_'.$pdfType;
        $this->_blockGroup = 'xlsinvoice';

        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save XLS template - '.$pdfType),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);
        

        $this->_formScripts[] = "
           function toggleEditor() {
                if (tinyMCE.getInstanceById('block_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'block_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'block_content');
                }
            }
            
            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
            
        ";

        
        if (!$this->hasData('template')) {
            $this->setTemplate('widget/form/container.phtml');
        }

        $objId = $this->getRequest()->getParam($this->_objectId);

    }    
    
    
    

    public function getHeaderText()
    {
//        return Mage::helper('xlsinvoice')->__("Fill out fields");
        return Mage::helper('xlsinvoice')->__("");
    }

}
