<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\Item;
use Kata\SmartFridge;
use PHPUnit\Framework\TestCase;

class SmartFridgeTest extends TestCase
{

    public function test_should_add_item_into_fridge()
    {
        $fridge = new SmartFridge();
        $result = $fridge->addItem(new Item('Feijoada'));
        $this->assertCount(1,$result);
    }

}
