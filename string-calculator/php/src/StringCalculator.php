<?php


namespace Kata;


class StringCalculator
{
    public function add(string $numbers) : int
    {
        $separator = ',';
        if(str_starts_with($numbers, "//;\n")){
            $separator = ';';
            $numbers = str_replace("//;\n", '', $numbers);
        }
        $numbers = str_replace(["\n"], $separator, $numbers);
        $numbers = explode($separator, $numbers);
        return (int) array_sum($numbers);
    }
}
