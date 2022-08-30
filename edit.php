<!DOCTYPE html>
<html lang="en">
    <?php session_start();
    include_once'./head.php';
    include_once './dbconnect.php';
    if(count($_POST)>0) {
    $sql = "UPDATE task SET stime='".$_POST['stime']."',etime='".$_POST['etime']."',priority='".$_POST['priority']."',des='".$_POST['des']."'WHERE id='".$_GET['id']."'";
    mysqli_query($conn,$sql);
    header('location:./tasks.php');
    }

?>

    <style>
    <?php include_once'./css/style.css';
    include_once'./css/edit.css';
    ?>
    </style>

    <body>
        <?php include_once'./nav.php';?>
        <h1>Tasks</h1>
        <main>
            <div class="text">
                <form action="" method="POST">

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

        </main>

        <?php include_once'./footer.php';?>

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