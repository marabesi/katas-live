<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    public function strings(): array
    {
        return [
            ["", 0],
            ["4", 4],
            ["1,2", 3],
            ["1,2,3,4,5,6,7,8,9", 45],
            ["1\n2,3", 6],
            ["//;\n1;2", 3],
            ["//:\n1:2", 3],
            ["//:\n1:2:3", 6],
        ];
    }

    /**
     * @dataProvider strings
     */
    public function test_should_sum_strings($strings, $expected) {
        $calculator = new StringCalculator();
        $result = $calculator->add($strings);
        $this->assertEquals($expected, $result);
    }

    /**
     * @throws NegativeAreNotAllowed
     */
    public function test_should_not_allow_negative_numbers() {
        $this->markTestSkipped();
        $calculator = new StringCalculator();
        $calculator->add('1,-2,-3');
    }
}
