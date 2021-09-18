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
        ];
    }
}
