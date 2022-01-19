<?php

namespace Project\Test\Controller\Index;

use Project\Test\Model\TestimonialFactory;

class Save extends \Magento\Framework\App\Action\Action
{
    protected $_testimonial;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        TestimonialFactory $testimonialFactory
    ) {
        $this->_testimonialFactory = $testimonialFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();

        try {
            if (!empty($data['id'])) {
                $rowData = $this->_testimonialFactory->create()->load($data['id']);
            } else {
                
                $rowData = $this->_testimonialFactory->create();
                unset($data['id']);
            }
            $rowData->setData($data);
            $rowData->save();
            $this->messageManager->addSuccess(__("Save Data"));
        } catch (\Exception $e) {
            $this->messageManager->addError(__('please try again. Form Not Submit'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('*/*/');
    }
}
