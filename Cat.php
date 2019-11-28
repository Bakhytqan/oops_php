<?php
namespace Animal\Home;

require_once 'Animal.php';
require_once 'AnimalInterface.php';

use Live\Animal;
use Interfaces\AnimalInterface;

class Cat extends Animal implements AnimalInterface {
    public function move() {
        echo "Cat is walking...\n";
    }

}
