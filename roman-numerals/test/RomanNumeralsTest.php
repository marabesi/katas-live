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
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [20, 'XX'],
            [100, 'C'],
            [500, 'D'],
            [1000, 'M'],
        ];
    }

    /**
     * @dataProvider data
     */
    public function test_should_convert_decimal_to_roman_numeral(int $amount, string $romanNumber): void {
        $romanNumberals = new RomanNumerals();
        $convertion = $romanNumberals->convert($amount);
        $this->assertEquals($romanNumber, $convertion);
    }
}
