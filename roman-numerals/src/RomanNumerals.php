<?php

namespace Kata;

class RomanNumerals
{

    public function convert(int $amount): string {
        if ($amount === 5) {
            return 'V';
        }
        if ($amount === 10) {
            return 'X';
        }
        return 'I';
    }
}
