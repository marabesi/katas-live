<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\MarsRover;
use PHPUnit\Framework\TestCase;

class MarsRoverTest extends TestCase
{

    public function test_should_place_rover_facing_north() {
        $rover = new MarsRover();

        $coords = $rover->execute('M');

        $this->assertEquals($coords, '0:1:N');
    }

    public function test_should_rover_facing_right()
    {
        $rover = new MarsRover();

        $coords = $rover->execute('R');

        $this->assertEquals($coords, '0:0:E');
    }

    public function test_should_rover_facing_south()
    {
        $rover = new MarsRover();

        $coords = $rover->execute('RR');

        $this->assertEquals($coords, '0:0:S');
    }
}
