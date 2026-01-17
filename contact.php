<?php
session_start();

$currentPage = 'contact';
$title = "Contact Us";
$keywords = "";
$description = "";

include("head.php");
include("header.php");

// Get status from session if exists
$status = isset($_SESSION['form_status']) ? $_SESSION['form_status'] : '';
$message = isset($_SESSION['form_message']) ? $_SESSION['form_message'] : '';

// Clear session variables after reading them
if (isset($_SESSION['form_status'])) {
    unset($_SESSION['form_status']);
    unset($_SESSION['form_message']);
}
?>

<style>
    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #c3e6cb;
        display: <?php echo ($status == 'success') ? 'block' : 'none'; ?>;
    }
    
    .error-message {
        background-color: #f8d7da;
        color: #721c24;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #f5c6cb;
        display: <?php echo ($status == 'error') ? 'block' : 'none'; ?>;
    }
</style>

<!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">Contact</span>
                        <h1 class="title">
                            Contact US
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="index.php">home</a>
                            <a class="current" href="#">Contact US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->


    <!-- rta contact area stsart -->
    <div class="rts-contact-area-page rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pr--60 pr_sm--0 mb_sm--30 pr_md--10 pb_md--25 pb_sm--25">
                    <div class="contact-main-wrapper-left">
                        <span>Get In Touch</span>
                        <h3 class="title-main">
                            We are always ready to help you <br> and answer your questions
                        </h3>
                        <p class="disc">
                            Contact us today to discuss your technical service requirements and receive reliable, professional support across the UAE.
                        </p>
                        <div class="row g-24">
                            <div class="col-lg-6">
                                <div class="quick-contact-page-1">
                                    <div class="icon">
                                        <img src="assets/images/contact/01.svg" alt="contact">
                                    </div>
                                    <h5 class="title">Call Center</h5>
                                    <p>
                                        +971 52 412 8894
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="quick-contact-page-1">
                                    <div class="icon">
                                        <img src="assets/images/contact/02.svg" alt="contact">
                                    </div>
                                    <h5 class="title">Our Office</h5>
                                    <p>
                                        Level M2, Burj Nahar Mall, Al Muteena, Deira,<br>Dubai, United Arab Emirates
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Status Messages -->
                    <div class="success-message"><?php echo htmlspecialchars($message); ?></div>
                    <div class="error-message"><?php echo htmlspecialchars($message); ?></div>
                    
                    <form id="contact-form" action="send-mail.php" method="POST" class="contact-form-area-wrapper">
                        <h4 class="title">Let's Get in Touch</h4>
                        <div class="half-inpur-wrapper">
                            <div class="single">
                                <input type="text" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="single">
                                <input type="text" name="phone" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="single">
                            <input name="email" type="email" placeholder="Email Address..." required>
                        </div>
                        <textarea name="message" placeholder="Type Your Message" required></textarea>
                        <button type="submit" class="rts-btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- rta contact area end -->

    <div class="rts-map-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="width:100%; height:450px;">
  <iframe
    src="https://www.google.com/maps?q=Level%20M2,%20Burj%20Nahar%20Mall,%20Al%20Muteena,%20Deira,%20Dubai,%20United%20Arab%20Emirates&output=embed"
    width="100%"
    height="100%"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
<!-- scripts -->
<!-- scripts -->
<script src="assets/js/plugins/jquery.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/plugins/metismenu.js"></script>
<script src="assets/js/plugins/swiper.js"></script>
<script src="assets/js/plugins/smooth-scroll.js"></script>
<script src="assets/js/vendor/waw.js"></script>
<script src="https://html.themewant.com/golfy/assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/contact.form.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>