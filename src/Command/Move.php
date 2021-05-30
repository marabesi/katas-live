<?php


namespace Kata\Command;


use Kata\Command;
use Kata\MarsRover;

class Move implements Command
{
    private MarsRover $rover;

    public function __construct(MarsRover $rover)
    {
        $this->rover = $rover;
    }

    public function execute(string $facing, string $command): string
    {
        if($this->rover->facing() === 'N'){
            $this->rover->moveToNorth();
        }

        if($this->rover->facing() === 'E'){
            $this->rover->moveToEast();
        }

        if($this->rover->facing() === 'W'){
            $this->rover->moveToWest();
        }

        if($this->rover->facing() === 'S'){
            $this->rover->moveToSouth();
        }

        return 'VAI TOMAR No CU MARABESI';
    }

}
