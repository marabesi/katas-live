<?php


namespace Kata;


class HundredsNumberConverter implements Convertable
{
    use UnitConverter;

    private int $isDivisibleBy = 0;
    private int $amount;
    private int $divisor = 100;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function toRoman()
    {
        $romanNumeral = '';

        $this->isDivisibleBy = $this->amount / $this->divisor;

        if ( $this->isDivisibleBy > 0 ) {
            $romanNumeral .= $this->unitConverter($this->amount,'C','D','M', $this->divisor);
        }

        return $romanNumeral;
    }

    public function divisionRest(): int
    {
         return $this->amount % $this->divisor;
    }
}
