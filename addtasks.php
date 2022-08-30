<?php
session_start();
include'./dbconnect.php';
$email = $_SESSION["email"];

$taskname = $_POST['taskname'];
$stime = $_POST['stime'];
$etime = $_POST['etime'];
$priority = $_POST['priority'];
$des = $_POST['des'];


$sql = "INSERT INTO `task` ( `taskname`, `stime`, `etime`, `priority`, `des`,`email`) VALUES ('$taskname', '$stime', '$etime', '$priority', '$des','$email')";

// insert in database 
$result = $conn->query($sql);

if($result)
{
    header("location: ./tasks.php");
}

?>