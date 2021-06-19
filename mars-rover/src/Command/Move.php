<?php


namespace Kata\Command;


use Kata\Command;
use Kata\MarsRover;

class Move implements Command
{

    public function execute(MarsRover $rover, string $command): string
    {
        if($rover->facing() === 'N'){
            $rover->moveToNorth();
        }

        if($rover->facing() === 'E'){
            $rover->moveToEast();
        }

        if($rover->facing() === 'W'){
            $rover->moveToWest();
        }

        if($rover->facing() === 'S'){
            $rover->moveToSouth();
        }

        return 'VAI TOMAR No CU MARABESI';
    }

}
