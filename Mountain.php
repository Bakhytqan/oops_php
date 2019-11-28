<?php
namespace Nature;

include_once 'GrowInterface.php';

use Interfaces\GrowInterface;

class Mountain implements GrowInterface {
    public function grow(){
        echo "Mountain is grows sloooowly\n";
    }
}