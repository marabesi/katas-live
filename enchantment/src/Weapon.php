<?php
declare(strict_types=1);

namespace Kata;

class Weapon
{

    public function __construct(
        private string $name,
        private array $attributes = [],
        private array $enchantments = [],
    )
    { }

    public function name(): string
    {
        return $this->name;
    }

    public function attributes(): array
    {
        return $this->attributes;
    }

    public function addEnchantment(array $enchantment)
    {
        $this->enchantments[] = $enchantment;
    }

    public function enchantments() : array
    {
        return $this->enchantments;
    }
}