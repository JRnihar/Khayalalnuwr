 <?php
$currentPage = 'Founder Message';
$title = "Founder Message - Khayalal Nuwr Technical Services";
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

        /* Founder Message Section - Scoped Styles */
        .founder-message-wrapper {
            padding: 80px 0;
            /* background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); */
            position: relative;
            overflow: hidden;
        }

        .founder-message-wrapper::before {
            content: '';
            position: absolute;
            top: -30%;
            left: -10%;
            width: 700px;
            height: 700px;
            background: radial-gradient(circle, rgba(248, 78, 29, 0.04) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        /* Section Header */
        .founder-section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .founder-section-subtitle {
            font-size: 1.2rem;
            color: var(--color-primary);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 15px;
        }

        .founder-section-title {
            font-size: 3rem;
            font-weight: 700;
            color: var(--color-heading-dark);
            position: relative;
            display: inline-block;
        }

        .founder-section-title::after {
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

        /* Founder Content Card - Reversed Layout */
        .founder-content-card {
            background: var(--color-white);
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.12);
            position: relative;
        }

        .founder-content-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(180deg, #ff6b45, var(--color-primary));
            border-radius: 0 30px 30px 0;
        }

        /* Image Container */
        .founder-img-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            margin-bottom: 30px;
        }

        .founder-img-container img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
            border-radius: 20px;
        }

        .founder-quote-icon {
            position: absolute;
            top: 30px;
            left: 30px;
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #ff6b45, var(--color-primary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-white);
            font-size: 2rem;
            box-shadow: 0 10px 30px rgba(248, 78, 29, 0.3);
        }

        /* Founder Info Card */
        .founder-info-box {
            padding: 30px;
            background: linear-gradient(135deg, var(--bg-dark-1), var(--color-secondary));
            border-radius: 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .founder-info-box::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -20%;
            width: 200px;
            height: 200px;
            background: var(--color-primary);
            opacity: 0.1;
            border-radius: 50%;
            pointer-events: none;
        }

        .founder-info-name {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--color-white);
            margin-bottom: 8px;
            position: relative;
        }

        .founder-info-role {
            font-size: 1.2rem;
            color: var(--color-primary);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
        }

        /* Message Content */
        .founder-message-title {
            font-size: 2.3rem;
            font-weight: 700;
            color: var(--color-heading-dark);
            margin-bottom: 30px;
            line-height: 1.4;
        }

        .founder-message-para {
            font-size: 1.3rem;
            line-height: 1.9;
            color: var(--color-body);
            margin-bottom: 25px;
            text-align: justify;
        }

        .founder-message-para:first-of-type::first-letter {
            font-size: 4rem;
            font-weight: 700;
            color: var(--color-primary);
            float: left;
            line-height: 1;
            margin: 5px 12px 0 0;
        }

        /* Highlighted Quote */
        .founder-quote-highlight {
            background: linear-gradient(135deg, rgba(255, 107, 69, 0.08), rgba(248, 78, 29, 0.08));
            padding: 30px;
            border-radius: 15px;
            border-right: 5px solid var(--color-primary);
            margin: 35px 0;
        }

        .founder-quote-highlight .founder-message-para {
            margin-bottom: 0;
            font-weight: 500;
            font-style: italic;
            color: var(--color-title);
        }

        /* Signature Section */
        .founder-signature-box {
            margin-top: 45px;
            padding-top: 30px;
            border-top: 2px solid #e9ecef;
        }

        .founder-signature-name {
            font-size: 2rem;
            font-weight: 700;
            color: var(--color-heading-dark);
            margin-bottom: 5px;
            font-family: 'Brush Script MT', cursive;
        }

        .founder-signature-title {
            font-size: 1.2rem;
            color: var(--color-body);
            font-weight: 600;
        }

        /* Vision Cards */
        .founder-vision-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 45px;
        }

        .founder-vision-card {
            padding: 25px 20px;
            background: #f8f9fa;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            border-top: 3px solid transparent;
        }

        .founder-vision-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(248, 78, 29, 0.15);
            border-top-color: var(--color-primary);
        }

        .founder-vision-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #ff6b45, var(--color-primary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: var(--color-white);
            font-size: 1.6rem;
        }

        .founder-vision-label {
            font-size: 1.15rem;
            font-weight: 600;
            color: var(--color-title);
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .founder-content-card {
                padding: 40px 30px;
            }

            .founder-section-title {
                font-size: 2.5rem;
            }

            .founder-message-title {
                font-size: 2rem;
            }

            .founder-img-container img {
                height: 450px;
            }

            .founder-vision-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 767px) {
            .founder-message-wrapper {
                padding: 60px 0;
            }

            .founder-content-card {
                padding: 30px 20px;
            }

            .founder-section-title {
                font-size: 2rem;
            }

            .founder-message-title {
                font-size: 1.7rem;
            }

            .founder-message-para {
                font-size: 1.15rem;
            }

            .founder-img-container img {
                height: 400px;
            }

            .founder-vision-grid {
                grid-template-columns: 1fr;
            }

            .founder-quote-icon {
                width: 60px;
                height: 60px;
                font-size: 1.6rem;
            }
        }

        @media (max-width: 575px) {
            .founder-section-title {
                font-size: 1.6rem;
            }

            .founder-message-title {
                font-size: 1.5rem;
            }

            .founder-img-container img {
                height: 350px;
            }

            .founder-info-name {
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
                        <span class="water-text">Founder</span>
                        <h1 class="title">
                            Founder's & Investor Message
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="index.php">home</a>
                            <a class="current" href="#">Founder's & Investor Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->
    <!-- Founder Message Section Start -->
       <!-- Founder Message Section -->
    <section class="founder-message-wrapper">
        <div class="container">
            <!-- Section Header -->
            <div class="founder-section-header">
                <div class="founder-section-subtitle">Visionary Leadership</div>
                <h2 class="founder-section-title">Message from Our Founder & Investor</h2>
            </div>

            <!-- Founder Content Card -->
            <div class="founder-content-card">
                <div class="row g-4 g-lg-5">
                    <!-- Left Column - Message Content (Reversed Order) -->
                    <div class="col-lg-7 order-2 order-lg-1">
                        <div class="founder-message-content">
                            <h3 class="founder-message-title">Building Trust Through Excellence</h3>

                            <p class="founder-message-para">
                                As the founder & investor of Khayal Alnuwr Technical Services, I started this company with a simple belief: technical service should be reliable, efficient, and built on trust. Every system we maintain, every challenge we solve, reflects our commitment to excellence and our promise to our clients.
                            </p>

                            <p class="founder-message-para">
                                I am inspired daily by the impact our work has—helping businesses run smoothly, protecting valuable assets, and creating environments where people can focus on growth rather than worry. With a dedicated team of skilled professionals and a focus on innovation, we deliver solutions that go beyond quick fixes.
                            </p>

                            <div class="founder-quote-highlight">
                                <p class="founder-message-para">
                                    "At Khayal Alnuwr Technical Services, we are not just a technical support company—we are your partner in operational success."
                                </p>
                            </div>

                            <p class="founder-message-para">
                                Our vision is to set new standards in technical services globally, ensuring that every client experiences safety, reliability, and peace of mind.
                            </p>

                            <!-- Signature -->
                            <div class="founder-signature-box">
                                <div class="founder-signature-name">Md Robiul Islam</div>
                                <div class="founder-signature-title">Founder & Investor</div>
                            </div>

                            <!-- Company Vision Values -->
                            <div class="founder-vision-grid">
                                <div class="founder-vision-card">
                                    <div class="founder-vision-icon">
                                        <i class="fas fa-globe"></i>
                                    </div>
                                    <div class="founder-vision-label">Global Standards</div>
                                </div>
                                <div class="founder-vision-card">
                                    <div class="founder-vision-icon">
                                        <i class="fas fa-rocket"></i>
                                    </div>
                                    <div class="founder-vision-label">Operational Success</div>
                                </div>
                                <div class="founder-vision-card">
                                    <div class="founder-vision-icon">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="founder-vision-label">Peace of Mind</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Image & Info (Reversed Order) -->
                    <div class="col-lg-5 order-1 order-lg-2">
                        <!-- Founder Image -->
                        <div class="founder-img-container">
                            <img src="./assets/images/banner/ceo.jpeg" alt="Md Robiul Islam - Founder">
                            <div class="founder-quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                        </div>

                        <!-- Founder Info Box -->
                        <div class="founder-info-box">
                            <h3 class="founder-info-name">Md Robiul Islam</h3>
                            <p class="founder-info-role mb-0">Founder & Investor</p>
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