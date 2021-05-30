<?php


namespace Kata;


interface Command
{

    public function execute(string $facing, string $command): string;
}