<?php

namespace Kata;

use InvalidArgumentException;

class RomanNumerals
{

    public function convert(int $amount): string {
        if ($amount < 10) {
            return $this->unitConverter($amount);
        }
        if ($amount >= 10 && $amount < 100) {
            return $this->dozensConverter($amount);
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
    }

    private function dozensConverter(int $amount) : string
    {
        if ($amount >= 10 && $amount <= 30) {
            return $this->repeatStringForm($amount, 10, 'X');
        }
        if ($amount === 40) {
            return 'XL';
        }
        if ($amount === 90) {
            return 'XC';
        }

        $x = '';

        while($amount >= 60 && $amount <= 80) {
          $x .= 'X';
          $amount -= 10;
        }

        return sprintf('L%s', $x);
    }

    private function unitConverter(int $amount) : string
    {
        if ($amount >= 1 && $amount <= 3) {
            return $this->repeatStringForm($amount, 1, 'I');
        }
        if ($amount === 4) {
            return 'IV';
        }
        if ($amount === 9) {
            return 'IX';
        }

        $i = '';

        while($amount >= 6 && $amount <= 8) {
          $i .= 'I';
          $amount --;
        }

        return sprintf('V%s', $i);
    }

    private function repeatStringForm(int $amount, int $module, string $stringToRepeat): string {
        $rest = floor($amount / $module);
        return str_repeat($stringToRepeat, $rest);
    }
}
