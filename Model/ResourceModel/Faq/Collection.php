<?php
namespace Fahim\Faq\Model\ResourceModel\Faq;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected function _construct()
    {
        $this->_init(
            'Fahim\Faq\Model\Faq',
            'Fahim\Faq\Model\ResourceModel\Faq'
        );
    }
}
