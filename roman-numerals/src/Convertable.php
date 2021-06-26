<?php


namespace Kata;


interface Convertable
{
    public function __construct(int $amount);
    public function divisionRest(): int;
    public function toRoman();
}
