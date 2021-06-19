<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{

    public function data(): array {
        return [
            [1, 'I'],
            [5, 'V'],
            [10, 'X'],
            [100, 'C'],
            [500, 'D'],
            [1000, 'M'],
            [2, 'II'],
        ];
    }

    /**
     * @dataProvider data
     */
    public function test_should_convert_decimal_to_roman_numeral(int $amount, string $romanNumber) {
        $romanNumberals = new RomanNumerals();
        $convertion = $romanNumberals->convert($amount);
        $this->assertEquals($romanNumber, $convertion);
    }
}
