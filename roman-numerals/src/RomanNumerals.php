<?php

namespace Kata;

class RomanNumerals
{

    private array $classes = [
        ThousandNumberConverter::class,
        HundredsNumberConverter::class,
        DozensNumberConverter::class,
        UnitNumberConverter::class,
    ];

    public function convert(int $amount): string
    {
        $expectedResult = '';
        if ($amount < 4000) {
            foreach ($this->classes as $converter) {
                $thousand = new $converter($amount);

                $expectedResult .= $thousand->toRoman();

                $amount = $thousand->divisionRest();
            }
            return $expectedResult;
        }
        return $expectedResult;
    }
}
