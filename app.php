<?php

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
    //echo $animal-> getName();
    echo $animal-> noise();
}





