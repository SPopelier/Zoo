<?php

namespace App\Animals;
use App\Interfaces\CanFly;

use App\Animal;

class Parrot extends Animal implements CanFly {
    protected function getNoise():string
    {
        return "coco";
    }
}