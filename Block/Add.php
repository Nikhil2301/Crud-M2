<?php

namespace Project\Test\Block;


class Add extends \Magento\Framework\View\Element\Template
{

    public function __construct(

        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\Registry $coreRegistry,
        \Project\Test\Model\TestimonialFactory $postLoader,
        array $data = []
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_coreRegistry = $coreRegistry;
        $this->_postLoader = $postLoader;
        return parent::__construct($context, $data);
    }

    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getFormAction()
    {
        return $this->getUrl('frontgrid/index/save', ['_secure' => true]);
    }

    public function getEditRecord($id)
    {
        $post = $this->_postLoader->create();
        $result = $post->load($id);
        $result = $result->getData();
        return $result;
    }
}
