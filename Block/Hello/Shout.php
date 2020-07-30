<?php

namespace Foggyline\Unitly\Block\Hello;

use Magento\Framework\View\Element\Template;

class Shout extends Template
{
    public function greeting($name)
    {
        return 'Hello ' . $this->escapeHtml($name);
    }
}
