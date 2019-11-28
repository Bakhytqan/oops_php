<?php
require_once 'Bird.php';
require_once 'Dog.php';
require_once 'Mountain.php';
require_once 'Dollar.php';
require_once 'Cat.php';

use Animal\Home\{Cat,Dog};
use Nature\Mountain as RealMountain;

$a = new Dog();
// $a->name = 'Aktos';
// $a->age = 5;
// $a->type = Dog::TYPE_ALABAI;

// print_r($a);

$a->grow();

$b = new RealMountain;
$b->grow();

// print_r(Dog::getTypes());
$c = new Dollar;
$c->grow();


