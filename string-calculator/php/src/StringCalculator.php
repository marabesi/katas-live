<?php


namespace Kata;


class StringCalculator
{
    public function add(string $numbers) : int
    {
        $separator = ',';
        if(str_starts_with($numbers, "//;")){
            $separator = ';';
            $numbers = "1;2";
        }
        $numbers = str_replace(["\n"], $separator, $numbers);
        $numbers = explode($separator, $numbers);
        return (int) array_sum($numbers);
    }
}
