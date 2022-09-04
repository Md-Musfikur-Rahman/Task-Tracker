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
            <div class="card">
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
            </div>
        </main>


    </body>

</html>