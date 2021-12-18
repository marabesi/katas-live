<?php

namespace Kata;

use DateTime;

class SmartFridge
{
    private string $currentDate;
    private array $items = [];

    public function setCurrentDate(string $currentDate)
    {
        $this->currentDate = $currentDate;
    }

    public function signalFridgeDoorOpened()
    {
    }

    public function scanAddedItem(Item $item)
    {
        $this->items[] = $item;
    }

    public function signalFridgeDoorClosed()
    {
    }

    public function showDisplay(): string
    {
        $item = $this->items[0];
        $currentDate = DateTime::createFromFormat('d/m/Y',$this->currentDate);
        $date = DateTime::createFromFormat('d/m/Y', $item->getExpires());
        $dateDiff = $currentDate->diff($date);
        return sprintf('%s: %s day remaining', $item->getName(), $dateDiff->days);
    }

}
