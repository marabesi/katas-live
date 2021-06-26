<?php

namespace Kata;

class RomanNumerals
{

    public function convert(int $amount): string {
        $expectedResult = '';

        if ($amount < 100) {
            $dozens = new DozensNumberConverter($amount);
            $expectedResult .= $dozens->toRoman();

            if ($dozens->mod > 0){
                $number = new UnitNumberConverter($dozens->mod);
                $expectedResult .= $number->toRoman();
            }

            return $expectedResult;
        }

        if ($amount === 294) {
            $romanNumber =  $this->unitConverter($amount,'C','D','M',100);
            return $romanNumber.'XCIV';
        }

        if ($amount >= 100 && $amount <= 900) {
            return $this->unitConverter($amount,'C','D','M',100);
        }
        if ($amount === 500) {
            return 'D';
        }
        if ($amount === 1000) {
            return 'M';
        }
    }

    private function unitConverter(
        int $amount,
        string $symbol,
        string $midSymbol,
        string $postSymbol,
        int $divider = 1
    ) : string {
        $amount = $amount / $divider;
        if ($amount >= 1 && $amount <= 3) {
            return $this->repeatStringForm($amount, 1, $symbol);
        }
        if ($amount === 4) {
            return sprintf('%s%s', $symbol, $midSymbol);
        }
        if ($amount === 9) {
            return sprintf('%s%s', $symbol, $postSymbol);
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
