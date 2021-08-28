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
}
