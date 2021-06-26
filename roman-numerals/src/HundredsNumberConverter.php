<?php


namespace Kata;


class HundredsNumberConverter implements Convertable
{
    use UnitConverter;

    private int $amount;
    private int $divisor = 100;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function toRoman()
    {
        $romanNumeral = '';

        $isDivisibleBy = $this->amount / $this->divisor;

        if ( $isDivisibleBy > 0 ) {
            $romanNumeral .= $this->unitConverter($this->amount,'C','D','M', $this->divisor);
        }

        return $romanNumeral;
    }

    public function divisionRest(): int
    {
         return $this->amount % $this->divisor;
    }
}
