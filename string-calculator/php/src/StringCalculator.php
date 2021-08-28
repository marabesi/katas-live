<?php


namespace Kata;


class StringCalculator
{
    public function add(string $numbers) : int
    {
        $numbers = explode(',', $numbers);
        return (int) array_sum($numbers);
    }
}
