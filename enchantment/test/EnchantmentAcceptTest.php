<?php
declare(strict_types=1);

namespace Kata\Test;

use Kata\Durance;
use PHPUnit\Framework\TestCase;

class EnchantmentAcceptTest extends TestCase
{

    public function test_can_enchant_weapon()
    {
        $describeWeapon = <<<EOT
Inferno Dagger of the Nooblet
5 - 10 attack damage
1.2 attack speed
+5 fire damage
EOT;
        $durance = new Durance();
        $this->assertEquals($describeWeapon,$durance->describeWeapon());
    }
}
