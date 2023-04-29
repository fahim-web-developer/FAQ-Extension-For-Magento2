<?php
namespace Fahim\Faq\Model;

use Magento\Framework\Model\AbstractModel;

class Faq extends AbstractModel
{

    /**
     *
     */
    protected function _construct()
    {
        $this->_init('Fahim\Faq\Model\ResourceModel\Faq');
    }
}
