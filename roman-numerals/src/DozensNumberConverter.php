<?php


namespace Kata;


class DozensNumberConverter implements Convertable
{
    use UnitConverter;

    public int $mod = 0;
    public int $isDivisibleBy = 0;

    public function toRoman(int $amount)
    {
        $romanNumeral = '';

        $this->mod = $amount % 10;
        $this->isDivisibleBy = $amount / 10;

        if ( $this->isDivisibleBy > 0 ) {
            $romanNumeral .= $this->unitConverter($amount,'X','L','C',10);
        }

        return $romanNumeral;
    }
}
