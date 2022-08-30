<?php
session_start();

include_once'./dbconnect.php';

$name = $_POST["fname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$msg = $_POST["msg"];

$sql = "INSERT INTO contacts (`fname`, `email`, `phone`, `msg`) VALUES ('$name','$email','$phone','$msg')";
$res = $conn->query($sql);

?>