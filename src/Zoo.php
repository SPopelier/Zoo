<?php

namespace App;
use App\Animal;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;
use App\Interfaces\CanSwim;
use App\Enclosure;

class Zoo
{

    private static ?Enclosure $aquarium = null;

    private static ?Enclosure $aviary = null;

    private static ?Enclosure $fence = null;

    public static function addAnimal(Animal $animals)
    {
        if ($animals instanceof CanWalk) {
            if (self::$fence == null) {
            self::$fence = new Enclosure();}
            self::$fence->addAnimal($animals);
            
        } elseif ($animals instanceof CanFly) {
            if (self::$aviary == null) {
            self::$aviary = new Enclosure();}
            self::$aviary->addAnimal($animals);
        } elseif ($animals instanceof CanSwim) {
            if (self::$aquarium == null) {
            self::$aquarium = new Enclosure();}
            self::$aquarium->addAnimal($animals);
        }
    }


    public static function visitTheZoo()
    {
        echo self::$aquarium;
        echo self::$aviary;
        echo self::$fence;
    }
}