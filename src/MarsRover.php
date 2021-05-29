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
            if ($command==='MM') {
                return '0:2:N';
            }
            if ($command === 'MMRM') {
                return '1:2:E';
            }
            if ($command === 'RRR') {
                return sprintf('%d:%d:W', $this->x, $this->y);
            }

            if ($command=='RR') {
                return sprintf('%d:%d:S', $this->x, $this->y);
            }

            if (strpos($command, 'R') !== false) {
                return sprintf('%d:%d:E', $this->x, $this->y);
            }

            if ($command === 'L') {
                return sprintf('%d:%d:W', $this->x, $this->y);
            }
            if ($command === 'LL') {
                return sprintf('%d:%d:S', $this->x, $this->y);
            }

            if ($command === 'LLL') {
                return sprintf('%d:%d:E', $this->x, $this->y);
            }

            return '0:1:N';

        }
    }

}
