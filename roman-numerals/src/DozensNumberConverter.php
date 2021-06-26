<?php


namespace Kata;


class DozensNumberConverter implements Convertable
{
    use UnitConverter;

    private int $amount;
    private int $divisor = 10;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function toRoman()
    {
        $romanNumeral = '';

        $isDivisibleBy = $this->amount / $this->divisor;

        if ( $isDivisibleBy > 0 ) {
            $romanNumeral .= $this->unitConverter($this->amount,'X','L','C', $this->divisor);
        }

        return $romanNumeral;
    }

    public function divisionRest(): int
    {
         return $this->amount % $this->divisor;
    }
}
