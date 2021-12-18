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
        $output = '';

        foreach ($this->items as $key => $item) {
            $currentDate = DateTime::createFromFormat('d/m/Y',$this->currentDate);
            $date = DateTime::createFromFormat('d/m/y', $item->getExpires());
            $dateDiff = $currentDate->diff($date);

            $isLastItem = $key === array_key_last($this->items);

            $breakLine =  $isLastItem ? '' : "\n";

            $remainingInDays = $dateDiff->days;
            $remaining = $remainingInDays > 1 ? 'days' : 'day';

            $output .= sprintf('%s: %s %s remaining%s', $item->getName(), $remainingInDays, $remaining, $breakLine);
        }

        return $output;
    }

}
