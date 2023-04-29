<?php

namespace Fahim\Faq\Controller\Adminhtml\Faq;

use Fahim\Faq\Controller\Adminhtml\Faq;

/**
 * Class RelatedProducts
 * @package Fahim\Faq\Controller\Adminhtml\Faq
 */
class RelatedProducts extends Faq
{
    /**
     *
     */
    public function execute()
    {
        if (empty($this->_model)) {
            $this->_model = $this->_faqFactory->create();

            $id = (int)$this->getRequest()->getParam('faq_id');
            if ($id) {
                $this->_model->load($id);
            }
        }
        $this->_coreRegistry->register('related_pro_model', $this->_model);
        $this->_view->loadLayout()
            ->getLayout()
            ->getBlock('fahim_faq_relatedproducts')
            ->setProductsRelated(
                $this->getRequest()->getPost('products_related', null)
            );

        $this->_view->renderLayout();
    }
}
