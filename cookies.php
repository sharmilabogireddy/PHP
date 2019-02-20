<?php
$name = "somename";
$value = 100;
$expiration = time() + (60*60*24*7);//when to expire the page 60sec,60mins,24hrs,7days
setcookie($name,$value,$expiration);//it is a prebuilt fn
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["somename"])){
        $someOne = $_COOKIE["somename"];
        echo $someOne;
    }
    else{
        $someOne = "";
    }
    ?>
</body>
</html>