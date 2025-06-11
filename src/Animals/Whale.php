<?php

namespace App\Animals;
use App\Interfaces\CanSwim;

use App\Animal;

class Whale extends Animal implements CanSwim {
    protected function getNoise():string
    {
        return "whouuuuu";
    }
}