<?php

if(isset($_POST['submit'])){
    $name = array("Sharmila","naresh","taniksha");
    $username = $_POST['username'];
    $password = $_POST['password'];
    //echo $username . "<br>" . $password;
    //echo "Yes it works";
    
    if(strlen($username < 5)){
        echo "Username has to be longer than five";
    }
    if(!in_array($username,$name)){
        echo "sorry u are not allowed";
    }else{ echo "Welcome"; }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>