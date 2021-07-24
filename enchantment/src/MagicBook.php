<?php
declare(strict_types=1);

namespace Kata;


class MagicBook
{
    private array $enchantments = [
        [
            'Agility',
            'Quick',
            '+5 agility'
        ]
    ];

    public function getRandomEnchantments(): array
    {
        return $this->enchantments[array_rand($this->enchantments)];
    }
}