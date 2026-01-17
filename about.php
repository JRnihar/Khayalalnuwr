 <?php
$currentPage = 'about';
$title = "About Us";
$keywords = "";
$description = "";
include("head.php");
include("header.php");
?>
 <style>  
        .header-banner {
            background: #F84E1D;
            color: white;
            padding: 30px;
            border-radius: 0 0 0 100px;
            margin-bottom: 50px;
            box-shadow: 0 10px 30px rgba(220, 20, 60, 0.3);
        }
        
        .header-banner h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
            letter-spacing: 2px;
        }
        
        .header-banner h3 {
            font-size: 2rem;
            font-weight: 600;
            margin: 10px 0 0 0;
        }
        
        .company-title {
            color: #F84E1D;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .company-subtitle {
            color: #F84E1D;
            font-size: 2.2rem;
            font-weight: 600;
            margin-bottom: 30px;
        }
        
        .company-description {
            font-size: 1.5rem;
            line-height: 1.8;
            color: #333;
            text-align: justify;
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .service-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            height: 100%;
            border: 2px solid transparent;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(220, 20, 60, 0.2);
            border-color: #dc143c;
        }
        
        .service-icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            background: #F84E1D;
            color: white;
            box-shadow: 0 8px 20px rgba(220, 20, 60, 0.3);
        }
        
        .service-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #F84E1D;
            margin-top: 15px;
            min-height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        @media (max-width: 768px) {
            .header-banner {
                border-radius: 0 0 0 50px;
                padding: 20px;
            }
            
            .header-banner h2 {
                font-size: 1.8rem;
            }
            
            .header-banner h3 {
                font-size: 1.5rem;
            }
            
            .company-title {
                font-size: 2rem;
            }
            
            .company-subtitle {
                font-size: 1.5rem;
            }
            
            .company-description {
                font-size: 1rem;
            }
            
            .service-card {
                margin-bottom: 20px;
            }
        }
    </style>
    <!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">About</span>
                        <h1 class="title">
                            About Us - Khayal Alnuwr Technical Services | Complete Building Solutions in UAE
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="index.php">home</a>
                            <a class="current" href="#">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->
    <!-- about us area start -->
    <div class="about-us-area-five rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-wrapper-area-five">
                        <div class="about-left-wrapper">
                            <span class="pre">Our Commitment To Community</span>
                            <h2 class="title">Building stronger communities through service</h2>
                            <p class="disc">
                               We offer trusted technical services designed to support efficient operations, safety compliance, and sustainable results for clients across the UAE.
                            </p>
                            <a href="contact.php" class="rts-btn btn-primary"> Get a Quote
                                <img src="assets/images/icons/arrow-up-right.svg" alt="">
                            </a>
                        </div>
                        <div class="right-thumbnail">
                            <img src="assets/images/about/10.png" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end -->
    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-banner text-end">
                        <h2>STRUCTURAL REPAIR SPECIALIST</h2>
                        <h3>WE OFFER</h3>
                    </div>
                </div>
            </div> 
            <div class="row mb-5">
                <div class="col-lg-5 col-md-12 mb-4">
                    <!-- <h1 class="company-title">KHAYAL ALNUWR</h1>
                    <h2 class="company-subtitle">TECHNICAL SERVICES</h2> -->
                    <img src="./assets/images/logo/02.png" alt="Logo" class="mb-4" style="width: 100%; max-width: 350px;">
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="company-description">
                        KHAYAL ALNUWR TECHNICAL SERVICES is a leading company with over many years of expertise serving the UAE. We specialize in structural rehabilitation, Building Cleaning Services, Systems Installation & Maintenance, Electromechanical Equipment Installation, Floor & Wall Tiling Works and many more. Leveraging state-of-the-art technology and extensive professional experience, KHAYAL ALNUWR TECHNICAL SERVICES is dedicated to delivering exceptional value and ensuring the highest outcome for our customers.
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <span>🔧</span>
                        </div>
                        <h3 class="service-title">Plaster Works</h3>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <span>🚰</span>
                        </div>
                        <h3 class="service-title">Plumbing & Sanitary Installation</h3>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <span>🎨</span>
                        </div>
                        <h3 class="service-title">Wallpaper Fixing Works</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <span>❄️</span>
                        </div>
                        <h3 class="service-title">Air-Conditioning, Ventilations & Air Filtration</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <span>🪵</span>
                        </div>
                        <h3 class="service-title">Carpentry & Wood Flooring Works</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <span>🏗️</span>
                        </div>
                        <h3 class="service-title">Floor & Wall Tiling Works</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <span>🧹</span>
                        </div>
                        <h3 class="service-title">Building Cleaning Services</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <span>🔨</span>
                        </div>
                        <h3 class="service-title">Maintenance</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card text-center">
                        <div class="service-icon">
                            <span>⚙️</span>
                        </div>
                        <h3 class="service-title">Systems Installation & Maintenance</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- why choose us area start -->
    <div class="why-choose-us-area rts-section-gap in-about-page" style="margin-top: 50px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12 pr--60 pr_md--0 pr_sm--0">
                    <div class="reveal-item overflow-hidden ">
                       
                        <img src="assets/images/about/11.png" alt="journey-area">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 pt_md--30 pt_sm--50">
                    <div class="how-we-works-wrappers">
                        <div class="title-wrapper-left mb--50">
                            <span class="pre">How We Works</span>
                            <h2 class="title">
                                How To Work With KHAYAL ALNUWR<br>
                                Technical Services
                            </h2>
                        </div>
                        <div class="single-choose-us-one">
                            <div class="icon">
                                <img src="assets/images/service/07.svg" alt="service">
                                <span>1</span>
                            </div>
                            <div class="info-wrapper">
                                <h5 class="title">Consultation & Planning</h5>
                                <p class="disc">We begin with a thorough consultation to understand your vision, budget,
                                    and project goals. Our team works with you to develop a tailored plan</p>
                            </div>
                        </div>
                        <div class="single-choose-us-one">
                            <div class="icon">
                                <img src="assets/images/service/08.svg" alt="service">
                                <span>2</span>
                            </div>
                            <div class="info-wrapper">
                                <h5 class="title">Design & Pre-Construction</h5>
                                <p class="disc">We begin with a thorough consultation to understand your vision, budget,
                                    and project goals. Our team works with you to develop a tailored plan</p>
                            </div>
                        </div>
                        <div class="single-choose-us-one">
                            <div class="icon">
                                <img src="assets/images/service/09.svg" alt="service">
                                <span>3</span>
                            </div>
                            <div class="info-wrapper">
                                <h5 class="title">Construction & Delivery</h5>
                                <p class="disc">We begin with a thorough consultation to understand your vision, budget,
                                    and project goals. Our team works with you to develop a tailored plan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us area end -->
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