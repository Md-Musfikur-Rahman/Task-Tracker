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
        <h1>Admin Profile</h1>
        <h2>
            <?php
        include_once './dbconnect.php';
        $email = $_SESSION["email"];
        
        echo $email;

        ?>

        </h2>

        <main>
            <div class="wrapper">
                <div class="profile">
                    <div class="overlay">
                        <div class="about">
                            <?php
                        include './dbconnect.php';
                        
                        $email = $_SESSION["email"];                                                                
                          $sql = "SELECT * FROM  user WHERE email = '$email'";
                          $result = $conn->query($sql);
                
                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                            echo '<h4>'.$row["name"].'</h4>';
                            }
                        } else {
                            echo "0 results";
                        }
                
                    ?>
                            <span>Web Developer</span>
                        </div>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/mmrmasum99/" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a></li>
                            <li><a href="https://www.github.com/Md-Musfikur-Rahman/" target="_blank">
                                    <i class="fa fa-github"></i>
                                </a></li>
                            <li><a href="https://www.twitter.com/Mmrmasum5" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a></li>
                            <li><a href="https://www.instagram.com/Md_MusfikurRahman/" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>


    </body>

</html>