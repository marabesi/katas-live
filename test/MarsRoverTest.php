<?php
declare(strict_types=1);

namespace Kata\Test;

use PHPUnit\Framework\TestCase;

class MarsRoverTest extends TestCase
{

    public function test_should_place_rover_facing_north() {
        $rover = new MarsRover();

        $coords = $rover->execute('M');

        $this->assertEquals($coords, '0:1:N');
    }
}