<?php


namespace Kata;


class StringCalculator
{
    public function add(string $numbers) : int
    {
        $numbers = str_replace(["\n"],',', $numbers);
        $numbers = explode(',', $numbers);
        return (int) array_sum($numbers);
    }
}
