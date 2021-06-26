<?php


namespace Kata;


trait UnitConverter
{
    private function unitConverter(
        int $amount,
        string $symbol,
        string $midSymbol,
        string $postSymbol,
        int $divider = 1
    ) : string {
        $amount = (int) floor($amount / $divider);

        if ($amount === 0) {
            return '';
        }

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
