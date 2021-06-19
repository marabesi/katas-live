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

        $currentAmount = $amount;

        if ($currentAmount === 4) {
            return 'IV';
        }

        $i = '';
        while (
            ( $currentAmount > 0 && $currentAmount < 5 ) ||
            ( $currentAmount > 5 && $currentAmount < 10 )
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
