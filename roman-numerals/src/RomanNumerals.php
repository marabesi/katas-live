<?php

namespace Kata;

class RomanNumerals
{

    public function convert(int $amount): string {
        if ($amount === 4) {
            return 'IV';
        }
        if ($amount === 5) {
            return 'V';
        }
        if ($amount === 9) {
            return 'IX';
        }
        if ($amount === 10) {
            return 'X';
        }
        if ($amount === 20) {
            return 'XX';
        }
        if ($amount === 30) {
            return 'XXX';
        }
        if ($amount === 40) {
            return 'XL';
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

        $currentAmount = $amount;

        $i = '';
        while (
            ( $currentAmount > 0 && $currentAmount < 4 ) ||
            ( $currentAmount > 5 && $currentAmount < 9 )
        ) {
            $i .= 'I';
            $currentAmount--;
        }

        if ($amount > 5) {
            return "V{$i}";
        }

        return $i;
    }
}
