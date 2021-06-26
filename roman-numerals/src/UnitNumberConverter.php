<?php


namespace Kata;


class UnitNumberConverter implements Convertable
{
    use UnitConverter;

    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function toRoman()
    {
        return $this->unitConverter($this->amount, 'I', 'V', 'X');
    }

    public function divisionRest(): int
    {
        return $this->amount % 10;
    }
}
