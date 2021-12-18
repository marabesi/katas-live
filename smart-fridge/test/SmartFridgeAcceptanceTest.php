<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\SmartFridge;
use Kata\Item;
use PHPUnit\Framework\TestCase;

class SmartFridgeAcceptanceTest extends TestCase
{
    public function test_should_list_items_that_are_not_expired() {
        $fridge = new SmartFridge();

        $fridge->setCurrentDate("18/10/2021");
        $fridge->signalFridgeDoorOpened();
        $fridge->scanAddedItem(new Item("Peppers", "20/10/21", "sealed"));
        $fridge->scanAddedItem(new Item("Lettuce", "20/10/21", "sealed"));
        $fridge->signalFridgeDoorClosed();

        $output = $fridge->showDisplay();

        $expected = <<<EOD
Lettuce: 2 days remaining
Peppers: 2 day remaining
EOD;
        $this->assertEquals($expected, $output);
    }
}
