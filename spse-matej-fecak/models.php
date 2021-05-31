<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesla Motors</title>

    <!-- favicon -->
    <link rel="icon" href="img/favicon.png">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
</head>
<body>
    
    <header>
        <div class="nav-menu">


            <a class="logo" href="index.php">
                <img class="desktop" src="img/logo.png" alt="">
                <img class="phone" src="img/logo-phone.png" alt="">
            </a>

            <ul id="navigation-menu" class="nav hidden">
                <li><a href="index.php">Home</a></li>
                <li><a href="models.php">Models</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>

            <div id="hamburger-menu">
                <i id="icon-menu" class="fa fa-bars fa-3x"></i>
                <i id="icon-close" class="fa fa-times fa-3x hidden"></i>
            </div>
            
        </div>

    </header>

    <main>
        <div class="models-wrapper">

            <!-- model item -->
            <div class="model">
                <img src="img/gallery/models-1.jpeg" alt="model s">
                <!-- model position absolute to stay up on image -->
                <div class="model-detail">
                    <h2>Tesla Model S</h2>
                    <a href="models/model-s.html">See details</a>
                </div>
            </div>
            <div class="model">
                <img src="img/gallery/model3-1.jpeg" alt="model 3 ">
                <div class="model-detail">
                    <h2>Tesla Model 3</h2>
                    <a href="models/model-3.html">See details</a>
                </div>
            </div>
            <div class="model">
                <img src="img/gallery/modelx-3.jpeg" alt="model x">
                <div class="model-detail">
                    <h2>Tesla Model X</h2>
                    <a href="models/model-x.html">See details</a>
                </div>
            </div>
            <div class="model">
                <img src="img/gallery/modelroadster-3.jpg" alt="tesla roadster">
                <div class="model-detail">
                    <h2>Tesla Roadster</h2>
                    <a href="models/model-roadster.html">See details</a>
                </div>
            </div>
            <div class="model">
                <img src="img/gallery/modelsemi-2.jpeg" alt="tesla semi">
                <div class="model-detail">
                    <h2>Tesla Semi</h2>
                    <a href="models/model-semi.html">See details</a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-wrapper">
            <div class="social">
                <a href="https://www.facebook.com/TeslaMotorsSlovakia/"><img src="img/social/facebook-icon.png" alt="facebook-icon"></a>
                <a href="https://www.instagram.com/teslamotors/"><img src="img/social/instagram-icon.png" alt="instagram-icon"></a>
                <a href="https://www.twitter.com/tesla"><img src="img/social/twitter-icon.png" alt="twitter-icon"></a>
            </div>
            <div class="trademark">
                <span>Tesla &copy; 2020. All rights reserved.</span>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/script.js"></script>
</body>
</html>