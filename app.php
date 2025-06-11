<?php

use App\Animals\BubbleFish;
use App\Animals\Elephant;
use App\Animals\Fish;
use App\Animals\Parrot;
use App\Zoo;

require __DIR__ . '/vendor/autoload.php';

$animals = [
    new \App\Animals\Fish("bubulle"),
    new \App\Animals\BubbleFish("bubbles"),
    new \App\Animals\CatFish("MiaouFish"),
    new \App\Animals\ClownFish("LolFish"),
    new \App\Animals\Zebra("BlackAndWhite"),
    new \App\Animals\Whale("BigBro"),
    new \App\Animals\Elephant("Bobs"),
    new \App\Animals\Parrot("CocoLoco"),
    new \App\Animals\Dove("Peace"),
    new \App\Animals\Duck("Daffy"),

];


foreach($animals as $animal) {
    $enclos = new \App\Enclosure();

    $enclos ->addAnimal($animal);
   // echo $enclos;
    //echo $animal-> getName();
   //echo $animal-> noise();

echo Zoo::addAnimal($animal);
}

Zoo::visitTheZoo();


/*$monElephant = new \App\Animals\Elephant("Babar");

$enclos ->addAnimal($monElephant);
$enclos ->addAnimal(new Parrot("Coco"));

echo $enclos;
*/
