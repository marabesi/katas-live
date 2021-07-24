<?php
declare(strict_types=1);

namespace Kata;


use JetBrains\PhpStorm\Pure;

class Durance
{
    #[Pure]
    public function __construct(private Weapon $weapon, private ?MagicBook $magicBook = null)
    {
        $this->magicBook ??= new MagicBook();
    }

    public function enchant(): void
    {
        $enchantment = $this->magicBook->enchantments[0];
        $this->weapon->addEnchantment($enchantment);
    }

    #[Pure]
    public function describeWeapon(): string
    {
        $weaponName = $this->weapon->name();
        $string = '';

        foreach ($this->weapon->attributes() as $attribute => $value) {
            $string .= sprintf('%s%s %s', PHP_EOL, $value, $attribute);
        }
        foreach ($this->weapon->enchantments() as $enchantment){
            [,$prefix, $attributes] = $enchantment;
            $string .= sprintf('%s%s', PHP_EOL, $attributes);

            return sprintf('%s %s%s', $prefix, $weaponName, $string);
        }
        return $weaponName . $string;
    }
}