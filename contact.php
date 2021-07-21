<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php include "./pagehead.php" ?>
    <title>Contact - MTN Outlaws</title>
</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <div class="s-pageheader">

        <?php include "./header.html" ?>

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
    <?php include "./footer.php" ?>


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