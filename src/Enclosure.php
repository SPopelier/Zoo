<?php

namespace App;

class Enclosure {
    private array $animals = [];

    public function addAnimal(Animal $nouvelAnimal) {
        $this->animals[] = $nouvelAnimal;
    }

    public function __toString(): string {
        $valeurRetour = "";

        foreach ($this->animals as $anAnimal) {
            $valeurRetour .= $anAnimal->noise();
        }

        return $valeurRetour;
    }
}
