<?php

namespace Commerce9\Pos\Controller\Pos;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\LayoutFactory;
use Magento\Framework\View\Result\PageFactory;

class ProductList extends Action
{
    protected $resultPageFactory;

    protected $resultJsonFactory;

    protected $resultLayoutFactory;

    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory,
        LayoutFactory $resultLayoutFactory,
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->resultLayoutFactory = $resultLayoutFactory;

        parent::__construct($context);
    }
    public function execute()
    {
        $result =  $this->resultLayoutFactory->create();
        $response =  $this->resultJsonFactory->create();
        $resultPage = $this->resultPageFactory->create(ResultFactory::TYPE_PAGE);

        $block = $resultPage->getLayout()
            ->createBlock(\Magento\Catalog\Block\Product\ListProduct::class)
            ->setTemplate('Magento_Catalog::product/list.phtml')
            ->setCategoryId(1)
            ->toHtml();

        $response->setData($block);
        return $block;
    }
}
