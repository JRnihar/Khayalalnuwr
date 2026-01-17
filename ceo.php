 <?php
$currentPage = 'CEO Message';
$title = "CEO Message - Khayalal Nuwr Technical Services";
$keywords = "";
$description = "";
include("head.php");
include("header.php");
?>
<style>
        :root {
            --color-primary: #F84E1D;
            --color-secondary: #1F1F25;
            --color-body: #6B6B6B;
            --color-heading-1: #FFFFFF;
            --color-title: #141416;
            --color-heading-dark: #141416;
            --bg-dark-1: #1E1E20;
            --color-white: #fff;
            --color-border: #DDD8F9;
        }

        /* CEO Message Section - Scoped Styles */
        .ceo-message-wrapper {
            padding: 80px 0;
            /* background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); */
            position: relative;
            overflow: hidden;
        }

        .ceo-message-wrapper::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 800px;
            height: 800px;
            /* background: radial-gradient(circle, rgba(248, 78, 29, 0.05) 0%, transparent 70%); */
            border-radius: 50%;
            pointer-events: none;
        }

        /* Section Header */
        .ceo-section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .ceo-section-subtitle {
            font-size: 1.2rem;
            color: var(--color-primary);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 15px;
        }

        .ceo-section-title {
            font-size: 3rem;
            font-weight: 700;
            color: var(--color-heading-dark);
            position: relative;
            display: inline-block;
        }

        .ceo-section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--color-primary), #ff6b45);
            border-radius: 2px;
        }

        /* CEO Content Card */
        .ceo-content-card {
            background: var(--color-white);
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.12);
            position: relative;
        }

        .ceo-content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(180deg, var(--color-primary), #ff6b45);
            border-radius: 30px 0 0 30px;
        }

        /* Image Container */
        .ceo-img-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            margin-bottom: 30px;
        }

        .ceo-img-container img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
            border-radius: 20px;
        }

        .ceo-quote-icon {
            position: absolute;
            top: 30px;
            right: 30px;
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--color-primary), #ff6b45);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-white);
            font-size: 2rem;
            box-shadow: 0 10px 30px rgba(248, 78, 29, 0.3);
        }

        /* CEO Info Card */
        .ceo-info-box {
            padding: 30px;
            background: linear-gradient(135deg, var(--color-secondary), var(--bg-dark-1));
            border-radius: 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .ceo-info-box::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 200px;
            height: 200px;
            background: var(--color-primary);
            opacity: 0.1;
            border-radius: 50%;
            pointer-events: none;
        }

        .ceo-info-name {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--color-white);
            margin-bottom: 8px;
            position: relative;
        }

        .ceo-info-role {
            font-size: 1.2rem;
            color: var(--color-primary);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
        }

        /* Message Content */
        .ceo-message-title {
            font-size: 2.3rem;
            font-weight: 700;
            color: var(--color-heading-dark);
            margin-bottom: 30px;
            line-height: 1.4;
        }

        .ceo-message-para {
            font-size: 1.3rem;
            line-height: 1.9;
            color: var(--color-body);
            margin-bottom: 25px;
            text-align: justify;
        }

        .ceo-message-para:first-of-type::first-letter {
            font-size: 4rem;
            font-weight: 700;
            color: var(--color-primary);
            float: left;
            line-height: 1;
            margin: 5px 12px 0 0;
        }

        /* Highlighted Quote */
        .ceo-quote-highlight {
            background: linear-gradient(135deg, rgba(248, 78, 29, 0.08), rgba(255, 107, 69, 0.08));
            padding: 30px;
            border-radius: 15px;
            border-left: 5px solid var(--color-primary);
            margin: 35px 0;
        }

        .ceo-quote-highlight .ceo-message-para {
            margin-bottom: 0;
            font-weight: 500;
            font-style: italic;
            color: var(--color-title);
        }

        /* Signature Section */
        .ceo-signature-box {
            margin-top: 45px;
            padding-top: 30px;
            border-top: 2px solid #e9ecef;
        }

        .ceo-signature-name {
            font-size: 2rem;
            font-weight: 700;
            color: var(--color-heading-dark);
            margin-bottom: 5px;
            font-family: 'Brush Script MT', cursive;
        }

        .ceo-signature-title {
            font-size: 1.2rem;
            color: var(--color-body);
            font-weight: 600;
        }

        /* Values Cards */
        .ceo-values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 45px;
        }

        .ceo-value-card {
            padding: 25px 20px;
            background: #f8f9fa;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .ceo-value-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(248, 78, 29, 0.15);
        }

        .ceo-value-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--color-primary), #ff6b45);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: var(--color-white);
            font-size: 1.6rem;
        }

        .ceo-value-label {
            font-size: 1.15rem;
            font-weight: 600;
            color: var(--color-title);
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .ceo-content-card {
                padding: 40px 30px;
            }

            .ceo-section-title {
                font-size: 2.5rem;
            }

            .ceo-message-title {
                font-size: 2rem;
            }

            .ceo-img-container img {
                height: 450px;
            }

            .ceo-values-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 767px) {
            .ceo-message-wrapper {
                padding: 60px 0;
            }

            .ceo-content-card {
                padding: 30px 20px;
            }

            .ceo-section-title {
                font-size: 2rem;
            }

            .ceo-message-title {
                font-size: 1.7rem;
            }

            .ceo-message-para {
                font-size: 1.15rem;
            }

            .ceo-img-container img {
                height: 400px;
            }

            .ceo-values-grid {
                grid-template-columns: 1fr;
            }

            .ceo-quote-icon {
                width: 60px;
                height: 60px;
                font-size: 1.6rem;
            }
        }

        @media (max-width: 575px) {
            .ceo-section-title {
                font-size: 1.6rem;
            }

            .ceo-message-title {
                font-size: 1.5rem;
            }

            .ceo-img-container img {
                height: 350px;
            }

            .ceo-info-name {
                font-size: 1.5rem;
            }
        }
    </style>
<!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">CEO</span>
                        <h1 class="title">
                            CEO’S MESSAGE
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="index.php">home</a>
                            <a class="current" href="#">CEO’S MESSAGE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->
 <!-- CEO Message Section -->
    <section class="ceo-message-wrapper">
        <div class="container">
            <!-- Section Header -->
            <div class="ceo-section-header">
                <div class="ceo-section-subtitle">Leadership</div>
                <h2 class="ceo-section-title">Message from Our CEO</h2>
            </div>

            <!-- CEO Content Card -->
            <div class="ceo-content-card">
                <div class="row g-4 g-lg-5">
                    <!-- Left Column - Image & Info -->
                    <div class="col-lg-5">
                        <!-- CEO Image -->
                        <div class="ceo-img-container">
                            <img src="../Khayalalnuwr/assets/images/banner/founder.jpeg" alt="Mohammad Omar Faroque - CEO">
                            <div class="ceo-quote-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>

                        <!-- CEO Info Box -->
                        <div class="ceo-info-box">
                            <h3 class="ceo-info-name">Mohammad Omar Faroque</h3>
                            <p class="ceo-info-role mb-0">Chief Executive Officer</p>
                        </div>
                    </div>

                    <!-- Right Column - Message Content -->
                    <div class="col-lg-7">
                        <div class="ceo-message-content">
                            <h3 class="ceo-message-title">Welcome to Khayal ALNuwr Technical Service.</h3>

                            <p class="ceo-message-para">
                                Our mission is to deliver dependable technical solutions that help businesses and communities operate safely, efficiently, and without interruption. I am deeply passionate about building services that people can truly rely on—because when systems work flawlessly, lives and businesses move forward with confidence.
                            </p>

                            <div class="ceo-quote-highlight">
                                <p class="ceo-message-para">
                                    "Seeing our clients grow, scale, and succeed motivates everything we do. With honest communication, skilled technical teams, and hands-on leadership, we simplify complex technical challenges and transform them into reliable, long-term solutions."
                                </p>
                            </div>

                            <p class="ceo-message-para">
                                From preventive maintenance to critical technical support, we are committed to quality, safety, and precision in every service we deliver.
                            </p>

                            <p class="ceo-message-para">
                                Our vision is clear: to become a trusted leader in technical services by setting new standards in professionalism, innovation, and reliability. We are not just fixing systems—we are building trust, performance, and lasting value for the future.
                            </p>

                            <!-- Signature -->
                            <div class="ceo-signature-box">
                                <div class="ceo-signature-name">Mohammad Omar Faroque</div>
                                <div class="ceo-signature-title">Chief Executive Officer</div>
                            </div>

                            <!-- Company Values -->
                            <div class="ceo-values-grid">
                                <div class="ceo-value-card">
                                    <div class="ceo-value-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <div class="ceo-value-label">Quality & Safety</div>
                                </div>
                                <div class="ceo-value-card">
                                    <div class="ceo-value-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div class="ceo-value-label">Trust & Reliability</div>
                                </div>
                                <div class="ceo-value-card">
                                    <div class="ceo-value-icon">
                                        <i class="fas fa-lightbulb"></i>
                                    </div>
                                    <div class="ceo-value-label">Innovation</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php include("footer.php"); ?>
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