<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    public function test_empty_string_returns_zero() {
        $calculator = new StringCalculator();
        $result = $calculator->add("");
        $this->assertEquals(0, $result);
    }

    public function test_string_with_number_four_returns_four() {
        $calculator = new StringCalculator();
        $result = $calculator->add("4");
        $this->assertEquals(4, $result);
    }

    public function test_string_sum_number_one_and_two() {
        $calculator = new StringCalculator();
        $result = $calculator->add("1,2");
        $this->assertEquals(3, $result);
    }
    public function test_string_sum_arbitray_number() {
        $calculator = new StringCalculator();
        $result = $calculator->add("1,2,3,4,5,6,7,8,9");
        $this->assertEquals(45, $result);
    }
}
