<?php


namespace Kata;


class UnitNumberConverter implements Convertable
{
    use UnitConverter;

    public function toRoman(int $number)
    {
        return $this->unitConverter($number, 'I', 'V', 'X');
    }
}
