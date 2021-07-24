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
        $string = '';

        foreach ($this->weapon->attributes() as $attribute => $value) {
            $string .= sprintf('%s%s %s', PHP_EOL, $value, $attribute);
        }

        return $this->weapon->name() . $string;
    }
}