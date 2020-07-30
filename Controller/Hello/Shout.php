<?php

namespace Foggyline\Unitly\Controller\Hello;

use Foggyline\Unitly\Controller\Hello;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Shout extends Hello
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }

    /**
     * http://magento2.ce/index.php/foggyline_unitly/hello/shout
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();

        $resultPage->getConfig()->getTitle()->set(__('Unitly'));

        return $resultPage;
    }
}
