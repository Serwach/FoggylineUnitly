<?php

namespace Foggyline\Unitly\Test\Unit\Block\Hello;

use Foggyline\Unitly\Block\Hello\Shout;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use PHPUnit_Framework_TestCase;

class ShoutTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Shout
     */
    protected $block;

    public function testGreeting()
    {
        $name = 'Foggyline';

        $this->assertEquals(
            'Hello ' . $this->block->escapeHtml($name),
            $this->block->greeting($name)
        );
    }

    protected function setUp()
    {
        $objectManager = new ObjectManager($this);
        $this->block = $objectManager->getObject('Foggyline\Unitly\Block\Hello\Shout');
    }
}
