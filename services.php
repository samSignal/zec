<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Mabecarestore Construction | Leading Construction Services in Zimbabwe</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta name="description" content="Mabecarestore Construction - Premier construction company in Bulawayo, Zimbabwe. Specializing in residential and commercial construction, bricklaying, paving, and renovations. Quality construction solutions for all your building needs.">
  <meta name="keywords" content="construction services bulawayo, construction zimbabwe, bricklaying, paving, home renovations, commercial construction, DuraHall construction, building contractors zimbabwe, Mabecarestore Construction">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Mabecarestore Construction">
  <meta property="og:title" content="Mabecarestore Construction | Leading Construction Services in Zimbabwe">
  <meta property="og:description" content="Premier construction company in Bulawayo, Zimbabwe. Quality construction solutions for residential and commercial needs.">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">
  <meta property="og:location" content="-20.1325066,28.6139927">

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

<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                      <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/general-construction.jpg" alt="General Construction">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <i class="fas fa-building fa-3x" style="color: #FFB600;"></i>
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="#">General Construction</a></h3>
                  <p>Complete residential and commercial construction services. From site preparation to finishing touches, we build quality structures that last.</p>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/bricklaying.jpg" alt="Bricklaying & Masonry">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <i class="fas fa-layer-group fa-3x" style="color: #FFB600;"></i>
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="#">Bricklaying & Masonry</a></h3>
                  <p>Expert bricklaying and masonry services. We deliver precise, durable wall structures for both interior and exterior applications.</p>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/paving.jpg" alt="Paving & Outdoor Works">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <i class="fas fa-road fa-3x" style="color: #FFB600;"></i>
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="#">Paving & Outdoor Works</a></h3>
                  <p>Professional paving solutions for driveways, patios, and walkways. We create beautiful and durable outdoor spaces.</p>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/plastering.jpg" alt="Plastering & Skimming">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <i class="fas fa-brush fa-3x" style="color: #FFB600;"></i>
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="#">Plastering & Skimming</a></h3>
                  <p>Quality plastering services for smooth, durable wall finishes. We ensure crack-resistant and aesthetically pleasing results.</p>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/durahall.jpg" alt="DuraHall Construction">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <i class="fas fa-home fa-3x" style="color: #FFB600;"></i>
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="#">DuraHall Construction</a></h3>
                  <p>Fast and durable housing solutions using DuraHall technology. Perfect for affordable homes and quick expansions.</p>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/renovations.jpg" alt="Home & Office Renovations">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <i class="fas fa-hammer fa-3x" style="color: #FFB600;"></i>
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="#">Home & Office Renovations</a></h3>
                  <p>Complete renovation services for homes and offices. We transform spaces with modern updates and quality workmanship.</p>
              </div>
            </div>
        </div>
      </div>

    </div><!-- Main row end -->
  </div><!-- Container end -->
</section><!-- Main container end -->

<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <p>Mabecarestore Construction is a registered Zimbabwean construction company specializing in the design, construction, and renovation of civil and commercial buildings. We combine technical expertise with modern construction techniques.</p>
            <div class="footer-social">
              <ul>
                <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Working Hours</h3>
            <div class="working-hours">
              We work standard business hours and are available for consultations and site visits by appointment.
              <br><br> Monday - Friday: <span class="text-right">08:00 - 17:00 </span>
              <br> Saturday: <span class="text-right">08:00 - 13:00</span>
              <br> Sunday and holidays: <span class="text-right">Closed</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href="services.php">General Construction</a></li>
              <li><a href="services.php">Bricklaying & Masonry</a></li>
              <li><a href="services.php">Paving & Outdoor Works</a></li>
              <li><a href="services.php">DuraHall Construction</a></li>
              <li><a href="services.php">Home & Office Renovations</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="copyright-info text-center">
              <span>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Mabecarestore Construction. All rights reserved.</span>
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
        </div>

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div>
    </div>
  </footer>

  <!-- Javascript Files
  ================================================== -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <script src="plugins/shuffle/shuffle.min.js" defer></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <script src="plugins/google-map/map.js" defer></script>
  <script src="js/script.js"></script>

  </div>
  </body>
  </html>