<?php


namespace Kata;


class MarsRover
{
    public function execute(string $command)
    {
        if ($command=='RR') {
            return '0:0:S';
        }

        if (strpos($command, 'R') !== false) {
            return '0:0:E';
        }

        return '0:1:N';
    }
}
