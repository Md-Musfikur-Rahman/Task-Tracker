<?php

include'./dbconnect.php';


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `user` ( `name`, `email`, `password`) VALUES ('$name', '$email', '$password')";

// insert in database 
$result = $conn->query($sql);

if($result)
{
    include'./index.php';
}

?>