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
        if ($amount === 50) {
            return 'L';
        }
        if ($amount === 100) {
            return 'C';
        }
        if ($amount === 500) {
            return 'D';
        }
        if ($amount === 1000) {
            return 'M';
        }
        if ($amount === 6) {
            return 'VI';
        }
        $i = '';
        while ($amount > 0 && $amount < 5) {
            $i .= 'I';
            $amount--;
        }

        return $i;
    }
}
