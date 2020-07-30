<?php

namespace Foggyline\Unitly\Controller;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

abstract class Hello extends Action
{
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }
}
