<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\LeapYear;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    /**
     * @dataProvider years
     */
    public function test_can_not_divisible_by_four($year, $isLeap)
    {
        $leap = new LeapYear();
        $this->assertEquals($isLeap, $leap->isLeapYear($year));
    }

    public function years(): array
    {
        return [
            [1997, false],
            [1996, true],
            [1600, true],
            [1800, false],

            [1600, true],
            [2000, true],

            [1700, false],
            [2100, false],
            [1800, false],
            [2200, false],
        ];
    }
}
