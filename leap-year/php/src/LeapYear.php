<?php
declare(strict_types=1);

namespace Kata;

class LeapYear
{
    public function isLeapYear(int $year): bool
    {
        if ($year % 4 === 0) {
            return true;
        }

        return false;
    }
}
