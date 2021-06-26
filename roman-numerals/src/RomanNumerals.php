<?php

namespace Kata;

class RomanNumerals
{

    public function convert(int $amount): string
    {
        if ($amount < 4000) {
            $thousand = new ThousandNumberConverter($amount);
            $expectedResult = $thousand->toRoman();
            if ($thousand->divisionRest() < 1000) {
                $hundreds = new HundredsNumberConverter($thousand->divisionRest());
                $expectedResult .= $hundreds->toRoman();

                if ($hundreds->divisionRest() < 100) {
                    $dozens = new DozensNumberConverter($hundreds->divisionRest());
                    $expectedResult .= $dozens->toRoman();

                    if ($dozens->divisionRest() > 0) {
                        $number = new UnitNumberConverter($dozens->divisionRest());
                        $expectedResult .= $number->toRoman();
                    }
                }
            }
            return $expectedResult;
        }
    }
}
