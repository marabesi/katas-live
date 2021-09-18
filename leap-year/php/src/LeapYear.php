<?php
declare(strict_types=1);

namespace Kata;

class LeapYear
{
    public function isLeapYear(int $year): bool
    {
        if ($this->isDivisibleBy($year, 4)) {
            return true;
        }

        return false;
    }

    private function isDivisibleBy(int $year, int $divisor): bool
    {
        return $year % $divisor === 0;
    }
}
