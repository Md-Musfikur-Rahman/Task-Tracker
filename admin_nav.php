<style>
<?php include_once './css/nav.css';
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
                <a href="./admin_home.php"> <i class="fas fa-home"></i></a>
                <span class="tooltiptext">Home</span>
            </div>
        </div>
        <div id="profile">
            <div class="control tooltip active-btn">
                <a href="./admin_profile.php"> <i class="fas fa-user"></i></a>
                <span class="tooltiptext">Profile</span>
            </div>
        </div>
        <div id="services">
            <div class="control tooltip active-btn">
                <a href="./admin_contact.php"><i class="fas fa-info-circle"></i></a>
                <span class="tooltiptext">Contact</span>
            </div>
        </div>
    </div>
    <div class="logo logout">
        <a href="./logout.php">Logout</a>
    </div>

</div>