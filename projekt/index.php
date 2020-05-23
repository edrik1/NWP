<?php
# Stop Hacking attempt
define('__APP__', TRUE);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	
# Start session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

# Database connection
include ("dbconn.php");

# Variables MUST BE INTEGERS
if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }

# Variables MUST BE STRINGS A-Z
if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }

if (!isset($menu)) { $menu = 1; }

# Classes & Functions
include_once("functions.php");


print '
<!DOCTYPE>
<html>
<head>

<meta charset="utf-8">
	<title>Covid pandemija</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/w3.css" rel="stylesheet">
  
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">


</head>
<body>  

	<header>
	<div class="page-wrapper">
		<!-- Preloader -->
		<!-- <div class="preloader"></div> -->
		<!-- Preloader -->

		<!--header top-->
<div class="header-top">
	<div class="container clearfix">
		  <div class="top-left">
				<h6>Najnovije informacije : svakim danom u 14 sati!</h6>
		  </div>
		  <div class="top-right">
				<ul class="social-links">
					  <li>
							<a href="#">
								  <i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
					  </li>
					  <li>
							<a href="#">
								  <i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
					  </li>
					  <li>
							<a href="#">
								  <i class="fa fa-google-plus" aria-hidden="true"></i>
							</a>
					  </li>
					  <li>
							<a href="#">
								  <i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
					  </li>
					  <li>
							<a href="#">
								  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
							</a>
					  </li>
				</ul>
		  </div>
	</div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
	<div class="container clearfix">
		  <div class="logo">
				<figure>
					  <a href="index.php">
              <img src="images/logo.png" alt="Covid 19" width="150">             
            </a>
				</figure>
		  </div>
		  <div class="right-side">
				<ul class="contact-info">
					  <li class="item">
							<div class="icon-box">
								  <i class="fa fa-envelope-o"></i>
							</div>
							<strong>Email</strong>
							<br>
							<a href="#">
								  <span>earnaut@vvg.hr</span>
							</a>
					  </li>
					  <li class="item">
							<div class="icon-box">
								  <i class="fa fa-phone"></i>
							</div>
							<strong>Nazovite:</strong>
							<br>
							<span>+ (385) - 99 - 3260-604</span>
					  </li>
				</ul>
				<div class="link-btn">
					  <a href="#" class="btn-style-one">Dogovorite sastanak</a>
				</div>
		  </div>
	</div>
</section>
<div>
		<nav class="navbar navbar-default">'; 
		
    include("menu.php");
    
    print '
		
		</nav>
</div>
<!--End Main Header -->


<!--Header Upper-->
</header>


<main>';

		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	
	# Homepage
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	# Vijesti
	else if ($menu == 2) { include("vijesti.php"); }
	
	# Kontakt
	else if ($menu == 3) { include("kontakt.php"); }
	
	# O nama
	else if ($menu == 4) { include("onama.php"); }
	
	# Registracija
	else if ($menu == 5) { include("registracija.php"); }
	
	# Signin
	else if ($menu == 6) { include("prijava.php"); }
	
	# Admin web stranica
  else if ($menu == 7) { include("admin.php"); }
	
	# API OMDB
	else if ($menu == 10) { include("omdb.php"); }
	
	# API football
	else if ($menu == 11) { include("football.php"); }


	
	print '

	
</main>
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.php">
                  <img src="images/logo.png" alt="Covid19" width="150">
                </a>
              </figure>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>Donja Bistra, Krapinska 27A, Hrvatska</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="#">
                  <p>earnaut@vvg.hr</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>(+385) 1 61022-048</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h6>Ponuda servisa</h6>
          <ul class="menu-link">
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="social-links">
            <h6>Recent Posts</h6>
            <ul>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Post Title</a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="#">Post Title</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright ' . date("Y") . ' . Sva prava pridržana pri <a href="index.php">Medic</a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="index.php">Početna stranica</a>
        </li>
        <li>
          <a href="../index.php?menu=4">O nama</a>
        </li>
        <li>
          <a href="kontakt.php">Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->

<script src="plugins/jquery.js"></script>
  <script src="plugins/bootstrap.min.js"></script>
  <script src="plugins/bootstrap-select.min.js"></script>
  <!-- Slick Slider -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- FancyBox -->
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="plugins/google-map/gmap.js"></script>

  <script src="plugins/validate.js"></script>
  <script src="plugins/wow.js"></script>
  <script src="plugins/jquery-ui.js"></script>
  <script src="plugins/timePicker.js"></script>
  <script src="js/script.js"></script>

</body>

</html>
'
?>
