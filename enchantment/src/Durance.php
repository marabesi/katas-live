<?php
declare(strict_types=1);

namespace Kata;


use JetBrains\PhpStorm\Pure;

class Durance
{
    public function __construct(private Weapon $weapon)
    {
    }

    public function enchant(): void
    {

    }

    #[Pure]
    public function describeWeapon(): string
    {
        return $this->weapon->name();
    }
}