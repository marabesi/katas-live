<?php
declare(strict_types=1);

namespace Kata\Test;

use DateInterval;
use Kata\Item;
use Kata\SmartFridge;
use PHPUnit\Framework\TestCase;
use DateTime;

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
        $fridge->addItem(new Item('Feijoada', new DateTime()));
        $this->assertCount(1, $fridge->getItems());
    }

    public function test_should_add_2_items_into_fridge()
    {
        $fridge = new SmartFridge();
        $fridge->addItem(new Item('Feijoada', new DateTime()));
        $fridge->addItem(new Item('Coxinha', new DateTime()));

        $this->assertCount(2, $fridge->getItems());
    }

    public function test_should_add_items_with_expiration_date_for_tomorrow()
    {
        $tomorrow = new DateTime();
        $tomorrow->add(new DateInterval('P1D'));

        $fridge = new SmartFridge();
        $fridge->addItem(new Item('Feijoada', $tomorrow));

        $items = $fridge->getItems();
        $item = $items[0];

        $this->assertEquals($item->expiration(), $tomorrow);
    }

    public function test_should_add_items_with_now_as_added_timestamp()
    {
        $tomorrow = new DateTime();
        $tomorrow->add(new DateInterval('P1D'));

        $fridge = new SmartFridge();
        $fridge->addItem(new Item('Feijoada', $tomorrow));

        $items = $fridge->getItems();
        $item = $items[0];

        $this->assertEquals($item->timestamp(), new DateTime());
    }
}
