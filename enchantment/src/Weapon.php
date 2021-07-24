<?php
declare(strict_types=1);

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