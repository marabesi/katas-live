<?php


namespace Kata;


class HundredsNumberConverter implements Convertable
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

        $this->isDivisibleBy = $this->amount / 100;

        if ( $this->isDivisibleBy > 0 ) {
            $romanNumeral .= $this->unitConverter($this->amount,'C','D','M',100);
        }

        return $romanNumeral;
    }

    public function divisionRest(): int
    {
         return $this->amount % 100;
    }
}
