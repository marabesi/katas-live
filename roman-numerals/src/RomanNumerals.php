<?php

namespace Kata;

use InvalidArgumentException;

class RomanNumerals
{

    public function convert(int $amount): string {
        if ($amount < 10) {
            return $this->unitConverter($amount,'I','V','X');
        }
        if ($amount >= 10 && $amount < 100) {
            return $this->unitConverter($amount,'X','L','C',10);
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

    private function unitConverter(int $amount, string $symbol, string $midSymbol, string $postSymbol,  int $divider = 1) : string
    {
        $amount = $amount / $divider;
        if ($amount >= 1 && $amount <= 3) {
            return $this->repeatStringForm($amount, 1, $symbol);
        }
        if ($amount === 4) {
            return $symbol.$midSymbol;
        }
        if ($amount === 9) {
            return $symbol.$postSymbol;
        }

        $i = '';

        while($amount >= 6 && $amount <= 8) {
          $i .= $symbol;
          $amount --;
        }

        return sprintf('%s%s', $midSymbol, $i);
    }

    private function repeatStringForm(int $amount, int $module, string $stringToRepeat): string {
        $rest = floor($amount / $module);
        return str_repeat($stringToRepeat, $rest);
    }
}
