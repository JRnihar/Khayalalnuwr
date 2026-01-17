 <?php
$currentPage = 'services';
$title = "Our Services";
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--color-body);
            line-height: 1.6;
            background: #f8f9fa;
        }
        /* Services Section */
        .services-section {
            padding: 80px 0 100px;
            margin-top: -60px;
            position: relative;
            z-index: 10;
        }
        .section-title {
            font-size: 3rem;
            font-weight: 700;
            color: var(--color-heading-dark);
            text-align: center;
            margin-bottom: 0.5rem;
            position: relative;
        }
        .section-subtitle {
            text-align: center;
            color: var(--color-body);
            font-size: 2.2rem;
            margin-bottom: 60px;
        }
        .section-title span {
            color: var(--color-primary);
        }
        /* Service Cards - Unique Design */
        .service-card {
            background: var(--color-white);
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid transparent;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 50px rgba(248, 78, 29, 0.25);
            border-color: var(--color-primary);
        }
        .card-image-wrapper {
            position: relative;
            height: 250px;
            overflow: hidden;
            background: linear-gradient(135deg, var(--color-primary) 0%, #ff6b45 100%);
        }
        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
            opacity: 0.9;
        }
        .service-card:hover .card-image {
            transform: scale(1.15);
            opacity: 1;
        }
        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(31, 31, 37, 0.3), rgba(248, 78, 29, 0.6));
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-icon {
            width: 90px;
            height: 90px;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: var(--color-white);
            border: 3px solid rgba(255, 255, 255, 0.5);
            transition: all 0.4s ease;
        }
        .service-card:hover .card-icon {
            transform: rotateY(360deg) scale(1.1);
            background: rgba(255, 255, 255, 0.35);
        }
        .card-body {
            padding: 35px 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .service-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--color-title);
            margin-bottom: 10px;
            line-height: 1.3;
        }
        .service-subtitle {
            font-size: 1.9rem;
            color: var(--color-primary);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .service-description {
            color: var(--color-body);
            font-size: 1.5rem;
            line-height: 1.7;
            margin-bottom: 25px;
            flex-grow: 1;
        }
        .read-more-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 30px;
            background: var(--color-primary);
            color: var(--color-white);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            align-self: flex-start;
            font-size: 1.5rem;
            position: relative;
            overflow: hidden;
        }

        .read-more-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--color-secondary);
            transition: left 0.4s ease;
            z-index: 0;
        }

        .read-more-btn:hover::before {
            left: 0;
        }

        .read-more-btn span,
        .read-more-btn i {
            position: relative;
            z-index: 1;
        }

        .read-more-btn:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(248, 78, 29, 0.4);
            color: var(--color-white);
        }

        .read-more-btn i {
            transition: transform 0.3s ease;
        }

        .read-more-btn:hover i {
            transform: translateX(5px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .company-name {
                font-size: 2.2rem;
            }

            .tagline {
                font-size: 1.3rem;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .header-section {
                padding: 70px 0 90px;
            }

            .card-image-wrapper {
                height: 220px;
            }
        }

        @media (max-width: 576px) {
            .company-name {
                font-size: 1.8rem;
                letter-spacing: 1px;
            }

            .tagline {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .card-body {
                padding: 25px 20px;
            }
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .service-card {
            animation: fadeInUp 0.8s ease forwards;
            opacity: 0;
        }

        .service-card:nth-child(1) { animation-delay: 0.1s; }
        .service-card:nth-child(2) { animation-delay: 0.2s; }
        .service-card:nth-child(3) { animation-delay: 0.3s; }
        .service-card:nth-child(4) { animation-delay: 0.4s; }
        .service-card:nth-child(5) { animation-delay: 0.5s; }
        .service-card:nth-child(6) { animation-delay: 0.6s; }
        .service-card:nth-child(7) { animation-delay: 0.7s; }
        .service-card:nth-child(8) { animation-delay: 0.8s; }
        .service-card:nth-child(9) { animation-delay: 0.9s; }
    </style>

<!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">Services</span>
                        <h1 class="title">
                            Services We Offer
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="index.php">home</a>
                            <a class="current" href="#">Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->

    


<section class="services-section">
        <div class="container">
            <div class="mb-5">
                <h2 class="section-title">Our <span>Services</span></h2>
                <p class="section-subtitle">Professional Solutions for All Your Technical Needs</p>
            </div>
            
            <div class="row g-4">
                <!-- Service 1: Plaster Works -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=600&h=400&fit=crop" alt="Plaster Works" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="service-subtitle">Expert Craftsmanship</div>
                            <h3 class="service-title">Plaster Works</h3>
                            <p class="service-description">
                                Professional plastering services for interior and exterior walls. We ensure smooth, durable finishes that enhance the aesthetic appeal and longevity of your property.
                            </p>
                            <a href="plaster.php" class="read-more-btn">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Plumbing & Sanitary Installation -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1607472586893-edb57bdc0e39?w=600&h=400&fit=crop" alt="Plumbing Services" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <i class="fas fa-water"></i>   
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="service-subtitle">Quality Installation</div>
                            <h3 class="service-title">Plumbing & Sanitary Installation</h3>
                            <p class="service-description">
                                Complete plumbing solutions including installation, repair, and maintenance of water supply systems, drainage, and sanitary fixtures with highest quality standards.
                            </p>
                            <a href="plumbing.php" class="read-more-btn">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Wallpaper Fixing Works -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1562259949-e8e7689d7828?w=600&h=400&fit=crop" alt="Wallpaper Installation" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <i class="fas fa-paint-roller"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="service-subtitle">Premium Finishing</div>
                            <h3 class="service-title">Wallpaper Fixing Works</h3>
                            <p class="service-description">
                                Expert wallpaper installation services with precision and care. We transform your spaces with premium wallpaper solutions that match your style and preferences.
                            </p>
                            <a href="wallpaper.php" class="read-more-btn">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Air-Conditioning, Ventilations & Air Filtration -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?w=600&h=400&fit=crop" alt="HVAC Services" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <i class="fas fa-wind"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="service-subtitle">Climate Control</div>
                            <h3 class="service-title">Air-Conditioning, Ventilations & Air Filtration</h3>
                            <p class="service-description">
                                Comprehensive HVAC services including installation, maintenance, and repair of air conditioning systems, ventilation, and air filtration for optimal indoor air quality.
                            </p>
                            <a href="airconditioning.php" class="read-more-btn">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 5: Carpentry & Wood Flooring Works -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=600&h=400&fit=crop" alt="Carpentry Works" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <i class="fas fa-hammer"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="service-subtitle">Custom Solutions</div>
                            <h3 class="service-title">Carpentry & Wood Flooring Works</h3>
                            <p class="service-description">
                                Custom carpentry and wood flooring solutions with exceptional craftsmanship. From installation to restoration, we deliver beautiful and durable results.
                            </p>
                            <a href="carpentry.php" class="read-more-btn">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 6: Floor & Wall Tiling Works -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1539700811488-d1f24ae7b563?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Rmxvb3IlMjAlMjYlMjBXYWxsJTIwVGlsaW5nJTIwV29ya3N8ZW58MHx8MHx8fDA%3D" alt="Tiling Works" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <i class="fas fa-th"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="service-subtitle">Precision Work</div>
                            <h3 class="service-title">Floor & Wall Tiling Works</h3>
                            <p class="service-description">
                                Professional tiling services for floors and walls. We provide precise installation of various tile types ensuring perfect alignment and long-lasting beauty.
                            </p>
                            <a href="flooring.php" class="read-more-btn">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 7: Building Cleaning Services -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=600&h=400&fit=crop" alt="Cleaning Services" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <i class="fas fa-broom"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="service-subtitle">Eco-Friendly</div>
                            <h3 class="service-title">Building Cleaning Services</h3>
                            <p class="service-description">
                                Comprehensive cleaning solutions for residential and commercial buildings. We maintain hygiene and cleanliness standards with eco-friendly practices.
                            </p>
                            <a href="cleaning.php" class="read-more-btn">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 8: Maintenance -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1590846406792-0adc7f938f1d?w=600&h=400&fit=crop" alt="Maintenance Services" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="service-subtitle">Preventive Care</div>
                            <h3 class="service-title">Maintenance</h3>
                            <p class="service-description">
                                Regular maintenance services to keep your property in optimal condition. Preventive and corrective maintenance for all building systems and structures.
                            </p>
                            <a href="maintenance.php" class="read-more-btn">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 9: Systems Installation & Maintenance -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=600&h=400&fit=crop" alt="Systems Installation" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="service-subtitle">Advanced Technology</div>
                            <h3 class="service-title">Systems Installation & Maintenance</h3>
                            <p class="service-description">
                                Expert installation and maintenance of various building systems including electrical, mechanical, and technological solutions for modern facilities.
                            </p>
                            <a href="systems.php" class="read-more-btn">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
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