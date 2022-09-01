<!DOCTYPE html>
<html lang="en">
    <?php
session_start();
include_once './head.php';
?>

    <style>
    <?php include_once './css/style.css';
    include_once './css/admin.css';
    ?>
    </style>

    <body>
        <?php
        include_once './admin_nav.php';
        ?>
        <h2>
            <?php
        include_once './dbconnect.php';
        $email = $_SESSION["email"];
        $name = $_SESSION["name"];
        echo $email;

        ?>
        </h2>


    </body>

</html>