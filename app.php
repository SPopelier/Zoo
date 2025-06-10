<?php
require __DIR__ . '/vender/autoload.php';

abstract class Animal {

    private string $name;

    public function getName() : string {
        return $this->name;
    }

    public function __construct(string $name) {
        $this->name = $name;
    }
}