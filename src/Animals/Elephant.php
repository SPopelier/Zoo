<?php

namespace App\Animals;
use App\Interfaces\CanWalk;
use App\Animal;

class Elephant extends Animal implements CanWalk {
    protected function getNoise():string
    {
        return "toooooout";
    }
}