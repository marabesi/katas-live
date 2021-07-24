<?php

namespace Kata;

class Weapon
{

    public function __construct(
        private string $description,
        private array $attributes = [],
    )
    { }

    public function description(): string
    {
        return $this->description;
    }

    public function attributes(): array
    {
        return $this->attributes;
    }
}