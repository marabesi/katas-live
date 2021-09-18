<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\LeapYear;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    public function test_can_not_divisible_by_four()
    {
        $leap = new LeapYear();
        $this->assertFalse($leap->isLeapYear(1997));
    }
}
