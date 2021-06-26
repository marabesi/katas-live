<?php


namespace Kata;


class DozensNumberConverter implements Convertable
{
    use UnitConverter;

    private int $isDivisibleBy = 0;
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function toRoman()
    {
        $romanNumeral = '';

        $this->isDivisibleBy = $this->amount / 10;

        if ( $this->isDivisibleBy > 0 ) {
            $romanNumeral .= $this->unitConverter($this->amount,'X','L','C',10);
        }

        return $romanNumeral;
    }

    public function divisionRest(): int
    {
         return $this->amount % 10;
    }
}
