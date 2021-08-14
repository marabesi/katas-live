<?php
declare(strict_types=1);

namespace Kata;


class MagicBook
{
    const AGILITY = [
        'Agility',
        'Quick',
        '+5 agility'
    ];
    const FIRE = [
        'Fire',
        'Inferno',
        '+5 fire damage'
    ];
    private array $enchantments = [
        self::AGILITY,
        self::FIRE,
    ];

    public function getRandomEnchantments(): array
    {
        return $this->enchantments[array_rand($this->enchantments)];
    }
}