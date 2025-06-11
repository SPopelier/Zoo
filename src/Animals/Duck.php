<?php

namespace App\Animals;
use App\Interfaces\CanWalk;

use App\Animal;

class Duck extends Animal implements CanWalk {
    protected function getNoise():string
    {
        return "coin coin";
    }
}