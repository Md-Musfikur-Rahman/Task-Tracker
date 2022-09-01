<!DOCTYPE html>
<html lang="en">
    <?php     session_start();
    include_once './head.php';
?>
    <style>
    <?php include_once './css/style.css';
    include_once './css/profile.css';
    ?>
    </style>

    <body>
        <?php include_once './nav.php';?>
        <main>
            <div class="center">
                <h1>Profile</h1>

                <?php 
                    // Include the database configuration file  
                    require_once './dbconnect.php';
                
                    $email = $_SESSION["email"];
                    
                    // Get image data from database 
                    $result = $conn->query("SELECT `image` FROM `images` WHERE email='$email'"); 
                    if($result->num_rows > 0){ 
                   
                    while($row = $result->fetch_assoc()){ 
                        ?>
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                <?php } } 
                ?>

                <h2>
                    <?php
                        include './dbconnect.php';
                        
                        $email = $_SESSION["email"];
                        echo "<h2>$email</h2>";
                                                                
                          $sql = "SELECT * FROM  user WHERE email = '$email'";
                          $result = $conn->query($sql);
                
                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                            echo '<h2>Name:- '.$row["name"].'</h2>';
                            }
                        } else {
                            echo "0 results";
                        }
                
                    ?>
                </h2>
                <br>
                <h2>Bio</h2>
                <section>
                    <?php
                        include'./dbconnect.php';
                        
                        $email = $_SESSION["email"];
                                                                
                          $sql = "SELECT `bio` FROM `bios` WHERE email='$email'";
                          $result = $conn->query($sql);
                
                          if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                            echo $row["bio"];
                            }
                        } else {
                            echo "0 results";
                        }
                
                    ?>
                </section>
            </div>
            <div class="add">
                <h2>Edit Profile</h2>
                <i class="onoff fas fa-pen" onclick="on()"></i>

                <div id="overlay">
                    <i class=" onoff fas fa-window-close" onclick="off()"></i>
                    <div class="text">
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <label>Select Image File:</label>
                            <input type="file" name="image">
                            <label for="bio">Bio</label>
                            <textarea id="bio" name="bio" placeholder="Write something About Yourself"
                                style="height:200px"></textarea>
                            <input type="submit" name="submit" value="Upload">
                        </form>
                    </div>
                </div>
            </div>


        </main>
        <?php include_once './footer.php';?>

        <script>
        function on() {
            document.getElementById("overlay").style.display = "block";
        }

        function off() {
            document.getElementById("overlay").style.display = "none";
        }
        </script>
    </body>

</html>