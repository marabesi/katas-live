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
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [10, 'X'],
            [20, 'XX'],
            [30, 'XXX'],
            [40, 'XL'],
            [50, 'L'],
            [60, 'LX'],
            [70, 'LXX'],
            [90, 'XC'],
            [100, 'C'],
            [200, 'CC'],
            [300, 'CCC'],
            [400, 'CD'],
            [500, 'D'],
            [600, 'DC'],
            [700, 'DCC'],
            [800, 'DCCC'],
            [900, 'CM'],
            [1000, 'M'],
            // acceptance
            [4, 'IV'],
            [9, 'IX'],
            [80, 'LXXX'],
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
