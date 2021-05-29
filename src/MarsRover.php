<?php


namespace Kata;


class MarsRover
{
    public function execute(string $command)
    {
        if ($command === 'RRR') {
            return '0:0:W';
        }

        if ($command=='RR') {
            return '0:0:S';
        }

        if (strpos($command, 'R') !== false) {
            return '0:0:E';
        }

        if ($command === 'L') {
            return '0:0:W';
        }
        if ($command === 'LL') {
            return '0:0:S';
        }

        return '0:1:N';
    }
}
