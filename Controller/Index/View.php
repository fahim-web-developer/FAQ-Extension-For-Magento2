<?php
namespace Fahim\Faq\Controller\Index;

use Magento\Framework\App\Action\Context;

class View extends \Magento\Framework\App\Action\Action
{

    protected $viewHelper;
    protected $_dataHelper;

    public function __construct(
        Context $context,
        \Fahim\Faq\Helper\Data $dataHelper,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->_dataHelper = $dataHelper;
        parent::__construct($context);
    }

    public function execute()
    {
        $page = $this->resultPageFactory->create();
        return $page;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return true;
    }
}
