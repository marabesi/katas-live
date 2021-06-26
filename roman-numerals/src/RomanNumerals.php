<?php

namespace Kata;

use InvalidArgumentException;

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
        if ($amount >= 4000 || $amount <= 0) {
            throw new InvalidArgumentException();
        }

        $expectedResult = '';
        foreach ($this->classes as $converter) {
            $thousand = new $converter($amount);

            $expectedResult .= $thousand->toRoman();

            $amount = $thousand->divisionRest();
        }
        return $expectedResult;
    }
}
