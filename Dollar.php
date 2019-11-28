<?php
require_once 'GrowInterface.php';

use Interfaces\GrowInterface;

class Dollar implements GrowInterface {

    public function grow() {
        echo "Dollar is growing to 500 tenge!!!....\n";
    }
}