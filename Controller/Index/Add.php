<?php

namespace Project\Test\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Add extends \Magento\Framework\App\Action\Action
{
    
    /**
     * 
     * @param \Magento\Framework\App\Action\Context $context,
     */
    public function __construct(
        Context $context,
        \Project\Test\Model\TestimonialFactory $testimonialFactory
    ) {
        parent::__construct($context);
        $this->testimonialFactory = $testimonialFactory;
    }


    /**
     * Create new Entity
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {

        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $title = "Add New Data";

        $resultPage->getConfig()->getTitle()->prepend($title);

        return $resultPage;
    }
}
