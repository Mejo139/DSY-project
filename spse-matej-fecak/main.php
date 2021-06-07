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
            
            <a class="logo" href="main.php">
                <img class="desktop" src="img/logo.png" alt="">
                <img class="phone" src="img/logo-phone.png" alt="">
            </a>

            <ul id="navigation-menu" class="nav hidden">
                <li><a href="main.php">Home</a></li>
                <li><a href="models.php">Models</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="index.php">LOGIN</a></li>
            </ul>

            <div id="hamburger-menu">
                <i id="icon-menu" class="fa fa-bars fa-3x"></i>
                <i id="icon-close" class="fa fa-times fa-3x hidden"></i>
            </div>

        </div>

    </header>

    <main>

        <div class="slider-wrapper">
            
            <!-- slick slider -->
            <div class="slider">
                <div class="item model-3">
                    <a class="model-link" href="models/model-3.html">
                        <span class="call-to-action">Tesla Model 3</span>
                    </a>
                </div>
                <div class="item model-s">
                    <a class="model-link" href="models/model-s.html">
                        <span class="call-to-action">Tesla Model S</span>
                    </a>
                </div>
                <div class="item model-x">
                    <a class="model-link" href="models/model-x.html">
                        <span class="call-to-action">Tesla Model X</span>
                    </a>
                </div>
                <div class="item model-roadster">
                    <a class="model-link" href="models/model-roadster.html">
                        <span class="call-to-action">Tesla Roadster</span>
                    </a>
                </div>
                <div class="item model-semi">
                    <a class="model-link" href="models/model-semi.html">
                        <span class="call-to-action">Tesla Semi</span> 
                    </a>
                </div>
            </div>

            <!-- custom controls for slider -->
            <div class="controls">
                <div class="arrow prev-arrow">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-left fa-w-10 fa-9x"><path fill="" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z" class=""></path></svg>
                </div>
                <div class="arrow next-arrow">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10 fa-9x"><path fill="" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>
                </div>
            </div>

            <!-- custom dots for slider -->
            <div class="custom-dots">
            </div>
        </div>

        <div class="news-wrapper">

            <h2 class="news-title">NEWS</h2>

            <!-- posts inside news wrapper -->
            <div class="news">
    
                <div class="post">
                    <div class="post-image">
                        <img src="img/post-thumbnail.jpeg" class="post-thumbnail" alt="">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">Lorem Ipsum</h3>
                        <span class="post-date">02.02.2020 22:22</span>
                        <p class="post-preview">Cake icing cake donut. Marshmallow donut tiramisu. Carrot cake chocolate muffin jelly-o fruitcake sugar plum tart tart cake. Ice cream liquorice jelly-o Cake icing cake donut. Marshmallow donut tiramisu. Carrot cake chocolate muffin jelly-o fruitcake sugar plum tart tart cake. Ice cream liquorice jelly-o Cake icing cake donut. Marshmallow donut tiramisu. Carrot cake chocolate muffin jelly-o fruitcake sugar plum tart tart cake. Ice cream liquorice jelly-o...</p>
                        <a href="" class="read-more">Read more</a>
                    </div>
                </div>
    
                <div class="post">
                    <div class="post-image">
                        <img src="img/post-thumbnail.jpeg" class="post-thumbnail" alt="">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">Lorem Ipsum</h3>
                        <span class="post-date">02.02.2020 22:22</span>
                        <p class="post-preview">Cake icing cake donut. Marshmallow donut tiramisu. Carrot cake chocolate muffin jelly-o fruitcake sugar plum tart tart cake. Ice cream liquorice jelly-o Cake icing cake donut. Marshmallow donut tiramisu. Carrot cake chocolate muffin jelly-o fruitcake sugar plum tart tart cake. Ice cream liquorice jelly-o...</p>
                        <a href="" class="read-more">Read more</a>
                    </div>
                </div>
    
                <div class="post">
                    <div class="post-image">
                        <img src="img/post-thumbnail.jpeg" class="post-thumbnail" alt="">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">Lorem Ipsum</h3>
                        <span class="post-date">02.02.2020 22:22</span>
                        <p class="post-preview">Cake icing cake donut. Marshmallow donut tiramisu. Carrot cake chocolate muffin jelly-o fruitcake sugar plum tart tart cake. Ice cream liquorice jelly-o...</p>
                        <a href="" class="read-more">Read more</a>
                    </div>
                </div>
    
                <div class="post">
                    <div class="post-image">
                        <img src="img/post-thumbnail.jpeg" class="post-thumbnail" alt="">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">Lorem Ipsum</h3>
                        <span class="post-date">02.02.2020 22:22</span>
                        <p class="post-preview">Cake icing cake donut. Marshmallow donut tiramisu. Carrot cake chocolate muffin jelly-o fruitcake sugar plum tart tart cake. Ice cream liquorice jelly-o...</p>
                        <a href="" class="read-more">Read more</a>
                    </div>
                </div>
    
                <div class="post">
                    <div class="post-image">
                        <img src="img/post-thumbnail.jpeg" class="post-thumbnail" alt="">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">Lorem Ipsum</h3>
                        <span class="post-date">02.02.2020 22:22</span>
                        <p class="post-preview">Cake icing cake donut. Marshmallow donut tiramisu. Carrot cake chocolate muffin jelly-o fruitcake sugar plum tart tart cake. Ice cream liquorice jelly-o...</p>
                        <a href="" class="read-more">Read more</a>
                    </div>
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