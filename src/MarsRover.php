<?php


namespace Kata;


use Kata\Command\Left;
use Kata\Command\Move;
use Kata\Command\Right;

class MarsRover
{
    private string $facing = 'N';
    private int $x = 0;
    private int $y = 0;

    public function getFacing(): string
    {
        return $this->facing;
    }

    public function setFacing(string $facing): void
    {
        $this->facing = $facing;
    }

    public function moveToNorth(): void
    {
        $this->y++;
    }

    public function moveToSouth(): void
    {
        $this->y--;
    }

    public function moveToEast(): void
    {
        $this->x++;
    }

    public function moveToWest(): void
    {
        $this->x--;
    }

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
                $right = new Left();
                $this->facing = $right->execute($this->facing, $instruction);
                continue;
            }

            if ($instruction === 'M') {
                $move = new Move();
                $move->setRover($this);
                $move->execute($this->facing, $instruction);

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
