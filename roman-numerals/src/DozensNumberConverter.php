<?php


namespace Kata;


class DozensNumberConverter implements Convertable
{
    use UnitConverter;

    public int $mod = 0;
    private int $isDivisibleBy = 0;
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function toRoman()
    {
        $romanNumeral = '';

        $this->mod = $this->amount % 10;
        $this->isDivisibleBy = $this->amount / 10;

        if ( $this->isDivisibleBy > 0 ) {
            $romanNumeral .= $this->unitConverter($this->amount,'X','L','C',10);
        }

        return $romanNumeral;
    }

    public function divisionRest(): int
    {
         return $this->amount / 10;
    }
}
