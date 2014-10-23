<?php

namespace Animals;

class Cat extends Animal
{
    public function meow()
    {
        return "Cat " . $this->getName() . " is saying meow";
    }
}