<?php
namespace Fahim\Faq\Model\ResourceModel\Faqcat;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected function _construct()
    {
        $this->_init(
            'Fahim\Faq\Model\Faqcat',
            'Fahim\Faq\Model\ResourceModel\Faqcat'
        );
    }
}
