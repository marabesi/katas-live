<?php


namespace Kata\Command;


use Kata\Command;

class Left implements Command
{

    public function execute(\Kata\MarsRover $rover, string $command): string
    {
        if ($rover->facing() === 'E') {
            return 'N';
        }

        if($rover->facing() === 'S'){
           return 'E';
        }

        if($rover->facing() === 'W'){
           return 'S';
        }

        if($rover->facing() === 'N'){
           return 'W';
        }
    }
}
