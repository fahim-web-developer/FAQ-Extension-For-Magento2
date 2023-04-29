<?php
namespace Fahim\Faq\Controller\Adminhtml\Faqcat;

/**
 * Class NewAction
 * @package Fahim\Faq\Controller\Adminhtml\Faqcat
 */
class NewAction extends \Fahim\Faq\Controller\Adminhtml\Faqcat
{

    /**
     *
     */
    public function execute()
    {
        $this->_forward('edit');
    }

    /**
     * @return mixed
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Fahim_Faq::faq');
    }
}
