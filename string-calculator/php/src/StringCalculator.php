<?php


namespace Kata;


class StringCalculator
{
    public function add(string $numbers) : int
    {
        $separator = ',';
        if(preg_match("^//(\w){1}\n", $numbers, $matches)){
            $separator = ';';
            $numbers = str_replace("//;\n", '', $numbers);
        }
        $numbers = str_replace(["\n"], $separator, $numbers);
        $numbers = explode($separator, $numbers);
        return (int) array_sum($numbers);
    }
}
