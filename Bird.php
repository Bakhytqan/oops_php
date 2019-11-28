<?php
namespace Animal;

require_once 'Animal.php';

use Live\Animal;

class Bird extends Animal
{
    public $highestFlight;

    public function move() {
        echo "Flies...";
    }
}