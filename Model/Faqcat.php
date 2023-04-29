<?php
namespace Fahim\Faq\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class Faqcat
 * @package Fahim\Faq\Model
 */
class Faqcat extends AbstractModel
{

    /**
     *
     */
    protected function _construct()
    {
        $this->_init('Fahim\Faq\Model\ResourceModel\Faqcat');
    }

    /**
     * @param $urlKey
     * @return mixed
     */
    public function checkUrlKey($urlKey)
    {
        return $this->_getResource()->checkUrlKey($urlKey);
    }
}
