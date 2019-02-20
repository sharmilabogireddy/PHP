<?php
class Car{
    function moveWheels(){
        echo "Wheels moved";
    }
}
if(class_exists("Car", "moveWheels")){
    echo "The method exists";
}
else{
    echo "nomit does not";
}
?>