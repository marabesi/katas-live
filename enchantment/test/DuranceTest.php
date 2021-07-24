<?php
declare(strict_types=1);

namespace Kata\Test;


use Kata\Durance;
use Kata\MagicBook;
use Kata\Weapon;
use PHPUnit\Framework\MockObject\MockBuilder;
use PHPUnit\Framework\TestCase;

class DuranceTest extends TestCase
{

    public function test_weapon_name()
    {
        $weapon = new Weapon('Dagger of the Nooblet');

        $this->assertEquals('Dagger of the Nooblet', $weapon->name());
    }


    public function test_define_attack_speed_attribute()
    {
        $weapon = new Weapon('Dagger of the Nooblet', [
            'attack speed' => 1.2,
        ]);

        $attributes = array_keys($weapon->attributes());
        $values = array_values($weapon->attributes());

        $this->assertEquals('attack speed', $attributes[0]);
        $this->assertEquals(1.2, $values[0]);
    }


    public function test_weapon_without_enchantment_description_as_string()
    {
        $describeWeapon = <<<EOT
Dagger of the Nooblet
EOT;

        $weapon = new Weapon('Dagger of the Nooblet');
        $durance = new Durance($weapon);

        $this->assertEquals($describeWeapon, $durance->describeWeapon());

    }

    public function test_define_attack_damage()
    {
        $describeWeapon = <<<EOT
Dagger of the Nooblet
5 - 10 attack damage
EOT;

        $weapon = new Weapon('Dagger of the Nooblet', [
            'attack damage' => '5 - 10'
        ]);
        $durance = new Durance($weapon);

        $this->assertEquals($describeWeapon, $durance->describeWeapon());
    }

    public function test_weapon_with_one_attribute_and_should_have_one_enchantment()
    {
        $describeWeapon = <<<EOT
Quick Dagger of the Nooblet
5 - 10 attack damage
+5 agility
EOT;

        $weapon = new Weapon('Dagger of the Nooblet', [
            'attack damage' => '5 - 10'
        ]);
        $durance = new Durance($weapon);

        $durance->enchant();

        $this->assertEquals($describeWeapon, $durance->describeWeapon());
    }

    public function test_weapon_with_one_attribute_and_should_have_fire_enchantment()
    {
        $this->markTestSkipped();
        $describeWeapon = <<<EOT
Inferno Dagger of the Nooblet
5 - 10 attack damage
+5 fire damage
EOT;

        $weapon = new Weapon('Dagger of the Nooblet', [
            'attack damage' => '5 - 10'
        ]);
        $durance = new Durance($weapon);

        $durance->enchant();
        $this->assertEquals($describeWeapon, $durance->describeWeapon());
    }

}