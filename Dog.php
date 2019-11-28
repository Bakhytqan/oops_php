<?php
namespace Animal\Home;

require_once 'Animal.php';
require_once 'AnimalInterface.php';
require_once 'GrowInterface.php';

use Live\Animal;
use Interfaces\AnimalInterface;
use Interfaces\GrowInterface;

class Dog extends Animal implements AnimalInterface, GrowInterface
{

    const TYPE_TAZY = 'tazy';
    const TYPE_ALABAI = 'alabai';

    public $type;
    
    public function bite() {
        echo "Bite";
    }

    public function move () {
        echo "running fast.....\n";
    }

    public function grow(){
        echo "Dog grows fast\n";
    }

    public static function getTypes() {
        return [
            self::TYPE_TAZY,
            self::TYPE_ALABAI,
        ];
    }
}