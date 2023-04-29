<?php
namespace Fahim\Faq\Block\Adminhtml;

/**
 * Class Import
 * @package Fahim\Faq\Block\Adminhtml
 */
class Import extends \Magento\Backend\Block\Template
{
    /**
     * @return mixed
     */
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * @return mixed
     */
    public function getImageMediaUrl()
    {
        return $this->getViewFileUrl('Fahim_Faq::faq.csv');
    }

    /**
     * @return mixed
     */
    public function getCategoryMediaUrl()
    {
        return $this->getViewFileUrl('Fahim_Faq::category.csv');
    }
}
