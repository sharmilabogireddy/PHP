<?php
class Car{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors =4;
    function moveWheels(){
        //echo "Wheels moved";
        $this->wheels = 10;
    }
    function createDoors(){
        $this->doors = 6;
    }
}
$bmw = new Car();

$bmw->moveWheels();
$bmw->createDoors();
echo $bmw->wheels . "<br>";
echo $bmw->doors;
//$merces_benz->moveWheels();
?>