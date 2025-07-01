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
  <meta name="keywords" content="construction services bulawayo, construction zimbabwe, bricklaying, paving, renovations, building contractors, residential construction, commercial construction, Mabecarestore Construction">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Mabecarestore Construction">
  <meta property="og:title" content="Mabecarestore Construction | Leading Construction Services in Zimbabwe">
  <meta property="og:description" content="Premier construction company in Bulawayo, Zimbabwe. Quality construction solutions for residential and commercial needs.">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">
  <meta property="og:location" content="-20.1325066,28.5805008">

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
                  <span style="color: #000;"> Mabecarestore </span><span style="color: #FFB600;"> Construction </span>
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

<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner2.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Project</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Projects</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
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
        <div class="shuffle-btn-group">
          <?php
          require 'includes/db.php';
          try {
              // Get unique service categories
              $stmt = $pdo->query("SELECT DISTINCT category FROM services");
              $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
          ?>
              <label class="active" for="all">
                <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
              </label>
              <?php
              foreach ($categories as $row) {
                  $category = htmlspecialchars($row['category']);
                  $display_name = '';
                  
                  // Map category names to display names
                  switch(strtolower($category)) {
                      case 'residential':
                          $display_name = 'Residential Construction';
                          break;
                      case 'commercial':
                          $display_name = 'Commercial Construction'; 
                          break;
                      case 'paving':
                          $display_name = 'Paving & Outdoor Works';
                          break;
                      case 'renovations':
                          $display_name = 'Home & Office Renovations';
                          break;
                      default:
                          $display_name = $category;
                  }
                  
                  $filter_id = strtolower(str_replace(' ', '-', $category));
                  ?>
                  <label for="<?php echo $filter_id; ?>">
                    <input type="radio" name="shuffle-filter" id="<?php echo $filter_id; ?>" value="<?php echo $filter_id; ?>"><?php echo $display_name; ?>
                  </label>
                  <?php
              }
          } catch(PDOException $e) {
              // Handle database error gracefully
              error_log("Database error: " . $e->getMessage());
          }
          ?>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <?php
          // Get all services with their images
          $stmt = $pdo->query("SELECT * FROM services ORDER BY created_at DESC");
          while ($service = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $filter_class = strtolower(str_replace(' ', '-', $service['category']));
            $name = htmlspecialchars($service['title']);
            $image_path = htmlspecialchars('uploads/' . $service['image_path']);
            $category = htmlspecialchars($service['category']);
            $description = htmlspecialchars($service['description']);
          ?>
            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;<?php echo $filter_class; ?>&quot;]">
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
          <?php } ?>
        </div><!-- shuffle end -->
      </div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="projects.php">View All Projects</a>
        </div>
      </div>

    </div><!-- Content row end -->
  </div>
</section><!-- Main container end -->

<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <p>Mabecarestore Construction is a registered Zimbabwean construction company specializing in the design, construction, and renovation of civil and commercial buildings. With a proven track record of delivering exceptional projects, we are committed to quality, durability, and client satisfaction.</p>
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
              We work standard business hours and are available for consultations and site visits by appointment.
              <br><br> Monday - Friday: <span class="text-right">08:00 - 17:00 </span>
              <br> Saturday: <span class="text-right">08:00 - 13:00</span>
              <br> Sunday and holidays: <span class="text-right">Closed</span>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href="services.php">Residential Construction</a></li>
              <li><a href="services.php">Commercial Construction</a></li>
              <li><a href="services.php">Bricklaying & Masonry</a></li>
              <li><a href="services.php">Paving & Outdoor Works</a></li>
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
                </script> Mabecarestore Construction. All rights reserved.</span>
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