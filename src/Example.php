<?php

namespace MyPhp\Skeleton;

class Example
{
    /**
     * @var string
     */
    private $name;


    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
