<!DOCTYPE html>
<html lang="en">
    <?php
session_start();
include_once './head.php';
?>

    <style>
    <?php include_once './css/style.css';
    include_once './css/admin_home.css';
    ?>
    </style>

    <body>
        <?php
        include_once './admin_nav.php';
        ?>
        <h1>Home</h1>

        <main>
            <div id="card">
                <ul>
                    <li>
                        <h2>User Counts</h2>
                        <div class="user">
                            <div class="users">
                                <i class="fas fa-user-shield"></i>
                                <h1><?php
                                include_once './dbconnect.php';

                                $sql = "SELECT COUNT(name) AS Users FROM user WHERE name!='admin'";
                                $res = $conn->query($sql);
                                
                                $row = $res->fetch_assoc();
                                echo $row["Users"];
                                ?> </h1>
                                <h4>Active Users</h4>
                            </div>
                            <div class="admins">
                                <i class="fas fa-user-lock"></i>
                                <h1><?php
                                include_once './dbconnect.php';

                                $sql = "SELECT COUNT(name) AS Users FROM user WHERE name='admin'";
                                $res = $conn->query($sql);
                                
                                $row = $res->fetch_assoc();
                                echo $row["Users"];
                                ?> </h1>
                                <h4>Admins</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h2>Total Tasks Added</h2>
                        <div class="det">
                            <i class="fas fa-tasks-alt"></i>
                            <h1>
                                <?php
                                    include_once './dbconnect.php';
                            
                                    $sql = "SELECT COUNT(taskname) AS Users FROM task";
                                    $res = $conn->query($sql);
                                    
                                    $row = $res->fetch_assoc();
                                    echo $row["Users"];
                                ?>
                            </h1>
                            <h4>Tasks form all users</h4>
                        </div>
                    </li>
                    <li>
                        <h2>Contacts counts</h2>
                        <div class="det">
                            <i class="fas fa-address-card"></i>
                            <h1>
                                <?php
                                 include_once './dbconnect.php';
                        
                                 $sql = "SELECT COUNT(fname) AS Users FROM contacts";
                                 $res = $conn->query($sql);
                                 
                                 $row = $res->fetch_assoc();
                                 echo $row["Users"];
                             ?>
                            </h1>
                            <h4>Contact form all users</h4>
                        </div>

                    </li>
                </ul>
                <h1 class="btn" onclick="on()">User Details</h1>
            </div>

            <div id="data">
                <h1 class="btn" onclick="off()">Back</h1>
                <table>
                    <tr>
                        <th>User Name</th>
                        <th>E-mail</th>
                        <th>Total Tasks</th>
                    </tr>
                    <?php
                include_once './dbconnect.php';

            $sql = "SELECT * FROM  user ";
            $result = $conn->query($sql);                
                while($rows=$result->fetch_assoc())
                {
            ?>
                    <tr>

                        <td><?php echo $rows['name'];?></td>
                        <td><?php echo $rows['email'];
                        $mail = $rows['email']; ?></td>
                        <td>
                            <?php
                                include_once './dbconnect.php';

                                $sql = 'SELECT COUNT(email) AS Users FROM task WHERE email="$mail"';
                                $res = $conn->query($sql);
                                
                                $row = $res->fetch_assoc();
                                echo $row["Users"];
                                ?>
                        </td>
                    </tr>
                    <?php
                }
            ?>
                </table>
            </div>
        </main>

        <?php
        include_once './footer.php';
        ?>
        <script>
        function off() {
            document.getElementById("card").style.display = "block";
            document.getElementById("data").style.display = "none";

        }

        function on() {
            document.getElementById("card").style.display = "none";
            document.getElementById("data").style.display = "block";

        }
        </script>
    </body>

</html>