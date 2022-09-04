<!DOCTYPE html>
<html lang="en">
    <?php
session_start();
include_once './head.php';
?>

    <style>
    <?php include_once './css/style.css';
    include_once './css/admin_contact.css';
    ?>
    </style>

    <body>
        <?php
        include_once './admin_nav.php';
        ?>
        <h1>Contacts</h1>
        <main id="over">
            <div class="function">
                <div class="search">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Phone...">
                </div>
            </div>

            <ul id="myUL">

                <?php
            include './dbconnect.php';

            $sql = "SELECT * FROM  contacts ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo ' <li >  
                <div class="box">
                
                    <h2>Name:-'.$row["fname"].'</h2>
                    <br>
                    <h3>E-mail: '.$row["email"].'</h3>
                    <h4>Phone: '.$row["phone"].'</h4>
                    <br>
                    <p>Description:</p>
                    <p>'.$row["msg"].'</p>
                    <br>
                    <div class="btn">
                    <a href="delete.php?id='.$row["id"].'"><input type="button" class="dele" value="Delete"></a>
                    </div>
                </div>
            </li>';
            }
            } else { echo "0 results";}
        ?>

            </ul>


            <div class="change">
                <h2>Change View</h2>
                <i class="onoff fas fa-exchange" onclick="onf()"></i>
            </div>

        </main>
        <div id="overs">
            <div class="change">
                <h2>Change View</h2>
                <i class="onoff fas fa-exchange" onclick="off()"></i>
            </div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>E-mail</th>
                    <th>Phone Number</th>
                    <th>Descreption</th>
                </tr>
                <?php
                include_once './dbconnect.php';

            $sql = "SELECT * FROM  contacts ";
            $result = $conn->query($sql);
                
                
                while($rows=$result->fetch_assoc())
                {
            ?>
                <tr>

                    <td><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['fname'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['phone'];?></td>
                    <td><?php echo $rows['msg'];?></td>
                </tr>
                <?php
                }
            ?>
            </table>
        </div>
        <?php
        include_once './footer.php';
        ?>
        <script>
        function off() {
            document.getElementById("over").style.display = "block";
            document.getElementById("overs").style.display = "none";

        }

        function onf() {
            document.getElementById("over").style.display = "none";
            document.getElementById("overs").style.display = "block";

        }


        function myFunction() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName('li');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("h4")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
        </script>

    </body>


</html>