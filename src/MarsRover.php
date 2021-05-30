<?php


namespace Kata;


class MarsRover
{
    private string $facing = 'N';
    private int $x = 0;
    private int $y = 0;

    public function execute(string $command)
    {
        $iMax = strlen($command);

        for ($i=0; $i< $iMax; $i++){

            if ($command[$i] === 'R') {
                if($this->facing === 'W'){
                    $this->facing = 'N';
                }

                if($this->facing === 'S'){
                    $this->facing = 'W';
                }

                if($this->facing === 'E'){
                    $this->facing = 'S';
                }

                if($this->facing === 'N'){
                    $this->facing = 'E';
                }
            }

            if ($command[$i] === 'L') {
                if($this->facing === 'S'){
                    $this->facing = 'E';
                }

                if($this->facing === 'W'){
                    $this->facing = 'S';
                }

                if($this->facing === 'N'){
                    $this->facing = 'W';
                }
            }

            if ($command[$i] === 'M') {
                if($this->facing === 'N'){
                    $this->y++;
                }

                if($this->facing === 'E'){
                    $this->x++;
                }
            }
        }

        return sprintf('%d:%d:%s', $this->x, $this->y, $this->facing);
    }

}
