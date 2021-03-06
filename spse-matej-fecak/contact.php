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
        <div class="contacts-wrapper">

            <!-- important contacts -->
            <section class="contacts">
                <h2 class="contacts-title">Contacts</h2>
                <div class="contacts-item-wrapper">
                    <div class="contact-item">
                        <h4 class="contacts-subtitle">Sales</h4>
                        <p><b>Toll free:</b><br><a href="tel:888-516-3754">(888)&nbsp;516&nbsp;3754</a> or <a href="tel:888-518-3752">(888)&nbsp;518&nbsp;3752</a></p>
                        <p><b>Local:</b><br><a href="tel:650-681-5100">(650)&nbsp;681&nbsp;5100</a></p>
                        <p><b>Fax:</b><br><a href="tel:650-681-5101">(650)&nbsp;681&nbsp;5101</a></p>
                    </div>
                    
                    <div class="contact-item">
                        <h4 class="contacts-subtitle">Customer Support & Roadside Assistance</h4>
                        <p><b>Customer Support:</b><br><a href="mailto:customersupport@tesla.com">customersupport@tesla.com</a></p>
                        <p><b>Emergency Roadside Assistance:</b><br><a href="tel:877-798-3752">(877)&nbsp;798&nbsp;3752</a></p>
                    </div>
                    
                    <div class="contact-item">
                        <h4 class="contacts-subtitle">Press</h4>
                        <p><b>North America:</b><br><a href="mailto:press@tesla.com">press@tesla.com</a></p>
                        <p><b>Europe & Middle East:</b><br><a href="mailto:eupress@tesla.com">eupress@tesla.com</a></p>
                        <p><b>Australia and Asia:</b><br><a href="mailto:apacpress@tesla.com">apacpress@tesla.com</a></p>
                        <p><b>China:</b><br><a href="mailto:china-press@tesla.com">china-press@tesla.com</a></p>
                    </div>
                </div>
            </section>

            <!-- contact form -->
            <section class="contact-form">
                <h2 class="contacts-title">Submit a question or comment</h2>
                <!-- form -->
                <form action="" method="GET">
                    <input type="text" name="name" id="form-name" placeholder="*John Doe" min="5" max="128" required>
                    <input type="email" name="email" id="form-email" placeholder="*john@doe.com" max="256" required>
                    <input type="tel" name="phone" id="form-phone" placeholder="+421 999 000 000" min="7">

                    <input type="text" name="subject" id="form-subject" placeholder="*Subject" required min="3" max="128">
                    <textarea name="message" id="form-message" cols="30" rows="10" minlength="5" placeholder="*Place for your message..." required></textarea>
                    
                    <input type="submit" value="SUBMIT">
                </form>
            </section>

            <!-- maps and addresses of offices -->
            <section class="worldwide-offices">
                <h2 class="contacts-title">Wolrdwide Offices</h2>
                <div class="office-wrapper">
                    <div class="office">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.3817189593833!2d-122.15251378435534!3d37.394709941706935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb075776f1c3b%3A0xccc17e4da6b38370!2sTesla+HQ!5e1!3m2!1ssk!2ssk!4v1546775576315" allowfullscreen></iframe>     
                        </div>
                        <div class="address">
                            <h3 class="contacts-subtitle">Tesla HQ</h3>
                            <p>3500 Deer Creek Road Palo Alto, CA 94304</p>
                        </div>
                    </div>
                    <div class="office">
	    				<div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3994.1636778111083!2d-121.94680428435328!3d37.49251323612111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fc654f67bbf49%3A0x2d4f6c443c47fb25!2sTesla+Factory+Store!5e1!3m2!1ssk!2ssk!4v1546775852321" allowfullscreen></iframe>
                        </div>
                        <div class="address">
                            <h3 class="contacts-subtitle">Tesla Factory</h3>
                            <p>45500 Fremont Boulevard, CA 94538</p>
                        </div>
                    </div>
                    <div class="office">
	    				<div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.2546405602775!2d-119.44122868431221!3d39.53801661653204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80991fc240ba30b9%3A0x7e66b0fa4fe55cd8!2sTesla+Gigafactory!5e1!3m2!1ssk!2ssk!4v1546775755083" allowfullscreen></iframe>
                        </div>
                        <div class="address">
                            <h3 class="contacts-subtitle">Tesla Gigafactory</h3>
                            <p>Electric Avenue Sparks, NV 89434</p>
                        </div>
                    </div>
                    <div class="office">
	    				<div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3077.6964045248146!2d4.93461271605763!3d52.3107593594667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60ba220ee47bb%3A0xb13bb272553f7faf!2sTesla!5e1!3m2!1ssk!2ssk!4v1546775903634" allowfullscreen></iframe>
                        </div>
                        <div class="address">
                            <h3 class="contacts-subtitle">Tesla Amsterdam</h3>
                            <p>Burgemeester Stramanweg 122 1101 EN</p>
                        </div>
                    </div>
                </div>
            </section>
            
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