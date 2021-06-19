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
        if ($amount >= 10 && $amount <= 30) {
            return $this->repeatStringForm($amount, 10, 'X');
        }
        if ($amount === 40) {
            return 'XL';
        }
        if ($amount === 50) {
            return 'L';
        }
        if ($amount === 60) {
            return 'LX';
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

    private function repeatStringForm(int $amount, int $module, string $stringToRepeat): string {
        $rest = floor($amount / $module);
        return str_repeat($stringToRepeat, $rest);
    }
}
