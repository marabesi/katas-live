<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\Durance;
use Kata\MagicBook;
use Kata\Weapon;
use PHPUnit\Framework\TestCase;

class DuranceAcceptTest extends TestCase
{

    public function test_can_enchant_fire_weapon()
    {
        $magicBook = $this->createMock(MagicBook::class);
        $magicBook->method('getRandomEnchantments')->willReturn(['Fire', 'Inferno', '+5 fire damage']);

        $describeWeapon = <<<EOT
Inferno Dagger of the Nooblet
5 - 10 attack damage
1.2 attack speed
+5 fire damage
EOT;
        $weapon = new Weapon('Dagger of the Nooblet', [
            'attack damage' => '5 - 10',
            'attack speed' => 1.2
        ]);
        $durance = new Durance($weapon, $magicBook);
        $durance->enchant();
        $this->assertEquals($describeWeapon,$durance->describeWeapon());
    }

    public function test_can_enchant_agility_weapon()
    {
        $magicBook = $this->createMock(MagicBook::class);
        $magicBook->method('getRandomEnchantments')->willReturn(
            [
                'Agility',
                'Quick',
                '+5 agility'
            ],
        );

        $describeWeapon = <<<EOT
Quick Dagger of the Nooblet
5 - 10 attack damage
1.2 attack speed
+5 agility
EOT;
        $weapon = new Weapon('Dagger of the Nooblet', [
            'attack damage' => '5 - 10',
            'attack speed' => 1.2
        ]);
        $durance = new Durance($weapon, $magicBook);
        $durance->enchant();
        $this->assertEquals($describeWeapon,$durance->describeWeapon());
    }
}
