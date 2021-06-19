<?php


namespace Kata;


interface Command
{

    public function execute(MarsRover $rover, string $command): string;
}