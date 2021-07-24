<?php


namespace Kata\Test;


use Kata\Durance;
use Kata\Weapon;
use PHPUnit\Framework\TestCase;

class EnchantmentTest extends TestCase
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

    public function teste_weapon_attributes_as_string()
    {
        $durance = new Durance()
    }

}