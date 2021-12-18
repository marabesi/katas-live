<?php


namespace Kata;


class Item
{

    public function __construct(private string $name, private string $expires, private string $state)
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getExpires(): string
    {
        return $this->expires;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
}
