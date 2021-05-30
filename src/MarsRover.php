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

            if($this->facing === 'W' && $command[$i] === 'R'){
                $this->facing = 'N';
            }

            if($this->facing === 'S' && $command[$i] === 'R'){
                $this->facing = 'W';
            }

            if($this->facing === 'E' && $command[$i] === 'R'){
                $this->facing = 'S';
            }

            if($this->facing === 'N' && $command[$i] === 'R'){
                $this->facing = 'E';
            }

            if($this->facing === 'S' && $command[$i] === 'L'){
                $this->facing = 'E';
            }

            if($this->facing === 'W' && $command[$i] === 'L'){
                $this->facing = 'S';
            }

            if($this->facing === 'N' && $command[$i] === 'L'){
                $this->facing = 'W';
            }

            if($this->facing === 'N' && $command[$i] === 'M'){
                $this->y++;
            }
        }

//        if ($command === 'MMRM') {
//            return '1:2:E';
//        }

        return sprintf('%d:%d:%s', $this->x, $this->y, $this->facing);
    }

}
