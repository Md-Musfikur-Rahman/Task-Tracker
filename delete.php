<?php
include_once './dbconnect.php';
$sql = "DELETE FROM `task` WHERE `id`='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    include_once'./tasks.php';
    echo "<h1>Record deleted successfully</h1>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>