<?php

namespace Animals;

abstract class Animal
{
    private $name;

    function __construct($name = null)
    {
        if ($name)
            $this->name = $name;
        else
            $this->name = "unnamed";
    }

    public function getName()
    {
        return $this->name;
    }
}