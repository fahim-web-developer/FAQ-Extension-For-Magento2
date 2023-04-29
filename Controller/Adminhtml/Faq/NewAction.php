<?php
namespace Fahim\Faq\Controller\Adminhtml\Faq;

/**
 * Class NewAction
 * @package Fahim\Faq\Controller\Adminhtml\Faq
 */
class NewAction extends \Fahim\Faq\Controller\Adminhtml\Faq
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
