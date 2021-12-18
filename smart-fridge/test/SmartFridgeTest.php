<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\Item;
use Kata\SmartFridge;
use PHPUnit\Framework\TestCase;

class SmartFridgeTest extends TestCase
{
    public function test_should_show_two_days_expiring_for_peppers()
    {
        $fridge = new SmartFridge();
        $fridge->setCurrentDate("18/10/2021");
        $fridge->scanAddedItem(new Item("Peppers", "20/10/21", "sealed"));
        $this->assertEquals("Peppers: 2 days remaining", $fridge->showDisplay());
    }

    public function test_should_show_one_day_expiring_for_peppers()
    {
        $fridge = new SmartFridge();
        $fridge->setCurrentDate("19/10/2021");
        $fridge->scanAddedItem(new Item("Peppers", "20/10/21", "sealed"));
        $this->assertEquals("Peppers: 1 day remaining", $fridge->showDisplay());
    }

    public function test_pepper_should_expires_in_one_day_and_milk_should_expires_in_two()
    {
        $fridge = new SmartFridge();
        $fridge->setCurrentDate("19/10/2021");
        $fridge->scanAddedItem(new Item("Peppers", "20/10/21", "sealed"));
        $fridge->scanAddedItem(new Item("Milk", "21/10/21", "sealed"));

        $expected = <<<EOD
Peppers: 1 day remaining
Milk: 2 days remaining
EOD;
        $this->assertEquals($expected, $fridge->showDisplay());
    }
}
