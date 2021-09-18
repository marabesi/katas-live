<?php
declare(strict_types=1);

namespace Kata;

class LeapYear
{
    public function isLeapYear(int $year): bool
    {
        if ($this->isDivisibleBy($year, 4)) {
            if ($this->isDivisibleBy($year, 100) && !$this->isDivisibleBy($year, 400)) {
                return false;
            }
            return true;
        }
        return false;
    }

    private function isDivisibleBy(int $year, int $divisor): bool
    {
        return $year % $divisor === 0;
    }
}
