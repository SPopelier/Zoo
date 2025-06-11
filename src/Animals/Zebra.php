<?php

namespace App\Animals;
use App\Interfaces\CanWalk;

use App\Animal;

class Zebra extends Animal implements CanWalk{
    protected function getNoise():string
    {
        return "hiiiii";
    }
}