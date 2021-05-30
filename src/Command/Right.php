<?php


namespace Kata\Command;


use Kata\Command;

class Right implements Command
{

    public function execute(string $facing, string $command): string
    {
        if ($facing === 'W'){
            return 'N';
        }

        if ($facing === 'S'){
            return 'W';
        }

        if ($facing === 'E'){
            return 'S';
        }

        if ($facing === 'N') {
            return 'E';
        }
    }
}