<?php


namespace Kata\Command;


use Kata\Command;

class Right implements Command
{

    public function execute(\Kata\MarsRover $rover, string $command): string
    {
        if ($rover->facing() === 'W'){
            return 'N';
        }

        if ($rover->facing() === 'S'){
            return 'W';
        }

        if ($rover->facing() === 'E'){
            return 'S';
        }

        if ($rover->facing() === 'N') {
            return 'E';
        }
    }
}