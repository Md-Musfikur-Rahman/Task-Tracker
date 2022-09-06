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
        <h1>
            <a href="" class="typewrite" data-period="2000"
                data-type='[ "Hi, Im Musfikur.", "Admin Profile.", "I Love Design.", "I Love to Develop." ]'>
                <span class="wrap"></span>
            </a>
        </h1>
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
        <?php
        include_once './footer.php';
        ?>

        <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
        </script>


    </body>

</html>