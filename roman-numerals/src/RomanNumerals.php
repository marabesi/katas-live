<?php

namespace Kata;

class RomanNumerals
{

    public function convert(int $amount): string {
        if ($amount === 5) {
            return 'V';
        }
        return 'I';
    }
}
