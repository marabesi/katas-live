<?php


namespace Kata;


interface Command
{

    public function execute(\Kata\MarsRover $rover, string $command): string;
}