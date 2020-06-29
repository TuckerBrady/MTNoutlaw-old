<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165915729-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-165915729-1');
    </script>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Contact - MTN Outlaws</title>
    <meta name="keywords" content="Hunting, Fishing, Camping, Outdoors">
    <meta name="description" content="Free hunting, fishing, and camping education">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tucker Brady">
    <base href="https://mtnoutlaw.com">


    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" href="/css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfHgvYUAAAAAJHWyCyPdi4YLNNCKJcnr9gegH8n"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LfHgvYUAAAAAJHWyCyPdi4YLNNCKJcnr9gegH8n', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <div class="s-pageheader">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="/">
                        <img src="images/page-logo.png" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <ul class="header__nav">
                        <ul class="header__nav">
                            <li><a href="/" title="">Home</a></li>
                            <li class="has-children">
                                <a href="#" title="">Articles</a>
                                <ul class="sub-menu">
                                <li><a href="articles/clothing/clothing-articles.php">Clothing</a></li>
                                <li><a href="articles/fishing/fishing-articles.php">Fishing</a></li>
                                <li><a href="articles/gear/gear-articles.php">Gear</a></li>
                                <li><a href="articles/hunting/hunting-articles.php">Hunting</a></li>
                                <li><a href="articles/lifestyle/lifestyle-articles.php">Lifestyle</a></li> 
                                <li><a href="articles/outdoor-adventure/outdoor-adventure-articles.php">Outdoor Adventure</a></li>       
                            </ul>
                            </li>
                            <li><a href="huskydivision.php" title="">Husky Division</a></li>
                            <li><a href="about.php" title="">About</a></li>
                            <li class="current"><a href="contact.php" title="">Contact</a></li>
                        </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow">

        <div class="row">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    Find the stash. Win some treasure.
                </h1>
            </div> <!-- end s-content__header -->
    
            <div class="s-content__media col-full">
                <div id="map-wrap">
                    <div class="earth3dmap-com"><iframe id="iframemap" src="https://maps.google.com/maps?q=40.919790%2C+-111.862345&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="500" frameborder="0" scrolling="no"></iframe></div>
                </div> 
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">

                <h3 class="lead">Have a suggestion? Or if you just want to say hi?</h3>
                
                <p>There's a good chance we're up in the mountains, but we always stay connected. Feel free to reach out and drop us a note!
                </p>

                <div class="row">
                    <div class="col-six tab-full">
                        <h3>Where to Find Us</h3>

                        <p>
                        The Wasatch Front, UT<br>
                        84014 US
                        </p>

                    </div>

                    <div class="col-six tab-full">
                        <h3>Contact Info</h3>

                        <p>contact@mtnoutlaw.com</p>

                    </div>
                </div> <!-- end row -->

                <h4>Drop a note</h4>

                <form name="cForm" id="cForm" method="post" action="">
                    <fieldset>

                        <div class="form-field">
                            <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name *" value="">
                        </div>

                        <div class="form-field">
                            <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email *" value="">
                        </div>

                        <div class="message form-field">
                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message *" ></textarea>
                        </div>

                        <button name="submit" type="submit" class="submit btn btn--primary full-width">Submit</button>
                        <div class="g-recaptcha" data-sitekey="6Lc4JfMUAAAAANhAcZ5iameKI-xYpCQj1CoTrqep"></div>

                    </fieldset>
                </form> <!-- end form -->

                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    // access
                    $secretKey = '6Lc4JfMUAAAAAG73KF9_kQ4szaeAlqzzt3foEc63';
                    $captcha = $_POST['g-recaptcha-response'];

                    if(!$captcha){
                    echo '<h5 class="alert alert-warning">Please check the the captcha form.</h5>';
                    exit;
                    }

                    # FIX: Replace this email with recipient email
                    $mail_to = "contact@mtnoutlaw.com";
                    
                    # Sender Data
                    $subject = "MTN CONTACT FORM SUBMISSION";
                    $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["cName"])));
                    $email = filter_var(trim($_POST["cEmail"]), FILTER_SANITIZE_EMAIL);
                    $message = trim($_POST["cMessage"]);
                    
                    if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($message)) {
                        # Set a 400 (bad request) response code and exit.
                        http_response_code(400);
                        echo '<h5 class="alert alert-warning">Please complete the form and try again.</h5>';
                        exit;
                    }

                    $ip = $_SERVER['REMOTE_ADDR'];
                    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
                    $responseKeys = json_decode($response,true);

                    if(intval($responseKeys["success"]) !== 1) {
                    echo '<h5 class="alert alert-warning">Please check the the captcha form.</h5>';
                    } else {
                        # Mail Content
                        $content = "Name: $name\n";
                        $content .= "Email: $email\n\n";
                        $content .= "Message:\n$message\n";

                        # email headers.
                        $headers = "From: $name <$email>";

                        # Send the email.
                        $success = mail($mail_to, $subject, $content, $headers);
                        if ($success) {
                            # Set a 200 (okay) response code.
                            http_response_code(200);
                            echo '<h5 class="alert alert-success">Thank You! Your message has been sent.</h5>';
                        } else {
                            # Set a 500 (internal server error) response code.
                            http_response_code(500);
                            echo '<h5 class="alert alert-warning">Oops! Something went wrong, we couldnt send your message.</h5>';
                        }
                    }

                }
                ?><!--end recaptia/email submission php -->
 
            </div> <!-- end s-content__main -->

        </div> <!-- end row -->

    </section> <!-- s-content -->


    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-two md-four mob-full s-footer__sitelinks">
                        
                    <h4>Quick Links</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="/">Home</a></li>
                        <li><a href="huskydivision.php">Husky Division</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="#0">Privacy Policy</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->

                <div class="col-two md-four mob-full s-footer__social">
                        
                    <h4>Social</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="https://www.facebook.com/mtnoutlaw/" target="_blank">Facebook</a></li>
                        <li><a href="https://www.instagram.com/mtnoutlaw/" target="_blank">Instagram</a></li>
                        <li><a href="https://twitter.com/MTNoutlaws" target="_blank">Twitter</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class="col-five md-full end s-footer__subscribe">
                        
                    <h4>Our Newsletter</h4>

                    <p>The Outlaws, direct in your mailbox once a month. No more... maybe less.</p>

                    <form action="https://mtnoutlaw.us16.list-manage.com/subscribe/post?u=dd7bf8abc841427c769de79f5&amp;id=0e7eb4a916" name="cForm" id="cForm" method="post" action="">
                        <input type="hidden" name="u" value="dd7bf8abc841427c769de79f5">
                        <input type="hidden" name="id" value="0e7eb4a916">
                    <fieldset>

                        <div class="form-field">
                            <input name="MERGE0" type="text" id="cEmail" class="full-width" placeholder="Your Email *" value="">
                        </div>

                        <button name="submit" type="submit" class="submit btn btn--primary full-width">Submit</button>
                        
                        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

                        <p>
                            This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.
                        </p>

                    </fieldset>
                </form> <!-- end form -->

                <?php // Check if form was submitted:
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

                    // Build POST request:
                    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
                    $recaptcha_secret = '6LfHgvYUAAAAAIYO7EbVSakAs2-ypyr8f1hbYE-j';
                    $recaptcha_response = $_POST['recaptcha_response'];

                    // Make and decode POST request:
                    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
                    $recaptcha = json_decode($recaptcha);

                    // Take action based on the score returned:
                    if ($recaptcha->score >= 0.5) {
                        // Verified - send email
                    } else {
                        // Not verified - show form error
                    }

                } ?><!--end recaptia/email submission php -->

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© MTN Outlaws 2020</span> 
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/main.js"></script>

</body>

<.php>