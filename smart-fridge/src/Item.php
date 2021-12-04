<?php

namespace Kata;

use DateTime;

class Item
{
    public function __construct(private string $string, private DateTime $expiration)
    { }

    public function expiration(): DateTime
    {
        return $this->expiration;
    }
}
