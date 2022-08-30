<style>
<?php include_once'./css/nav.css';
?>
</style>
<div class="navi">
    <div class="logo">
        <a href="./home.php">
            <h2>Task Tracker</h2>
        </a>
    </div>
    <div class="controls">
        <div id="home">
            <div class="control tooltip active-btn">
                <a href="./home.php"> <i class="fas fa-home"></i></a>
                <span class="tooltiptext">Home</span>
            </div>
        </div>
        <div id="tasks">
            <div class="control tooltip active-btn">
                <a href="./tasks.php"><i class="fa-solid fa-bell"></i></a>
                <span class="tooltiptext">Tasks</span>
            </div>
        </div>
        <div id="profile">
            <div class="control tooltip active-btn">
                <a href="./profile.php"> <i class="fas fa-user"></i></a>
                <span class="tooltiptext">Profile</span>
            </div>
        </div>
        <div id="menu">
            <div class="control tooltip active-btn">
                <a href="./menu.php"><i class="fa-solid fa-bars"></i></a>
                <span class="tooltiptext">About</span>
            </div>
        </div>
        <div id="services">
            <div class="control tooltip active-btn">
                <a href="./services.php"><i class="fas fa-info-circle"></i></a>
                <span class="tooltiptext">Contact</span>
            </div>
        </div>
    </div>
    <div class="logo logout">
        <a href="./logout.php">Logout</a>
    </div>

</div>