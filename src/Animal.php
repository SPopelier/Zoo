<?php

namespace App;

abstract class Animal {

    private string $name;

    public function getName() : string {
        return $this->name;
    }

    public function __construct(string $name) {
        $this->name = $name;
    }

    abstract protected function getNoise();

    public function noise() {
       echo $this->name . "A DIT " , $this->getNoise(). "\n";
    }
}