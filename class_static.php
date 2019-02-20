<?php
class Car{
    static $wheels=4;
    function moveWheels(){
        //echo "Wheels moved";
        Car::$wheels=10;
    }
}
$bmw = new Car();
Car::moveWheels();
echo Car::$wheels;                                

?>