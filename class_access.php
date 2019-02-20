<?php
class Car{
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors =4;
    
    
}
$bmw = new Car();
$bmw->wheels;


class Semi extends Car{
    function showData(){
        //echo "Wheels moved";
        echo $this->hood;   }
}
$semi = new Semi();
echo $semi->showData();

//$merces_benz->moveWheels();
?>