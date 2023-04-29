<?php
namespace Fahim\Faq\Block\Faq;

/**
 * Class FaqDescription
 * @package Fahim\Faq\Block\Faq
 */
class FaqDescription extends \Magento\Framework\View\Element\Template
{

    /**
     * @var \Fahim\Faq\Helper\Data
     */
    protected $_dataHelper;

    /**
     * FaqDescription constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Fahim\Faq\Helper\Data $dataHelper
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Fahim\Faq\Helper\Data $dataHelper
    ) {
        parent::__construct($context);
        $this->_dataHelper = $dataHelper;
    }

    /**
     * @return mixed
     */
    public function getPageTitle()
    {
        $pageTitle = $this->_dataHelper->getPageTitle();
        return $pageTitle;
    }

    /**
     * @return mixed
     */
    public function getPageDescription()
    {
        $pageDescription = $this->_dataHelper->getPageDescription();
        return $pageDescription;
    }
}
