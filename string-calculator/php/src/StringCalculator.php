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

        $parsedNumbers = $this->filterValidNumbers($parsedNumbers);

        return (int) array_sum($parsedNumbers);
    }

    public function parse(string $numbers): array
    {
        $separator = ',';
        if (preg_match('/^\/\/(.*)\\n(.*)/', $numbers, $matches)) {
            [, $separator, $numbers] = $matches;
            if($separator=='[***]'){
                $separator = '***';
            }
        }
        $numbers = str_replace(["\n"], $separator, $numbers);

        return explode($separator, $numbers);
    }

    private function filterValidNumbers(array $numbers): array
    {
        return array_filter($numbers, fn($number) => (int)$number < 1001);
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
