<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Mabecarestore Construction | Building Homes One Dream at a Time</title>
  <!-- Mobile Specific Metas
================================================== -->
  <meta name="description" content="Mabecarestore Construction - Premier construction company in Bulawayo, Zimbabwe. Specializing in residential and commercial construction, bricklaying, paving, and DuraHall construction. Building homes one dream at a time.">
  <meta name="keywords" content="construction services bulawayo, building zimbabwe, bricklaying, paving, DuraHall construction, residential construction, commercial construction, construction zimbabwe, Mabecarestore Construction">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Mabecarestore Construction">
  <meta property="og:title" content="Mabecarestore Construction | Building Homes One Dream at a Time">
  <meta property="og:description" content="Premier construction company in Bulawayo, Zimbabwe. We don't just build structures — we build trust, safety, and lasting value.">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">
  <meta property="og:location" content="-20.1325066,28.6139126">
  <!-- Favicon
================================================== -->
  <link href="images/favicon_circle.ico" rel="icon" type="image/x-icon">
  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="body-inner">
    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">2/46 Khongo Block, Mpopoma, Bulawayo</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="#">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="#">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="#">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
    <!-- Header start -->
    <header id="header" class="header-one">
      <div class="bg-white">
        <div class="container">
          <div class="logo-area">
              <div class="row align-items-center">
                <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                    <a class="d-block" href="index.php">
                      <img src="images/logo.png?v=1" alt="Mabecarestore" style="vertical-align: middle; height: 40px;">
                      <span style="color: #000; vertical-align: middle; font-size: 15px; line-height: 40px; display: inline-block;">
                        <span style="color: #000;"> Mabecarestore </span><span style="color: #FFB600;"> Construction</span>
                      </span>
                    </a>
                </div><!-- logo end -->
      
                <div class="col-lg-9 header-right">
                    <ul class="top-info-box">
                      <li>
                        <div class="info-box">
                          <div class="info-box-content">
                              <p class="info-box-title">Call Us</p>
                              <p class="info-box-subtitle">+263 782 612 644</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="info-box">
                          <div class="info-box-content">
                              <p class="info-box-title">Email Us</p>
                              <p class="info-box-subtitle">moyobhekinkosi@yahoo.com</p>
                          </div>
                        </div>
                      </li>
                      <li class="header-get-a-quote">
                        <a class="btn btn-primary" href="contact.php">Get A Quote</a>
                      </li>
                    </ul><!-- Ul end -->
                </div><!-- header right end -->
              </div><!-- logo area end -->
      
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div>
      <div class="site-navigation">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav mr-auto">
                            <?php
                            $pages = array(
                                'index.php' => 'Home',
                                'about.php' => 'About US',
                                'services.php' => 'Services', 
                                'projects.php' => 'Projects',
                                'contact.php' => 'Contact'
                            );
                            
                            $current_page = basename($_SERVER['PHP_SELF']);
                            
                            foreach($pages as $url => $title) {
                                $active = ($url == $current_page) ? 'active' : '';
                                echo "<li class='nav-item $active'>";
                                echo "<a class='nav-link' href='$url'>$title</a>";
                                echo "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                  </nav>
              </div>
              <!--/ Col end -->
            </div>
            <!--/ Row end -->
            <div class="nav-search">
              <span id="search"><i class="fa fa-search"></i></span>
            </div><!-- Search end -->
            <div class="search-block" style="display: none;">
              <label for="search-field" class="w-100 mb-0">
                <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
              </label>
              <span class="search-close">&times;</span>
            </div><!-- Site search end -->
        </div>
        <!--/ Container end -->
      </div>
      <!--/ Navigation end -->
    </header>
    <!--/ Header end -->
    <div class="banner-carousel banner-carousel-1 mb-0">
      <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg1.png?v=1)">
        <div class="slider-content">
            <div class="container h-100">
              <div class="row align-items-center h-100">
                  <div class="col-md-12 text-center">
                    <h2 class="slide-title" data-animation-in="slideInLeft">Building Dreams</h2>
                    <h3 class="slide-sub-title" data-animation-in="slideInRight">One Home at a Time</h3>
                    <p data-animation-in="slideInLeft" data-duration-in="1.2">
                        <a href="services.php" class="slider btn btn-primary">Our Services</a>
                        <a href="contact.php" class="slider btn btn-primary border">Contact Now</a>
                    </p>
                  </div>
              </div>
            </div>
        </div>
      </div>
      <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg2.png?v=1)">
        <div class="slider-content text-left">
            <div class="container h-100">
              <div class="row align-items-center h-100">
                  <div class="col-md-12">
                    <h2 class="slide-title-box" data-animation-in="slideInDown">Trust & Safety</h2>
                    <h3 class="slide-title" data-animation-in="fadeIn">Quality Solutions</h3>
                    <h3 class="slide-sub-title" data-animation-in="slideInLeft">For Your Home</h3>
                    <p data-animation-in="slideInRight">
                        <a href="services.php" class="slider btn btn-primary border">Our Services</a>
                    </p>
                  </div>
              </div>
            </div>
        </div>
      </div>
      <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg3.jpg?v=1)">
        <div class="slider-content text-right">
            <div class="container h-100">
              <div class="row align-items-center h-100">
                  <div class="col-md-12">
                    <h2 class="slide-title" data-animation-in="slideInDown">Expert Construction Team</h2>
                    <h3 class="slide-sub-title" data-animation-in="fadeIn">Building Your Future</h3>
                    <p class="slider-description lead" data-animation-in="slideInRight">We don't just build structures — we build trust, safety, and lasting value.</p>
                    <div data-animation-in="slideInLeft">
                        <a href="contact.php" class="slider btn btn-primary" aria-label="contact-with-us">Get Free Quote</a>
                        <a href="about.php" class="slider btn btn-primary border" aria-label="learn-more-about-us">Learn more</a>
                    </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <section class="call-to-action-box no-padding">
      <div class="container">
        <div class="action-style-box">
            <div class="row align-items-center">
              <div class="col-md-8 text-center text-md-left">
                  <div class="call-to-action-text">
                    <h3 class="action-title">Building Your Dreams Into Reality</h3>
                  </div>
              </div><!-- Col end -->
              <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                  <div class="call-to-action-btn">
                    <a class="btn btn-dark" href="contact.php">Request Quote</a>
                  </div>
              </div><!-- col end -->
            </div><!-- row end -->
        </div><!-- Action style box -->
      </div><!-- Container end -->
    </section><!-- Action end -->
    <section id="ts-features" class="ts-features">
      <div class="container">
        <div class="row">
            <div class="col-lg-6">
              <div class="ts-intro">
                  <h2 class="into-title">About Us</h2>
                  <h3 class="into-sub-title">Construction Excellence in Zimbabwe</h3>
                  <p class="text-justify">Mabecarestore Construction Private Limited is a registered Zimbabwean construction company 
                    specializing in the design, construction, and renovation of civil and commercial buildings. With a proven track 
                    record of delivering exceptional projects, we are committed to quality, durability, and client satisfaction. Our 
                    team of qualified construction professionals combines technical expertise, modern construction techniques, and a 
                    client-centric approach to bring your vision to life — safely, on time, and within budget.</p>
              </div><!-- Intro box end -->
              <div class="gap-20"></div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="ts-service-box">
                        <span class="ts-service-icon">
                          <i class="fas fa-trophy"></i>
                        </span>
                        <div class="ts-service-box-content">
                          <h3 class="service-box-title">Quality Assurance</h3>
                        </div>
                    </div><!-- Service 1 end -->
                  </div><!-- col end -->
                  <div class="col-md-6">
                    <div class="ts-service-box">
                        <span class="ts-service-icon">
                          <i class="fas fa-sliders-h"></i>
                        </span>
                        <div class="ts-service-box-content">
                          <h3 class="service-box-title">Tailored Solutions</h3>
                        </div>
                    </div><!-- Service 2 end -->
                  </div><!-- col end -->
              </div><!-- Content row 1 end -->
              <div class="row">
                  <div class="col-md-6">
                    <div class="ts-service-box">
                        <span class="ts-service-icon">
                          <i class="fas fa-thumbs-up"></i>
                        </span>
                        <div class="ts-service-box-content">
                          <h3 class="service-box-title">Quality Assurance</h3>
                        </div>
                    </div><!-- Service 1 end -->
                  </div><!-- col end -->

                  <div class="col-md-6">
                    <div class="ts-service-box">
                        <span class="ts-service-icon">
                          <i class="fas fa-users"></i>
                        </span>
                        <div class="ts-service-box-content">
                          <h3 class="service-box-title">Specialist Engineers</h3>
                        </div>
                    </div><!-- Service 2 end -->
                  </div><!-- col end -->
              </div><!-- Content row 1 end -->
            </div><!-- Col end -->

            <div class="col-lg-6 mt-4 mt-lg-0">
              <h3 class="into-sub-title">Our Values</h3>
              <p></p>

              <div class="accordion accordion-group" id="our-values-accordion">
                  <div class="card">
                    <div class="card-header p-0 bg-transparent" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Customer Centricity
                          </button>
                        </h2>
                    </div>
                  
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                        <div class="card-body">
                          We put our customers at the heart of everything we do. By understanding their needs and challenges, we deliver tailored solutions that exceed expectations and build lasting partnerships.
                        </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header p-0 bg-transparent" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Innovation
                          </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                        <div class="card-body">
                          We constantly seek new and better ways to serve our clients. Through creative thinking and cutting-edge technology, we develop innovative solutions that drive progress in engineering.
                        </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header p-0 bg-transparent" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Quality
                          </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                        <div class="card-body">
                          Excellence is our standard. We maintain the highest quality in our work, from the smallest detail to the largest project, ensuring lasting value for our clients.
                        </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header p-0 bg-transparent" id="headingFour">
                        <h2 class="mb-0">
                          <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Integrity
                          </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#our-values-accordion">
                        <div class="card-body">
                          We conduct our business with the highest ethical standards. Honesty, transparency, and accountability are the foundations of our relationships with clients and partners.
                        </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header p-0 bg-transparent" id="headingFive">
                        <h2 class="mb-0">
                          <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Reliability
                          </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#our-values-accordion">
                        <div class="card-body">
                          Our clients can count on us. We deliver on our promises, meet deadlines, and maintain consistent quality in all our services and products.
                        </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header p-0 bg-transparent" id="headingSix">
                        <h2 class="mb-0">
                          <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              Flexibility
                          </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#our-values-accordion">
                        <div class="card-body">
                          We adapt to changing needs and circumstances while maintaining our high standards. Our agile approach allows us to provide customized solutions for every client.
                        </div>
                    </div>
                  </div>
              </div>
              <!--/ Accordion end -->

            </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </section><!-- Feature are end -->

    <section id="facts" class="facts-area dark-bg">
      <div class="container">
        <div class="facts-wrapper">
            <div class="row">
              <div class="col-md-3 col-sm-6 ts-facts">
                  <div class="ts-facts-img">
                    <i class="fas fa-project-diagram" style="color: #FFB600; font-size: 48px;"></i>
                  </div>
                  <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="150">0</span></h2>
                    <h3 class="ts-facts-title">Total Projects</h3>
                  </div>
              </div><!-- Col end -->

              <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                  <div class="ts-facts-img">
                    <i class="fas fa-users" style="color: #FFB600; font-size: 48px;"></i>
                  </div>
                  <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="20">0</span></h2>
                    <h3 class="ts-facts-title">Staff Members</h3>
                  </div>
              </div><!-- Col end -->

              <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                  <div class="ts-facts-img">
                    <i class="fas fa-clock" style="color: #FFB600; font-size: 48px;"></i>
                  </div>
                  <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="2000">0</span></h2>
                    <h3 class="ts-facts-title">Hours of Work</h3>
                  </div>
              </div><!-- Col end -->

              <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                  <div class="ts-facts-img">
                    <i class="fas fa-award" style="color: #FFB600; font-size: 48px;"></i>
                  </div>
                  <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="<?php echo date('Y') - 2019; ?>">0</span></h2>
                    <h3 class="ts-facts-title">Years Experience</h3>
                  </div>
              </div><!-- Col end -->

            </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
      </div>
      <!--/ Container end -->
    </section><!-- Facts end -->

    <section id="ts-service-area" class="ts-service-area pb-0">
      <div class="container">
        <div class="row text-center">
            <div class="col-12">
              <h2 class="section-title">Our Services</h2>
              <h3 class="section-sub-title">What We Do</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-6">
              <div class="ts-service-box d-flex">
                  <div class="ts-service-box-img">
                    <i class="fas fa-building fa-3x" style="color: #ffb600;"></i>
                  </div>
                  <div class="ts-service-box-info">
                    <h3 class="service-box-title"><a href="#">General Construction</a></h3>
                    <p>Residential and commercial construction, site preparation, foundation laying, and expert roof installation and finishing</p>
                  </div>
              </div><!-- Service 1 end -->

              <div class="ts-service-box d-flex">
                  <div class="ts-service-box-img">
                    <i class="fas fa-layer-group fa-3x" style="color: #00a6eb;"></i>
                  </div>
                  <div class="ts-service-box-info">
                    <h3 class="service-box-title"><a href="#">Bricklaying & Masonry</a></h3>
                    <p>Accurate, durable, and expertly executed brickwork for internal and external wall structures</p>
                  </div>
              </div><!-- Service 2 end -->

              <div class="ts-service-box d-flex">
                  <div class="ts-service-box-img">
                    <i class="fas fa-road fa-3x" style="color: #2d3e50;"></i>
                  </div>
                  <div class="ts-service-box-info">
                    <h3 class="service-box-title"><a href="#">Paving & Outdoor Works</a></h3>
                    <p>Professional interlocking paving for driveways, patios, and walkways with lasting durability</p>
                  </div>
              </div><!-- Service 3 end -->

            </div><!-- Col end -->

            <div class="col-lg-6">
              <div class="ts-service-box d-flex">
                  <div class="ts-service-box-img">
                    <i class="fas fa-paint-roller fa-3x" style="color: #ffb600;"></i>
                  </div>
                  <div class="ts-service-box-info">
                    <h3 class="service-box-title"><a href="#">Plastering & Skimming</a></h3>
                    <p>Smooth interior and exterior finishes with crack resistance and aesthetic enhancement</p>
                  </div>
              </div><!-- Service 4 end -->

              <div class="ts-service-box d-flex">
                  <div class="ts-service-box-img">
                    <i class="fas fa-home fa-3x" style="color: #00a6eb;"></i>
                  </div>
                  <div class="ts-service-box-info">
                    <h3 class="service-box-title"><a href="#">DuraHall Construction</a></h3>
                    <p>Fast, strong, and durable housing structures ideal for affordable homes or quick expansions</p>
                  </div>
              </div><!-- Service 5 end -->

              <div class="ts-service-box d-flex">
                  <div class="ts-service-box-img">
                    <i class="fas fa-tools fa-3x" style="color: #2d3e50;"></i>
                  </div>
                  <div class="ts-service-box-info">
                    <h3 class="service-box-title"><a href="#">Home & Office Renovations</a></h3>
                    <p>Modern layout updates, extensions, and structural upgrades for homes and commercial spaces</p>
                  </div>
              </div><!-- Service 6 end -->
            </div><!-- Col end -->
        </div><!-- Content row end -->

      </div>
      <!--/ Container end -->
    </section><!-- Service end -->

    <section id="project-area" class="project-area solid-bg">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12">
            <h2 class="section-title">Work of Excellence</h2>
            <h3 class="section-sub-title">Recent Projects</h3>
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
          <div class="col-12">
            <div class="row shuffle-wrapper">
              <div class="col-1 shuffle-sizer"></div>

              <?php
              require 'includes/db.php';
              try {
                  // Get latest 6 services
                  $stmt = $pdo->query("SELECT * FROM services ORDER BY created_at DESC LIMIT 6");
                  while ($service = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $name = htmlspecialchars($service['title']);
                    $image_path = htmlspecialchars('uploads/' . $service['image_path']);
                    $description = htmlspecialchars($service['description']);
              ?>
                <div class="col-lg-4 col-md-6 shuffle-item">
                  <div class="project-img-container">
                    <a class="gallery-popup" href="<?php echo $image_path; ?>" aria-label="project-img">
                      <img class="img-fluid" src="<?php echo $image_path; ?>" alt="<?php echo $name; ?>">
                      <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                    </a>
                    <div class="project-item-info">
                      <div class="project-item-info-content">
                        <h3 class="project-item-title">
                          <a href="#"><?php echo $name; ?></a>
                        </h3>
                        <p class="project-cat"><?php echo $description; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php 
                  }
              } catch(PDOException $e) {
                  // Handle database error gracefully
                  error_log("Database error: " . $e->getMessage());
              }
              ?>
            </div><!-- shuffle end -->
          </div>

          <div class="col-12">
            <div class="general-btn text-center">
              <a class="btn btn-primary" href="projects.php">View All Projects</a>
            </div>
          </div>

        </div><!-- Content row end -->
      </div>
      <!--/ Container end -->
    </section><!-- Project area end -->


<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <p>Mabecarestore Construction Private Limited is a registered Zimbabwean construction company specializing in the design, construction, and renovation of civil and commercial buildings. We combine technical expertise with modern construction techniques to deliver exceptional results.</p>
            <div class="footer-social">
              <ul>
                <li><a href="#" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="#" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Working Hours</h3>
            <div class="working-hours">
              We are available during standard business hours and provide emergency services when needed. Contact us through our hotline for urgent matters.
              <br><br> Monday - Friday: <span class="text-right">08:00 - 17:00 </span>
              <br> Saturday: <span class="text-right">08:00 - 13:00</span>
              <br> Sunday and holidays: <span class="text-right">Closed</span>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href="services.php">General Construction</a></li>
              <li><a href="services.php">Bricklaying & Masonry</a></li>
              <li><a href="services.php">Paving & Outdoor Works</a></li>
              <li><a href="services.php">DuraHall Construction</a></li>
              <li><a href="services.php">Home & Office Renovations</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="copyright-info text-center">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                  </script> Mabecarestore Construction. All rights reserved. Made by <a href="https://swiftmatrix.co.zw" target="_blank">Swift Matrix Technologies</a></span>
            </div>
          </div>

          <div class="col-md-12">
            <div class="footer-menu text-center">
              <ul class="list-unstyled mb-0">
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>