<?php


namespace Kata;


class StringCalculator
{
    /**
     * @throws NegativeAreNotAllowed
     */
    public function add(string $numbers) : int
    {
        $parsedNumbers = $this->parse($numbers);

        $this->checkNegatives($parsedNumbers);

        return (int) array_sum($parsedNumbers);
    }

    public function parse(string $numbers): array
    {
        $separator = ',';
        if (preg_match('/^\/\/(.*)\\n(.*)/', $numbers, $matches)) {
            [, $separator, $numbers] = $matches;
        }

        $numbers = str_replace(["\n"], $separator, $numbers);

        return explode($separator, $numbers);
    }

    /**
     * @throws NegativeAreNotAllowed
     */
    private function checkNegatives(array $parsedNumbers): void
    {
        $negatives = array_filter($parsedNumbers, fn($number) => (int)$number < 0);

        if (count($negatives)) {
            throw new NegativeAreNotAllowed();
        }
    }
}
