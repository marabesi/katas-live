<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\Durance;
use Kata\Weapon;
use PHPUnit\Framework\TestCase;

class DuranceAcceptTest extends TestCase
{

    public function test_can_enchant_fire_weapon()
    {
        $this->markTestSkipped('aceitacao');
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
        $durance = new Durance($weapon);
        $durance->enchant();
        $this->assertEquals($describeWeapon,$durance->describeWeapon());
    }

    public function test_can_enchant_agility_weapon()
    {
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
        $durance = new Durance($weapon);
        $durance->enchant();
        $this->assertEquals($describeWeapon,$durance->describeWeapon());
    }
}
