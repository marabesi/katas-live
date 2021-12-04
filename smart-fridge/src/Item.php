<?php

namespace Kata;

use DateTime;

class Item
{
    private DateTime $timestamp;

    public function __construct(private string $string, private DateTime $expiration)
    { }

    public function expiration(): DateTime
    {
        return $this->expiration;
    }

    /**
     * @return DateTime
     */
    public function timestamp(): DateTime
    {
        return $this->timestamp;
    }

    public function createTimestamp(): void
    {
        $this->timestamp = new DateTime();
    }

}
