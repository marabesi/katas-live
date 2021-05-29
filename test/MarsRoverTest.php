<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\MarsRover;
use PHPUnit\Framework\TestCase;

class MarsRoverTest extends TestCase
{

    public function inputs(): array {
        return [
            ['M', '0:1:N'],
            ['MM', '0:2:N'],
            ['R', '0:0:E'],
            ['RR', '0:0:S'],
            ['RRR', '0:0:W'],
            ['L', '0:0:W'],
            ['LL', '0:0:S'],
            ['LLL', '0:0:E'],
            ['MMRM', '1:2:E'],
        ];
    }

    /**
     * @dataProvider inputs
     */
    public function test_move_rover_based_on_input($command, $expected) {
        $rover = new MarsRover();

        $coords = $rover->execute($command);

        $this->assertEquals($coords, $expected);
    }
}
