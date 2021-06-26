<?php


namespace Kata;


class ThousandNumberConverter implements Convertable
{
    use UnitConverter;

    private int $amount;
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function divisionRest(): int
    {
        return $this->amount % 1000;
    }

    public function toRoman()
    {
        $romanNumeral = '';

        $this->isDivisibleBy = $this->amount / 1000;

        if ( $this->isDivisibleBy > 0 ) {
            $romanNumeral .= $this->unitConverter($this->amount,'M','','',1000);
        }

        return $romanNumeral;
    }

}
