<?php


namespace Kata\Test;


use Kata\Weapon;
use PHPUnit\Framework\TestCase;

class EnchantmentTest extends TestCase
{

    public function test_weapon_name()
    {
        $weapon = new Weapon('Quick Dagger of the Nooblet');

        $this->assertEquals('Quick Dagger of the Nooblet', $weapon->description());
    }
}