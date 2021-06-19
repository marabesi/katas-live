<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{

    public function test_should_convert_number_1_into_I() {
        $romanNumberals = new RomanNumerals();
        $romanNumber = $romanNumberals->convert(1);
        $this->assertEquals('I', $romanNumber);
    }
}
