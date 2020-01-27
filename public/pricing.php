<?php

$ini = parse_ini_file('../config/config.ini.php');
$servername = $ini['servername'];     // mydatabase
$username = $ini['username'];     // myuser
$password = $ini['password']; // mypassword
$databasename = $ini['databasename'];   

// Create connection
$conn = new mysqli($servername, $username, $password,$databasename);

// Check connection
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
$sql = "SELECT * FROM Pricing_Promo"; $result = $conn->query($sql); $row =
$result->fetch_assoc(); $promoText = $row["promoText"]; 
$weekPrice = $row["weekPrice"]; 
$twoWeekPrice = $row["twoWeekPrice"]; 
$monthPrice = $row["monthPrice"]; 
$twentySession = $row["twentySession"]; 
$fortySession = $row["fortySession"]; 
$sixtySession = $row["sixtySession"]; 
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0,maximum-scale=1"
    />
    <meta name="author" content="Theme Industry" />
    <!-- description -->
    <meta name="description" content="boltex" />
    <!-- keywords -->
    <meta name="keywords" content="" />
    <!-- title -->
    <title>Pricing</title>
    <!-- favicon -->
    <link rel="icon" href="images/ig_images/dumbbell_icon.png" />
    <!-- animation -->
    <link rel="stylesheet" href="css/animate.min.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css" />
    <!-- cube Portfolio -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" href="revolution/css/settings.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <!-- bundle css -->
    <link rel="stylesheet" href="css/core.css" />
    <!-- style -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/custom.css" />
  </head>

  <body
    data-spy="scroll"
    data-target=".navbar"
    data-offset="90"
    class="side-nav"
  >
    <div id="loader">
      <div class="loader-inner">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>

    <!-- start header -->
    <header>
      <!-- start navigation -->
      <nav
        class="nav-white-text navbar navbar-default bootsnav navbar-fixed-top nav-white header-light bg-transparent nav_line"
      >
        <div class="container nav-header-container">
          <div class="row">
            <div class="col-md-2 col-xs-5">
              <!-- <a href="#home" title="Logo" class="logo scroll"
                ><img
                  src="images/logo-blue-black.png"
                  class="logo-dark"
                  alt="boltex"/><img
                  src="images/logo-blue-white.png"
                  alt="boltex"
                  class="logo-light default"
              /></a> -->
            </div>
            <!-- end logo -->
            <div
              class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right hidden-sm hidden-xs"
            >
              <div
                class="navbar-collapse collapse pull-right"
                id="navbar-collapse-toggle-1"
              >
                <ul
                  id="accordion"
                  class="nav navbar-nav navbar-left no-margin alt-font text-normal"
                  data-in="fadeIn"
                  data-out="fadeOut"
                >
                  <!-- start menu item -->
                  <li>
                    <a href="home.php">Home</a>
                  </li>
                  <li>
                    <a href="231.html">23/1</a>
                  </li>
                </ul>
              </div>
            </div>
            <div
              class="col-md-2 col-xs-5 width-auto sm-width-15 xs-width-20 no-padding"
            >
              <div
                class="header-social-icon sm-display-none"
                aria-hidden="true"
              >
                <a
                  href="https://www.facebook.com/adrian.leanknights"
                  class="facebook-bg-hvr"
                  ><i class="fa fa-facebook" aria-hidden="true"></i
                ></a>
                <a
                  href="https://twitter.com/adrianalive101"
                  class="twitter-bg-hvr"
                  ><i class="fa fa-twitter"></i
                ></a>
                <a
                  href="https://www.instagram.com/adriantwentythreeone/"
                  class="instagram-bg-hvr"
                  ><i class="fa fa-instagram"></i
                ></a>
              </div>
            </div>
            <!--side nav -->
            <div id="menu_bars" class="right menu_bars">
              <span class="t1"></span>
              <span class="t2"></span>
              <span class="t3"></span>
            </div>
            <div class="sidebar_menu">
              <nav class="pushmenu pushmenu-right">
                <!-- <a class="push-logo" href="#."
                  ><img src="images/logo-blue-white.png" alt="logo"
                /></a> -->
                <div class="medium-icon side-nav-social-icon list-inline">
                  <a
                    class="facebook-bg-hvr"
                    href="https://www.facebook.com/adrian.leanknights"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>

                  <a
                    class="twitter-bg-hvr"
                    href="https://twitter.com/adrianalive101"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>

                  <a
                    class="instagram-bg-hvr"
                    href="https://www.instagram.com/adriantwentythreeone/"
                    ><i class="fa fa-instagram" aria-hidden="true"></i
                  ></a>
                </div>
                <ul class="push_nav centered">
                  <li class="clearfix">
                    <a href="home.php"><span>01.</span>Home</a>
                  </li>
                  <li class="clearfix">
                    <a href="231.html"><span>02.</span>23/1</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header -->

    <!-- cover-->
    <section class="bg blog-cover">
      <div class="container">
        <div class="text-center sm-padding-40px-tb sm-padding-15px-lr">
          <h5
            class="text-uppercase alt-font text-white margin-20px-bottom font-weight-700"
          >
            Prices
          </h5>
          <p class="text-white margin-5px-bottom">
            <?php echo $promoText ?>
          </p>

          <!-- <div class="page_nav">
            <span class="text-white">You are here:</span>
            <a href="index.html" class="text-white">Home</a>
            <span class="text-white"
              ><i class="fa fa-angle-double-right"></i> 404</span
            >
          </div> -->
        </div>
      </div>
    </section>
    <!-- cover end-->

    <!-- start features -->
    <section id="features" class="position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center center-col last-paragraph-no-margin">
            <div class="sec-title margin-100px-bottom">
              <!-- <div
                class="text-large text-red margin-10px-bottom font-weight-400 text-blue"
              >
                All You Need To Know
              </div> -->
              <h3
                class="text-capitalize alt-font text-extra-dark-gray font-weight-300"
              >
                My Prices
              </h3>
              <!-- <p
                class="width-75 margin-lr-auto md-width-90 xs-width-100 xs-margin-30px-bottom"
              >
                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum. Perspiciatis
                unde omnis iste natus error sit.
              </p> -->
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12 margin-30px-bottom">
            <div class="services-item text-center">
              <!-- <i class="fa fa-bicycle" aria-hidden="true"></i> -->
              <h6
                class="text-extra-dark-gray margin-10px-tb alt-font font-weight-400"
              >
                20 Sessions
              </h6>
              <hr class="services-hr" />
              <p>
                <?php echo "$".$twentySession ?>
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin-30px-bottom">
            <div class="services-item text-center">
              <!-- <i class="fa fa-umbrella" aria-hidden="true"></i> -->
              <h6
                class="text-extra-dark-gray margin-10px-tb alt-font font-weight-400"
              >
                40 Sessions
              </h6>
              <hr class="services-hr" />
              <p>
                <?php echo "$".$fortySession ?>
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin-30px-bottom">
            <div class="services-item text-center">
              <!-- <i class="fa fa-bar-chart" aria-hidden="true"></i> -->
              <h6
                class="text-extra-dark-gray margin-10px-tb alt-font font-weight-400"
              >
                60 Sessions
              </h6>
              <hr class="services-hr" />
              <p>
                <?php echo "$".$sixtySession ?>
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin-30px-bottom">
            <div class="services-item text-center">
              <!-- <i class="fa fa-laptop" aria-hidden="true"></i> -->
              <h6
                class="text-extra-dark-gray margin-10px-tb alt-font font-weight-400"
              >
                Weekly
              </h6>
              <hr class="services-hr" />
              <p>
                <?php echo "$".$weekPrice ?>
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin-30px-bottom">
            <div class="services-item text-center">
              <!-- <i class="fa fa-book" aria-hidden="true"></i> -->
              <h6
                class="text-extra-dark-gray margin-10px-tb alt-font font-weight-400"
              >
                Bi-Weekly
              </h6>
              <hr class="services-hr" />
              <p>
                <?php echo "$".$twoWeekPrice ?>
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="services-item text-center">
              <!-- <i class="fa fa-support" aria-hidden="true"></i> -->
              <h6
                class="text-extra-dark-gray margin-10px-tb alt-font font-weight-400"
              >
                Monthly
              </h6>
              <hr class="services-hr" />
              <p>
                <?php echo "$".$monthPrice ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--footer Start-->
    <footer class="bg-extra-dark-gray padding-30px-tb text-center">
      <div class="footer-widget-area">
        <div class="container">
          <div class="row">
            <div
              class="medium-icon social-icon-style-3 social_icon list-inline margin-20px-top"
            >
              <a
                class="facebook text-white facebook-bg-hvr wow fadeInUp"
                data-wow-duration=".5s"
                href="https://www.facebook.com/adrian.leanknights"
                ><i class="fa fa-facebook" aria-hidden="true"></i><span></span
              ></a>
              <a
                class="twitter text-white twitter-bg-hvr wow fadeInDown"
                data-wow-duration=".5s"
                href="https://twitter.com/adrianalive101"
                ><i class="fa fa-twitter" aria-hidden="true"></i><span></span
              ></a>
              <a
                class="instagram text-white instagram-bg-hvr wow fadeInUp"
                data-wow-duration=".5s"
                href="https://www.instagram.com/adriantwentythreeone/"
                ><i class="fa fa-instagram" aria-hidden="true"></i><span></span
              ></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end footer -->

    <!-- javascript libraries -->
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- fancybox -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- wow -->
    <script src="js/wow.js"></script>
    <!-- parallax -->
    <script src="js/parallaxie.min.js"></script>
    <!-- equal hieght -->
    <script src="js/jquery.matchHeight-min.js"></script>
    <!-- text-rotate -->
    <script src="js/morphext.min.js"></script>
    <!-- text-rotate -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- revolution -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- revolution extension -->
    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- setting -->
    <script src="js/main.js"></script>
  </body>
</html>
