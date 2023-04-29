<?php
namespace Fahim\Faq\Controller\Adminhtml\Faqcat;

/**
 * Class Edit
 * @package Fahim\Faq\Controller\Adminhtml\Faqcat
 */
class Edit extends \Fahim\Faq\Controller\Adminhtml\Faqcat
{

    /**
     *
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('faq_cat_id');
        $model = $this->_faqcatFactory->create();

        if ($id) {
            $model->load($id);
            if (!$model->getFaqCatId()) {
                $this->messageManager->addError(__(
                    'This Category no longer exists.'
                ));
                $this->_redirect('*/*/');
                return;
            }
        }
        $data = $this->_getSession()->getFormData(true);
        if (!empty($data)) {
            $model->setData($data);
        }
        $this->_coreRegistry->register('faqcat', $model);
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }

    /**
     * @return mixed
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Fahim_Faq::faq');
    }
}
