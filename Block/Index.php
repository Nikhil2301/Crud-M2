<?php
namespace Project\Test\Block;
 
use Magento\Framework\App\Filesystem\DirectoryList;
 
class Index extends \Magento\Framework\View\Element\Template
{
     protected $_filesystem;
 
     public function __construct(
          \Magento\Framework\View\Element\Template\Context $context,
          \Project\Test\Model\TestimonialFactory $testimonialFactory
          )
     {
          parent::__construct($context);
          $this->_testimonialFactory = $testimonialFactory;
     }
 
     public function getResult()
     {
          $post = $this->_testimonialFactory->create();
          $collection = $post->getCollection();
          return $collection;
     }
     
}

?>
