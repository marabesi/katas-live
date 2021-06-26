<?php


namespace Kata;


class ThousandNumberConverter implements Convertable
{
    use UnitConverter;

    private int $amount;
    private int $divisor = 1000;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function divisionRest(): int
    {
        return $this->amount % $this->divisor;
    }

    public function toRoman()
    {
        $romanNumeral = '';

        $this->isDivisibleBy = $this->amount / $this->divisor;

        if ( $this->isDivisibleBy > 0 ) {
            $romanNumeral .= $this->unitConverter($this->amount,'M','','', $this->divisor);
        }

        return $romanNumeral;
    }

}
