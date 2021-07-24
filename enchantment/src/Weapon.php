<?php

namespace Kata;

class Weapon
{

    public function __construct(private string $description)
    { }

    public function description(): string
    {
        return $this->description;
    }
}