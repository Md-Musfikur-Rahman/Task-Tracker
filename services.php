<!DOCTYPE html>
<html lang="en">
    <?php include_once'./head.php';
?>
    <style>
    <?php include_once'./css/style.css';
    include_once'./css/services.css';
    ?>
    </style>

    <body>
        <?php include_once'./nav.php';?>

        <main>
            <h1>Contact</h1>
            <div class="background">
                <div class="container">
                    <div class="screen">
                        <div class="screen-header">
                            <div class="screen-header-left">
                                <div class="screen-header-button close"></div>
                                <div class="screen-header-button maximize"></div>
                                <div class="screen-header-button minimize"></div>
                            </div>
                            <div class="screen-header-right">
                                <div class="screen-header-ellipsis"></div>
                                <div class="screen-header-ellipsis"></div>
                                <div class="screen-header-ellipsis"></div>
                            </div>
                        </div>
                        <div class="screen-body">
                            <div class="screen-body-item left">
                                <div class="app-title">
                                    <span>CONTACT</span>
                                    <span>US</span>
                                </div>
                                <div class="app-contact">CONTACT INFO : <br>+880 152-172-1467</div>
                            </div>
                            <div class="screen-body-item">
                                <form action="./contact.php" method="POST">
                                    <div class="app-form">
                                        <div class="app-form-group">
                                            <input type="text" name="fname" class="app-form-control"
                                                placeholder="FULL NAME">
                                        </div>
                                        <div class="app-form-group">
                                            <input type="email" name="email" class="app-form-control"
                                                placeholder="EMAIL">
                                        </div>
                                        <div class="app-form-group">
                                            <input type="tel" name="phone" class="app-form-control"
                                                placeholder="CONTACT NO">
                                        </div>
                                        <div class="app-form-group message">
                                            <input type="text" name="msg" class="app-form-control"
                                                placeholder="MESSAGE">
                                        </div>
                                        <div class="app-form-group buttons">
                                            <button type="reset" class="app-form-button">CANCEL</button>
                                            <button type="submit" class="app-form-button">SEND</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </main>
        <?php include_once'./footer.php';?>
    </body>

</html>