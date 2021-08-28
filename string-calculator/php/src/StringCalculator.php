<?php


namespace Kata;


class StringCalculator
{
    private const DEFAULT_SEPARATOR = ',';

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
        $separator = self::DEFAULT_SEPARATOR;
        if (preg_match('/^\/\/(.*)\\n(.*)/', $numbers, $matches)) {
            [, $separator, $numbers] = $matches;
            $separator = $this->searchForGroups($separator);
        }

        $numbers = str_replace(["\n"], $separator, $numbers);
        $numbers = str_replace($separator, self::DEFAULT_SEPARATOR, $numbers);

        return explode(self::DEFAULT_SEPARATOR, $numbers);
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

    public function searchForGroups(string $separator): array|string
    {
        if (preg_match_all("/\[([^\]]*)\]/", $separator, $groups)) {
            [, $separator] = $groups;
            return $separator;
        }

       return $separator;
    }
}
