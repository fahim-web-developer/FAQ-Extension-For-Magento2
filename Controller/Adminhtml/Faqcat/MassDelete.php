<?php
namespace Fahim\Faq\Controller\Adminhtml\Faqcat;

use Magento\Backend\App\Action;

/**
 * Class MassDelete
 * @package Fahim\Faq\Controller\Adminhtml\Faqcat
 */
class MassDelete extends \Magento\Backend\App\Action
{

    public function execute()
    {
        $blogPostId = $this->getRequest()->getParam('faqcat');
        if (!is_array($blogPostId) || empty($blogPostId)) {
            $this->messageManager->addError(__(
                'Please select faq category post(s).'
            ));
        } else {
            try {
                foreach ($blogPostId as $postId) {
                    $post = $this->_objectManager->get(
                        'Fahim\faq\Model\Faqcat'
                    )->load($postId);
                    $post->delete();
                }
                $this->messageManager->addSuccess(__(
                    'A total of %1 record(s) have been deleted.',
                    count($blogPostId)
                ));
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }
        return $this->resultRedirectFactory->create()->setPath('*/*/index');
    }

    /**
     * @return mixed
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Fahim_Faq::faq');
    }
}
