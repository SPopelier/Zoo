<?php

namespace App\Animals;
//use \App\Animal;
 
class Fish extends \App\Animal
{
    protected function getNoise():string
    {
        return "bloubloublou";
    }
}


