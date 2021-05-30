<?php


namespace Kata\Command;


use Kata\Command;

class Left implements Command
{

    public function execute(string $facing, string $command): string
    {
        if ($facing === 'E') {
            return 'N';
        }

        if($facing === 'S'){
           return 'E';
        }

        if($facing === 'W'){
           return 'S';
        }

        if($facing === 'N'){
           return 'W';
        }
    }
}
