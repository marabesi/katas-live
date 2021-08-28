<?php


namespace Kata;


class StringCalculator
{
    public function add(string $numbers) : int
    {
        $separator = ',';
        if(preg_match('/^\/\/(.*)\\n(.*)/', $numbers, $matches)){
            [, $separator,$numbers] = $matches;
        }

        $numbers = str_replace(["\n"], $separator, $numbers);

        $numbers = explode($separator, $numbers);

        return (int) array_sum($numbers);
    }
}
