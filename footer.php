<script src="https://www.google.com/recaptcha/api.js?render=6LfHgvYUAAAAAJHWyCyPdi4YLNNCKJcnr9gegH8n"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('6LfHgvYUAAAAAJHWyCyPdi4YLNNCKJcnr9gegH8n', { action: 'contact' }).then(function (token) {
            var recaptchaResponse = document.getElementById('recaptchaResponse');
            recaptchaResponse.value = token;
        });
    });
</script>

<footer class="s-footer">

    <div class="s-footer__main">
        <div class="row">
            
            <div class="col-two md-four mob-full s-footer__sitelinks">
                    
                <h4>Quick Links</h4>

                <ul class="s-footer__linklist">
                    <li><a href="/">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="./privacy-policy.php">Privacy Policy</a></li>
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

        </div>
    </div> <!-- end s-footer__main -->

    <div class="s-footer__bottom">
        <div class="row">
            <div class="col-full">
                <div class="s-footer__copyright">
                    <span>© MTN Outlaws 2022</span> 
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"></a>
                </div>
            </div>
        </div>
    </div> <!-- end s-footer__bottom -->

</footer> <!-- end s-footer -->