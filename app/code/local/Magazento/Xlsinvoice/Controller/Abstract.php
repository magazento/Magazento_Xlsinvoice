<?php

abstract class Magazento_Xlsinvoice_Controller_Abstract extends Mage_Adminhtml_Controller_Action
{
    
    public function wysiwygAction() {
        $elementId = $this->getRequest()->getParam('element_id', md5(microtime()));
        $content = $this->getLayout()->createBlock('adminhtml/catalog_helper_form_wysiwyg_content', '', array(
                    'editor_element_id' => $elementId
                ));
        $this->getResponse()->setBody($content->toHtml());
    }
    
    protected function _initAction() {
        $this->loadLayout()->_setActiveMenu('system/xlsinvoice');
        return $this;
    }
    
    public function editAction() {
        if (Mage::helper('xlsinvoice')->versionUseAdminTitle()) {
            $this->_title($this->__('XLS '.$this->_type));
        }
        $this->_initAction()
                ->_addContent($this->getLayout()->createBlock('xlsinvoice/admin_abstract_edit')->setData('action', $this->getUrl('*/admin_'.$this->_type.'/save')))
                ->_addLeft($this->getLayout()->createBlock('xlsinvoice/admin_abstract_edit_tabs'))
                ->renderLayout();
    }    
    
    
    public function saveAction() {
        if ($data = $this->getRequest()->getPost()) {
            try {
                
                if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != '') {
                    try {
                        $uploader = new Varien_File_Uploader('file');
                        $uploader->setAllowedExtensions(array('xls','xlsx','ods'));
                        $uploader->setAllowRenameFiles(false);
                        $uploader->setFilesDispersion(false);
                        $path = Mage::getBaseDir('media') . DS. 'magazento_xlsinvoice'.DS;

                        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                        $image_md5_name = $this->_type . '_'. time().'.'.$ext;
                        
                        $uploader->save($path, $image_md5_name);
                        $data['file'] = $image_md5_name;
                        
                    } catch (Exception $e) {
                        var_dump($e);
                    }
                } else {       
                    if (isset($data['file']['delete']) && $data['file']['delete'] == 1) {
                        $data['file'] = '';
                    }
                }         
//                var_dump($data['background_image']);
//                exit();
                Mage::getModel('xlsinvoice/data')->saveSettings($this->_type,$data);
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('xlsinvoice')->__('XLS '.$this->_type.' template was successfully saved'));
                $this->_redirect('*/*/edit');
                return;
            } catch (Exception $e) {
                // display error message
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                // save data in session
                Mage::getSingleton('adminhtml/session')->setFormData($data);
                // redirect to edit form
                $this->_redirect('*/*/edit');
                return;
            }
        }
        $this->_redirect('*/*/');
    }    
    
    
    
}
