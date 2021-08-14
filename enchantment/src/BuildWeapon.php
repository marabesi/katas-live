<?php

namespace Kata;

class BuildWeapon
{

    private function __construct()
    { }

    public static function daggerOfTheNooblet(): Weapon
    {
        return new Weapon('Dagger of the Nooblet', []);
    }

    public static function daggerOfTheNoobletWithAttackSpeed(): Weapon
    {
        return new Weapon('Dagger of the Nooblet', [
            'attack speed' => 1.2,
        ]);
    }
}