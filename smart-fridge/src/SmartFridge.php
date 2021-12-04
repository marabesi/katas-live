<?php

namespace Kata;

use DateTime;

class SmartFridge
{
    private array $items = [];

    public function addItem(Item $item)
    {
        $item->createTimestamp();
        $this->items[] = $item;
        return $this->items;
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
