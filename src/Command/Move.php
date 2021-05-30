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
        if($this->rover->getFacing() === 'N'){
            $this->rover->moveToNorth();
        }

        if($this->rover->getFacing() === 'E'){
            $this->rover->moveToEast();
        }

        if($this->rover->getFacing() === 'W'){
            $this->rover->moveToWest();
        }

        if($this->rover->getFacing() === 'S'){
            $this->rover->moveToSouth();
        }

        return 'VAI TOMAR No CU MARABESI';
    }

}
