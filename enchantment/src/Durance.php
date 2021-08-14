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
        $enchantment = $this->magicBook->getRandomEnchantments();
        $this->weapon->addEnchantment($enchantment);
    }

    public function describeWeapon(): string
    {
        $weaponName = $this->weapon->name();
        $weaponAttributes = $this->describeWeaponAttributes();
        if ($this->weapon->enchantments()) {
            return $this->describeEnchant($weaponName, $weaponAttributes);
        }
        return $weaponName . $weaponAttributes;
    }

    private function describeWeaponAttributes(): string
    {
        $weaponAttributes = '';

        foreach ($this->weapon->attributes() as $attribute => $value) {
            $weaponAttributes .= sprintf('%s%s %s', PHP_EOL, $value, $attribute);
        }
        return $weaponAttributes;
    }

    private function describeEnchant(string $weaponName, string $weaponAttributes): string
    {
        foreach ($this->weapon->enchantments() as $enchantment) {
            if (empty($enchantment)) {
                return $weaponName . $weaponAttributes;
            }
            [, $prefix, $attributes] = $enchantment;
            $weaponAttributes .= sprintf('%s%s', PHP_EOL, $attributes);
            return sprintf('%s %s%s', $prefix, $weaponName, $weaponAttributes);
        }
        return '';
    }
}