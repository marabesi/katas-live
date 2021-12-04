<?php

namespace Kata;

class SmartFridge
{
    private array $items = [];

    public function addItem(Item $item)
    {
        $this->items[] = $item;

        return $this->items;
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
