<?php include "db.php"; ?>
<?php

function createRows(){
    global $connection;
    if(isset($_POST['submit'])){
    //echo "we got the data";
    $username = $_POST['username'];
    $password = $_POST['password'];
        
     $username = mysqli_real_escape_string($connection, $username );
     $password = mysqli_real_escape_string($connection, $password );
        
     $hashFormat = "$2y$10$";
     $salt = "iusessomecrazystrings22";
     $hashF_and_salt =  $hashFormat .  $salt;
    $password = crypt($password,$hashF_and_salt);
    
    $query = "INSERT INTO users(username,password)";
    $query .= "VALUES ('$username' , '$password')";
        
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query FAILED". mysqli_error());
    }
        else{
            echo "Record Created";
        }
}
}

function readRows(){
    global $connection;
     $query = "SELECT * FROM users";
   
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query FAILED". mysqli_error());
    }
     while($row = mysqli_fetch_assoc($result)){
                
              print_r($row);
              
          }
   
}

function showAllData(){
    global $connection;
     $query = "SELECT * FROM users";
   
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query FAILED". mysqli_error());
    }

 while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        echo "<option value='$id'>$id</option>";
                    }
}

function UpdateTable(){
    global $connection;
     $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";
        
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query Failed" . mysqli_error($connection));
        }
}

function deleteRows(){
    global $connection;
     $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";
        
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query Failed" . mysqli_error($connection));
        }
}
    ?>