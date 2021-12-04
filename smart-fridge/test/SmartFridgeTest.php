<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\Item;
use Kata\SmartFridge;
use PHPUnit\Framework\TestCase;

class SmartFridgeTest extends TestCase
{

    public function test_fridge_starts_empty()
    {
        $fridge = new SmartFridge();
        $this->assertCount(0, $fridge->getItems());
    }
    
    public function test_should_add_item_into_fridge()
    {
        $fridge = new SmartFridge();
        $fridge->addItem(new Item('Feijoada'));
        $this->assertCount(1, $fridge->getItems());
    }

    public function test_should_add_2_items_into_fridge()
    {
        $fridge = new SmartFridge();
        $fridge->addItem(new Item('Feijoada'));
        $fridge->addItem(new Item('Coxinha'));

        $this->assertCount(2, $fridge->getItems());
    }

}
