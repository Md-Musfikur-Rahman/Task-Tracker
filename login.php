<?php
session_start();

include'./dbconnect.php';

$email = $_POST['email'];
$password = $_POST['password'];

    $sql = "SELECT * FROM  user WHERE email='$email' and password='$password'";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0 ){
    $row = mysqli_fetch_assoc($result);
    $_SESSION["email"] = $email;
    header("location: ./profile.php");
    } else{
    echo "<h1>Login Failed...Incorrect Email or Password...!</h1>";
    }
?>