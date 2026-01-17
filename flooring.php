 <?php
$currentPage = 'flooring';

$title = "Floor & Wall Tiling Works";

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

        /* Content Section */
        .content-section {
            max-width: 1400px;
            margin: 50px auto 80px;
            padding: 0 30px;
            position: relative;
            z-index: 10;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
        }

        /* Main Content */
        .main-content {
            background: var(--color-white);
            padding: 60px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .section-tag {
            display: inline-block;
            background: linear-gradient(135deg, var(--color-primary), #ff6b45);
            color: var(--color-white);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 1.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 25px;
        }

        .content-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--color-heading-dark);
            margin-bottom: 25px;
            line-height: 1.3;
        }

        .content-description {
            font-size: 1.5rem;
            color: var(--color-body);
            line-height: 1.9;
            margin-bottom: 40px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-bottom: 50px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
            border-left: 4px solid var(--color-primary);
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: translateX(10px);
            box-shadow: 0 5px 20px rgba(248, 78, 29, 0.1);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--color-primary), #ff6b45);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-white);
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .feature-text h4 {
            color: var(--color-title);
            font-size: 1.8rem;
            margin-bottom: 5px;
        }

        .feature-text p {
            color: var(--color-body);
            font-size: 1.3rem;
            line-height: 1.6;
        }

        /* Image Gallery */
        .image-gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 50px;
        }

        .gallery-item {
            position: relative;
            height: 300px;
            border-radius: 15px;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.15);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent, rgba(0,0,0,0.6));
            display: flex;
            align-items: flex-end;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay span {
            color: var(--color-white);
            font-weight: 600;
        }

        /* Process Section */
        .process-section {
            margin-top: 50px;
        }

        .process-title {
            font-size: 3rem;
            font-weight: 700;
            color: var(--color-heading-dark);
            margin-bottom: 30px;
        }

        .process-steps {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .process-step {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--color-primary), #ff6b45);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-white);
            font-size: 1.5rem;
            font-weight: 700;
            flex-shrink: 0;
        }

        .step-content h4 {
            color: var(--color-title);
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .step-content p {
            color: var(--color-body);
            font-size: 1.3rem;
            line-height: 1.7;
        }

        /* Sidebar */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .sidebar-card {
            background: var(--color-white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .sidebar-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--color-heading-dark);
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-title i {
            color: var(--color-primary);
        }

        /* Contact Card */
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: linear-gradient(135deg, var(--color-primary), #ff6b45);
            color: var(--color-white);
            transform: translateX(5px);
        }

        .contact-icon {
            width: 45px;
            height: 45px;
            background: var(--color-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-white);
            flex-shrink: 0;
        }

        .contact-item:hover .contact-icon {
            background: var(--color-white);
            color: var(--color-primary);
        }

        .contact-text h5 {
            font-size: 1.5rem;
            color: var(--color-body);
            margin-bottom: 3px;
        }

        .contact-item:hover .contact-text h5 {
            color: rgba(255, 255, 255, 0.8);
        }

        .contact-text p {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--color-title);
        }

        .contact-item:hover .contact-text p {
            color: var(--color-white);
        }

        /* CTA Card */
        .cta-card {
            background: linear-gradient(135deg, var(--color-secondary), var(--bg-dark-1));
            color: var(--color-white);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 200px;
            height: 200px;
            background: var(--color-primary);
            opacity: 0.1;
            border-radius: 50%;
        }

        .cta-card h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            position: relative;
        }

        .cta-card p {
            margin-bottom: 25px;
            color: rgba(255, 255, 255, 0.8);
            position: relative;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 35px;
            background: var(--color-primary);
            color: var(--color-white);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
        }

        .cta-button:hover {
            background: var(--color-white);
            color: var(--color-primary);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(248, 78, 29, 0.3);
        }

        /* Services List */
        .services-list {
            list-style: none;
        }

        .services-list li {
            padding: 15px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .services-list li:last-child {
            border-bottom: none;
        }

        .services-list a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: var(--color-title);
            text-decoration: none;
            font-weight: 500;
            font-size: 1.3rem;
            transition: all 0.3s ease;
        }

        .services-list a:hover {
            color: var(--color-primary);
            transform: translateX(10px);
        }

        .services-list i {
            color: var(--color-primary);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .content-grid {
                grid-template-columns: 1fr;
            }

            .sidebar {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .main-content {
                padding: 40px 30px;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }

            .image-gallery {
                grid-template-columns: 1fr;
            }

            .sidebar {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .main-content {
                padding: 30px 20px;
            }

            .content-title {
                font-size: 1.8rem;
            }
        }
    </style>
<!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">flooring</span>
                        <h1 class="title">
                            Floor & Wall Tiling Works
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="index.php">home</a>
                            <a class="current" href="#">Floor & Wall Tiling Works</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- content section start -->
     <section class="content-section mt-5">
        <div class="content-grid">
            <!-- Main Content -->
            <div class="main-content">
                <span class="section-tag">Premium Service</span>
                <h2 class="content-title">Professional Floor & Wall Tiling Services</h2>
                <p class="content-description">
                    At Khayal Alnuwr Technical Services, we specialize in professional floor and wall tiling installation across the UAE. Our expert tiling team delivers precision workmanship for residential and commercial projects, working with ceramic, porcelain, marble, granite, and designer tiles. From kitchens and bathrooms to large commercial spaces, we ensure perfect alignment, seamless grout lines, and stunning finishes that stand the test of time.
                </p>

                <!-- Features Grid -->
                <div class="feature-grid">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-th"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Precision Installation</h4>
                            <p>Expert tile laying with perfect alignment, level surfaces, and flawless pattern execution.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-gem"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Wide Tile Selection</h4>
                            <p>Work with all tile types including ceramic, porcelain, marble, granite, and mosaic designs.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-water"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Waterproofing Expertise</h4>
                            <p>Professional waterproofing for wet areas ensuring moisture protection and longevity.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Premium Finish</h4>
                            <p>Meticulous grouting, sealing, and finishing for a polished, professional appearance.</p>
                        </div>
                    </div>
                </div>

                <!-- Image Gallery -->
                <div class="image-gallery">
                    <div class="gallery-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhqmA6acvtHhEVJNgX-tzmYxN97UkMq9MbCw&s" alt="Floor Tiling 1">
                        <div class="gallery-overlay">
                            <span>Modern Floor Tiles</span>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1604709177225-055f99402ea3?w=800&h=600&fit=crop" alt="Wall Tiling 2">
                        <div class="gallery-overlay">
                            <span>Bathroom Wall Tiles</span>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&h=600&fit=crop" alt="Marble Tiling 3">
                        <div class="gallery-overlay">
                            <span>Marble Installation</span>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?w=800&h=600&fit=crop" alt="Kitchen Tiling 4">
                        <div class="gallery-overlay">
                            <span>Kitchen Backsplash</span>
                        </div>
                    </div>
                </div>

                <!-- Process Section -->
                <div class="process-section">
                    <h3 class="process-title">Our Tiling Process</h3>
                    <div class="process-steps">
                        <div class="process-step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Site Inspection & Planning</h4>
                                <p>Detailed assessment of surfaces, measurements, and layout planning. We help you select the perfect tiles and patterns for your space.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Surface Preparation</h4>
                                <p>Thorough cleaning, leveling, and waterproofing of surfaces. We ensure a solid foundation for long-lasting tile installation.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Tile Installation</h4>
                                <p>Precise tile laying with proper spacing, alignment, and adhesive application. Our experts ensure every tile is perfectly positioned.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h4>Grouting & Finishing</h4>
                                <p>Professional grouting, sealing, and cleaning. Final inspection ensures flawless results and your complete satisfaction.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="sidebar">
                <!-- Contact Card -->
                <div class="sidebar-card">
                    <h3 class="sidebar-title">
                        <i class="fas fa-phone-alt"></i>
                        Contact Us
                    </h3>
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h5>Phone Number</h5>
                                <p>+971 52 412 8894</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h5>Email Address</h5>
                                <p>info@khayalalnuwr.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h5>Location</h5>
                                <p>Level M2, Burj Nahar Mall, Al Muteena, Deira, Dubai, United Arab Emirates</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Card -->
                <div class="sidebar-card cta-card">
                    <h3>Need a Quote?</h3>
                    <p>Get a free consultation and quote for your tiling project today.</p>
                    <a href="contact.php" class="cta-button">
                        <span>Get Free Quote</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Services List -->
                <div class="sidebar-card">
                    <h3 class="sidebar-title">
                        <i class="fas fa-list"></i>
                        All Services
                    </h3>
                    <ul class="services-list">
                        <li><a href="plaster.php">Plaster Works <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="plumbing.php">Plumbing & Sanitary <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="wallpaper.php">Wallpaper Fixing <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="airconditioning.php">Air-Conditioning<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="carpentry.php">Carpentry Works <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="flooring.php">Floor & Wall Tiling Works<i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </section>





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