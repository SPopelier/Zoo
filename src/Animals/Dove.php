<?php

namespace App\Animals;
use App\Interfaces\CanFly;

use App\Animal;

class Dove extends Animal implements CanFly {
    protected function getNoise():string
    {
        return "Rou Rouuu";
    }
}