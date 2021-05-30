<?php


namespace Kata;


use Kata\Command\Right;

class MarsRover
{
    private string $facing = 'N';
    private int $x = 0;
    private int $y = 0;

    public function execute(string $command)
    {
        $iMax = strlen($command);

        for ($i=0; $i < $iMax; $i++){
            $instruction = $command[$i];

            if ($instruction === 'R') {
                $right = new Right();
                $this->facing = $right->execute($this->facing, $instruction);
                continue;
            }

            if ($instruction === 'L') {
                if ($this->facing === 'E') {
                    $this->facing = 'N';
                    continue;
                }

                if($this->facing === 'S'){
                    $this->facing = 'E';
                    continue;
                }

                if($this->facing === 'W'){
                    $this->facing = 'S';
                    continue;
                }

                if($this->facing === 'N'){
                    $this->facing = 'W';
                    continue;
                }
            }

            if ($instruction === 'M') {
                if($this->facing === 'N'){
                    $this->y++;
                }

                if($this->facing === 'E'){
                    $this->x++;
                }

                if($this->facing === 'W'){
                    $this->x--;
                }

                if($this->facing === 'S'){
                    $this->y--;
                }

                if ($this->x < 0) {
                    $this->x = 9;
                }

                if ($this->y < 0) {
                    $this->y = 9;
                }

                if ($this->x > 9) {
                    $this->x = 0;
                }

                if ($this->y > 9) {
                    $this->y = 0;
                }
            }
        }

        return sprintf('%d:%d:%s', $this->x, $this->y, $this->facing);
    }

}
