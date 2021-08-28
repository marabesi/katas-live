<?php


namespace Kata;


class StringCalculator
{
    /**
     * @throws NegativeAreNotAllowed
     */
    public function add(string $numbers) : int
    {
        $separator = ',';
        if (preg_match('/^\/\/(.*)\\n(.*)/', $numbers, $matches)) {
            [, $separator,$numbers] = $matches;
        }

        $numbers = str_replace(["\n"], $separator, $numbers);

        $numbers = explode($separator, $numbers);

        $negatives = array_filter($numbers, fn($number) => (int) $number < 0);

        if (count($negatives)) {
            throw new NegativeAreNotAllowed();
        }

        return (int) array_sum($numbers);
    }
}
