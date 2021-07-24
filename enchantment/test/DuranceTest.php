<?php
declare(strict_types=1);

namespace Kata\Test;


use Kata\Durance;
use Kata\Weapon;
use PHPUnit\Framework\TestCase;

class DuranceTest extends TestCase
{

    public function test_weapon_name()
    {
        $weapon = new Weapon('Quick Dagger of the Nooblet');

        $this->assertEquals('Quick Dagger of the Nooblet', $weapon->description());
    }


    public function test_define_attack_speed_attribute()
    {
        $weapon = new Weapon('Quick Dagger of the Nooblet', [
            'attack speed' => 1.2,
        ]);

        $attributes = array_keys($weapon->attributes());
        $values = array_values($weapon->attributes());

        $this->assertEquals('attack speed', $attributes[0]);
        $this->assertEquals(1.2, $values[0]);
    }

    public function test_weapon_description_as_string()
    {
        $describeWeapon = <<<EOT
Quick Dagger of the Nooblet
EOT;

        $weapon = new Weapon('Quick Dagger of the Nooblet');
        $durance = new Durance($weapon);

        $durance->enchant();

        $this->assertEquals($describeWeapon, $durance->describeWeapon());

    }

}