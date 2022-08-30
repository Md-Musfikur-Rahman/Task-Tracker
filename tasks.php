<!DOCTYPE html>
<html lang="en">
    <?php session_start();
    include_once'./head.php';
 ?>
    <style>
    <?php include_once'./css/style.css';
    include_once'./css/tasks.css';
    ?>
    </style>

    <body>
        <?php include_once'./nav.php';?>
        <h1>Tasks</h1>

        <div id="overlay">
            <i class=" onoff fas fa-window-close" onclick="off()"></i>
            <div class="text">
                <form action="./addtasks.php" method="POST">

                    <label for="taskname">Task Title</label>
                    <input type="text" id="taskname" name="taskname" placeholder="Task Title.." required>

                    <label for="stime">Assign Date</label>
                    <input type="date" name="stime" id="stime">

                    <label for="etime">End Date</label>
                    <input type="date" name="etime" id="etime">

                    <label for="priority">Priority</label>
                    <select id="priority" name="priority">
                        <option value="highest">Highest</option>
                        <option value="medium">Medium</option>
                        <option value="low">Low</option>
                    </select>

                    <label for="des">Description</label>
                    <textarea id="des" name="des" placeholder="Write something.." style="height:200px"
                        required></textarea>

                    <input type="submit" value="Save">

                </form>

            </div>
        </div>

        <main id="over">
            <div class="function">
                <div class="add">
                    <h2>Add Tasks</h2>
                    <i class="onoff fas fa-plus-circle" onclick="on()"></i>
                </div>

                <div class="search">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for tasks..">

                </div>
            </div>

            <ul id="myUL">

                <?php
            include './dbconnect.php';

            $email = $_SESSION["email"];

            $sql = "SELECT * FROM  task WHERE email='$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo ' <li >  
                <div class="box">
                <div class="'.$row["priority"].'">
                    <h2>Task Name:-'.$row["taskname"].'</h2>
                    <br>
                    <div class="row">
                        <h4>Strat Date: <br> '.$row["stime"].'</h4>
                        <h4>End Date: <br>'.$row["etime"].'</h4>
                    </div>
                    <br>
                    <p>Description:</p>
                    <p>'.$row["des"].'</p>
                    <br>
                    <div class="btn">
                    <a href="edit.php?id='.$row["id"].'"> <input type="button" class="edit"value="Edit"></a>
                    <a href="delete.php?id='.$row["id"].'"><input type="button" class="dele" value="Delete"></a>
            </div>
            </div>
            </div></li>';
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
                    <th>Task Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Priority</th>
                    <th>Descreption</th>
                </tr>
                <?php
                include_once './dbconnect.php';

                $email = $_SESSION["email"];

            $sql = "SELECT * FROM  task WHERE email='$email'";
            $result = $conn->query($sql);
                
                
                while($rows=$result->fetch_assoc())
                {
            ?>
                <tr>

                    <td><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['taskname'];?></td>
                    <td><?php echo $rows['stime'];?></td>
                    <td><?php echo $rows['etime'];?></td>
                    <td><?php echo $rows['priority'];?></td>
                    <td><?php echo $rows['des'];?></td>
                </tr>
                <?php
                }
            ?>
            </table>
        </div>


        <?php include_once './footer.php';?>

        <script>
        function on() {
            document.getElementById("overlay").style.display = "block";
            document.getElementById("over").style.display = "none";
            document.getElementById("overs").style.display = "none";
        }

        function off() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("over").style.display = "block";
            document.getElementById("overs").style.display = "none";

        }

        function onf() {
            document.getElementById("overlay").style.display = "none";
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
                a = li[i].getElementsByTagName("h2")[0];
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