<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Mabecarestore Construction | Leading Construction Services in Zimbabwe</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta name="description" content="Mabecarestore Construction - Premier construction company in Bulawayo, Zimbabwe. Specializing in civil and commercial buildings, renovations, and quality construction solutions.">
  <meta name="keywords" content="construction services bulawayo, building zimbabwe, civil construction, commercial buildings, renovations, construction company zimbabwe, Mabecarestore Construction">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Mabecarestore Construction">
  <meta property="og:title" content="Mabecarestore Construction | Leading Construction Services in Zimbabwe">
  <meta property="og:description" content="Premier construction company in Bulawayo, Zimbabwe. Quality building solutions for residential and commercial needs.">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">
  <meta property="og:location" content="-20.1325066,28.626479">
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
                <h1 class="banner-title">About</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">company</a></li>
                      <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title text-justify">Who We Are</h3>
          <p class="text-justify">Mabecarestore Construction Private Limited is a registered Zimbabwean construction company specializing in the design, construction, and renovation of civil and commercial buildings.</p>
          
          <blockquote>
            <p class="text-justify">Building homes one dream at a time. We don't just build structures — we build trust, safety, and lasting value.</p>
          </blockquote>

          <p class="text-justify">Founded by a team of qualified construction professionals and managers, our company combines technical expertise, modern construction techniques, and a client-centric approach to bring your vision to life — safely, on time, and within budget.</p>

          <p class="text-justify">We maintain the highest standards of quality and professionalism in every project, ensuring that our work not only meets but exceeds client expectations while contributing to the development of our communities.</p>

        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">
          
          <div id="page-slider" class="page-slider small-bg">

              <div class="item" style="background-image:url(images/slider-pages/slide-page1.jpg)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title text-justify">Vision</h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(images/slider-pages/slide-page2.jpg)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title text-justify">Innovation</h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(images/slider-pages/slide-page3.jpg)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title text-justify">Excellence</h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->
          </div><!-- Page slider end-->          
        
        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->


    <section id="facts" class="facts-area dark-bg">
      <div class="container">
        <div class="facts-wrapper">
            <div class="row">
              <div class="col-md-3 col-sm-6 ts-facts">
                  <div class="ts-facts-img">
                    <i class="fas fa-project-diagram" style="color: #FFB600; font-size: 48px;"></i>
                  </div>
                  <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="50">0</span></h2>
                    <h3 class="ts-facts-title">Total Projects</h3>
                  </div>
              </div><!-- Col end -->

              <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                  <div class="ts-facts-img">
                    <i class="fas fa-users" style="color: #FFB600; font-size: 48px;"></i>
                  </div>
                  <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="15">0</span></h2>
                    <h3 class="ts-facts-title">Staff Members</h3>
                  </div>
              </div><!-- Col end -->

              <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                  <div class="ts-facts-img">
                    <i class="fas fa-clock" style="color: #FFB600; font-size: 48px;"></i>
                  </div>
                  <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="1500">0</span></h2>
                    <h3 class="ts-facts-title">Hours of Work</h3>
                  </div>
              </div><!-- Col end -->

              <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                  <div class="ts-facts-img">
                    <i class="fas fa-award" style="color: #FFB600; font-size: 48px;"></i>
                  </div>
                  <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="5">0</span></h2>
                    <h3 class="ts-facts-title">Years Experience</h3>
                  </div>
              </div><!-- Col end -->

            </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
      </div>
      <!--/ Container end -->
    </section><!-- Facts end -->

<section id="ts-team" class="ts-team">
  <div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
          <h2 class="section-title">Quality Service</h2>
          <h3 class="section-sub-title">Professional Team</h3>
        </div>
    </div><!--/ Title row end -->

    <div class="row">
        <div class="col-lg-12">
          <div id="team-slide" class="team-slide">
              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="images/team/user.png" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Moyo Bhekinkosi</h3>
                      <p class="ts-designation">Founder & Lead Site Supervisor</p>
                      <p class="ts-description">Certified Builder (TFE Class Three)</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="images/team/user.png" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Raymond Dube</h3>
                      <p class="ts-designation">Operations Director</p>
                      <p class="ts-description">Project Coordination & Client Relations</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 2 end -->

          </div><!-- Team slide end -->
        </div>
    </div><!--/ Content row end -->
  </div><!--/ Container end -->
</section><!--/ Team end -->

  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <p>Mabecarestore Construction is a registered Zimbabwean construction company specializing in civil and commercial buildings. We combine technical expertise with modern construction techniques to deliver exceptional quality projects.</p>
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
              We work standard business hours with flexibility for urgent projects. Contact us anytime for consultations and quotes.
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
              <li><a href="services.php">Plastering & Skimming</a></li>
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