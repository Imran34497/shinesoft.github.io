<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from ziibay.com/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2020 19:14:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>SHINE SOFT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="ZIIBAY  ABOUT" content="ZIIBAY SOFT" />
    
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link rel="shortcut icon" href="ziibay.ico" type="image/x-icon" />

    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/products.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="http://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- header -->
    <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home </title>
</head>

<body>
<header>
        <!-- nav -->
       <nav class="main-header">
            <div id="brand">
                <div id="logo">
                    <a href="home.php">
                        <i class="fab fa-ethereum"></i>
                    </a>
                </div>
                <div id="word-mark">
                    <?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "Select * from paragraphs where p_status='logo'";
					
					$run=mysqli_query($con,$query);
					while($data=mysqli_fetch_array($run))
					{
					?>
					<h1>
                        <a href="Home.php"><?php echo $data['p_name'];?></a>
                    </h1>
                    <?php
                    }
					?>
                </div>
            </div>
            <div id="menu">
                <div id="menu-toggle">
                    <div id="menu-icon">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
                <ul class="text-center text-capitalize nav-agile">
                    <?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from category where status=1";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					<li>
                        <a href="<?php echo $data['name'];?>.php"><?php echo $data['name'];?></a>
                    </li>
                    <?php
                    }
					?>
                </ul>
            </div>
        </nav>
        <!-- //nav -->
    </header>
</body>

<!-- Mirrored from ziibay.com/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2020 19:14:34 GMT -->
</html>    <!-- //header -->
    <!-- about -->
    <!-- inner banner -->
    <div class="inner-banner">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index-2.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- about -->
    <div class="agileits-wthree-about py-md-5 py-4" id="wthree-about">
        <div class="container py-lg-5">
            <div class="text-center wthree-title pb-sm-5 pb-3">
                <h4 class="w3l-sub">About ZIIBAY SOFT</h4>
                <span></span>
            </div>
            <p style="text-align: center;">ZiiBay believes the top practices and processes along with the latest trends of technology. It provides an experience of excellence and prosperity to its clients and is known for providing high quality software solutions and consultancy services to its wide range of clients throughout Pakistan and in the world. With its diverse proficiency and domain knowledge it enables its clients to reach the level of their desired business.</p>
        </div>
    </div>
    <!-- //about -->
    <!-- progress bars -->
    <div class="py-lg-5 progress-bar-sec">
        <div class="container py-5">
            <div class="text-center wthree-title pb-sm-5 pb-3">
                <h4 class="w3l-sub text-white">statistical analysis</h4>
                <span></span>
            </div>
            <div class="row  no-gutters abbot-grid2 py-lg-5">
                <div class="offset-lg-2"></div>
                <div class="col-lg-8 progress_agile">
                    <div class="progress-outer mt-3">
                        <div class="progress">
                            <div class="progress-bar progress-bar-info progress-bar-striped active" style="width:90%;"></div>
                            <div class="progress-value">90%</div>
                        </div>
                        <h6 class="text-right text-capitalize pt-3">Developing</h6>
                    </div>
                    <div class="progress-outer  my-4">
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width:80%;"></div>
                            <div class="progress-value">80%</div>
                        </div>
                        <h6 class="text-right text-capitalize pt-3">Hosting</h6>
                    </div>
                    <div class="progress-outer">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:70%;"></div>
                            <div class="progress-value">70%</div>
                        </div>
                        <h6 class="text-right text-capitalize pt-3">Advertisement</h6>
                    </div>
					<br>
					<div class="progress-outer">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:70%;"></div>
                            <div class="progress-value">70%</div>
                        </div>
                        <h6 class="text-right text-capitalize pt-3">Maintenance</h6>
                    </div>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </div>
    </div>
    <!-- //progress bars -->
    <section class="blog_w3ls py-lg-5 text-center">
        <div class="container py-5">
            <div class="text-center wthree-title pb-sm-5 pb-3">
                <h4 class="w3l-sub">Our Products</h4>
                <span></span>
            </div>
            <div class="row py-md-5">
     
                <div class="container">
					<div class="row">
											<div class="col-md-4">
							<figure class="imghvr-zoom-out">
							  <img src="assets/images/upload/gallery/gar.jpg" class="img-responsive" style="width: 400px; height: 250px;">
							  <figcaption>
								<h3>Garments Store</h3>
								<p>Easy Retail Garments is a software for managing garment store activities like stock , sale, profit & loss etc..</p>
								<div class="btn-group">
								 <button type="button" class="btn blog-btn" onClick="window.location.href='product0b30-2.html?id=2'">
                                Read more
								</button>
								</div>
							  </figcaption>
							</figure>
							<figcaption>
							<h4>Garments Store</h4>
							</figcaption> 
						</div>
												<div class="col-md-4">
							<figure class="imghvr-zoom-out">
							  <img src="assets/images/upload/gallery/shoe.jpg" class="img-responsive" style="width: 400px; height: 250px;">
							  <figcaption>
								<h3>Shoes Store</h3>
								<p>Easy Retail Shoes is a software especially designed for Shoe Stores  for managing sale and stock activities .</p>
								<div class="btn-group">
								 <button type="button" class="btn blog-btn" onClick="window.location.href='productd708-2.html?id=3'">
                                Read more
								</button>
								</div>
							  </figcaption>
							</figure>
							<figcaption>
							<h4>Shoes Store</h4>
							</figcaption> 
						</div>
												<div class="col-md-4">
							<figure class="imghvr-zoom-out">
							  <img src="assets/images/upload/gallery/mob.jpg" class="img-responsive" style="width: 400px; height: 250px;">
							  <figcaption>
								<h3>Mobile/Accessory Shop</h3>
								<p>MobiSoft is a software package designed for Shops selling Mobile  and their accessories.</p>
								<div class="btn-group">
								 <button type="button" class="btn blog-btn" onClick="window.location.href='productd61c-2.html?id=5'">
                                Read more
								</button>
								</div>
							  </figcaption>
							</figure>
							<figcaption>
							<h4>Mobile/Accessory Shop</h4>
							</figcaption> 
						</div>
											</div>
				</div>
            </div>
        </div>
    </section>
    <!-- //blog -->
    <!-- testimonials -->
    <div class="testimonials" id="testimonials">
            
            <div class =  "own">
    <div class="container-fluid p-0">
      <div class="text-center wthree-title pb-sm-5 pb-3">
        <h4 class="w3l-sub">Our Clients</h4>
        <span></span>
      </div>
	  <marquee>
      <ul style="display:inline;">
        
         <li>
		
				
		<img src="assets/images/upload/news/sup.png" width="" height="200" style="padding:10px;" >
		SUPERIOR COLLEGE LAYYAH				
		<img src="assets/images/upload/news/dpsl.jpg" width="" height="200" style="padding:10px;" >
		DPS BOYS LAYYAH				
		<img src="assets/images/upload/news/dg.jpg" width="" height="200" style="padding:10px;" >
		DG School College & Academy DG khan				
		<img src="assets/images/upload/news/cma.jpg" width="" height="200" style="padding:10px;" >
		CMA COLLEGE FATEHPUR				
		<img src="assets/images/upload/news/shaheen.jpg" width="" height="200" style="padding:10px;" >
		SHAHEEN SCHOOL AND ACADEMY QASBA GUJRAT				
		<img src="assets/images/upload/news/ETC1.png" width="" height="200" style="padding:10px;" >
		ETC ACADEMY KOT CHUTTA				
		<img src="assets/images/upload/news/astral.jpg" width="" height="200" style="padding:10px;" >
		ASTRAL ENGLISH MEDIUM PUBLIC SCHOOL KOT SULTAN				
		<img src="assets/images/upload/news/mya.png" width="" height="200" style="padding:10px;" >
		MY ACADEMY LAYYAH				
		<img src="assets/images/upload/news/ZAK.jpg" width="" height="200" style="padding:10px;" >
		ZAKARIYA ACADEMY FATEHPUR				
		<img src="assets/images/upload/news/mya.png" width="" height="200" style="padding:10px;" >
		MY ACADEMY FATEHPUR				
		<img src="assets/images/upload/news/SAVVY.jpg" width="" height="200" style="padding:10px;" >
		THE SAVVY SCHOOL DG KHAN				
		<img src="assets/images/upload/news/new.jpg" width="" height="200" style="padding:10px;" >
		NEW VISION SCHOOL & ACADEMY				
		<img src="assets/images/upload/news/LCS.jpg" width="" height="200" style="padding:10px;" >
		LAYYAH COLLEGE OF SCIENCE				
		<img src="assets/images/upload/news/FUTURE.jpg" width="" height="200" style="padding:10px;" >
		FUTURE CARE SCIENCE ACADEMY LAYYAH				
		<img src="assets/images/upload/news/CSS.jpg" width="" height="200" style="padding:10px;" >
		CREATIVE SCHOOL LAYYAH				
		<img src="assets/images/upload/news/LEV.png" width="" height="200" style="padding:10px;" >
		LEV SCHOOL LAYYAH				
		<img src="assets/images/upload/news/uthal.jpg" width="" height="200" style="padding:10px;" >
		IQRA ACADEMY UTHAL BALOCHISTAN 				
		<img src="assets/images/upload/news/Academy%20Logo%20(Final)%209.jpg" width="" height="200" style="padding:10px;" >
		NEW BRIGHT KAROR 				
		<img src="assets/images/upload/news/city.jpg" width="" height="200" style="padding:10px;" >
		City Academy Muzafar Garh				
		<img src="assets/images/upload/news/learner.jpg" width="" height="200" style="padding:10px;" >
		Learner Academy Muzafar Garh				
		<img src="assets/images/upload/news/lps.png" width="" height="200" style="padding:10px;" >
		Liaqat Public School Kot adu				
		</li>
		
				
				
		
          
       
        
      </ul>
	  </marquee>
    </div>
  </div>
        </div>
    </div>
    <!-- //testimonials -->
    <!-- footer -->
    <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<!-- footer -->
    <div class="footer-w3ls">
        <div class="footer-dot">
            <div class="container">
                <div class="contact-center">
                    <div class="footer-logo my-sm-5 mb-sm-5 mb-3 text-center">
					<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='site_name'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                <h2>
                            <a href="home.php">
                                <i class="fab fa-ethereum"></i><?php echo $data['p_name'];?>
                            </a>
                        </h2>
                    
                    <?php
                    }
					?>
					<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='fh'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
            <p class="px-lg-5 pt-lg-5 pt-3 text-white"><?php echo $data['p_name'];?></p>
                    
                    <?php
                    }
					?>
					
                        
                        
                    </div>
                    <div class="row border-top">
                        <div class="col-lg-6 footer-grid">
                            <div class="justify-content-center contact-g2 mx-auto">
                                <h6 class="footer-wthree">Follow us</h6>
                                <div class="address-grid">
                                    <ul class="social-icons3">
                                        <li>
                                            <a href="#" class="s-iconenvalop">
                                                <span class="fa fa-envelope"></span>
                                            </a>
                                        </li>
                                        <li>
                                              <a href="https://www.facebook.com/ziibaylayyah/" class="s-iconfacebook">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="s-icontwitter">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                       </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 border-left footer-grid">
                         
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="cpy-right text-center py-4">
        <p class="text-white">© 2019 ZIIBAY SOFT. All rights reserved.</p>
    </div>
</body>
</html>  <!-- //footer -->
  <!-- Login modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Username</label>
              <input type="text" class="form-control border" placeholder=" " name="Name" id="recipient-name" required="">
            </div>
            <div class="form-group">
              <label for="password" class="col-form-label">Password</label>
              <input type="password" class="form-control border" placeholder=" " name="Password" id="password" required="">
            </div>
            <div class="right-w3l">
              <input type="submit" class="form-control border text-white btn-theme" value="Login">
            </div>
            <div class="row sub-w3l my-3">
              <div class="col sub-agile">
                <input type="checkbox" id="brand1" value="">
                <label for="brand1" class="text-muted">
                  <span></span>Remember me?</label>
              </div>
              <div class="col forgot-w3l text-right text-dark">
                <a href="#" class="text-white">Forgot Password?</a>
              </div>
            </div>
            <p class="text-center">Don't have an account?
              <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-secondary font-weight-bold">
                Register Now</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- //Login modal -->
  <!-- Register modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Username</label>
              <input type="text" class="form-control border" placeholder=" " name="Name" id="recipient-rname" required="">
            </div>
            <div class="form-group">
              <label for="recipient-email" class="col-form-label">Email</label>
              <input type="email" class="form-control border" placeholder=" " name="Email" id="recipient-email" required="">
            </div>
            <div class="form-group">
              <label for="password1" class="col-form-label">Password</label>
              <input type="password" class="form-control border" placeholder=" " name="Password" id="password1" required="">
            </div>
            <div class="form-group">
              <label for="password2" class="col-form-label">Confirm Password</label>
              <input type="password" class="form-control border" placeholder=" " name="Confirm Password" id="password2" required="">
            </div>
            <div class="sub-w3l">
              <div class="sub-agile">
                <input type="checkbox" id="brand2" value="">
                <label for="brand2" class="mb-3">
                  <span></span>I Accept to the Terms & Conditions</label>
              </div>
            </div>
            <div class="right-w3l">
              <input type="submit" class="form-control btn-theme text-white" value="Register">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- // Register modal -->
  <!-- blog modal -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Cras ultricies ligula sed magna dictum porta auris blandita.</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <img src="images/b1.html" class="img-fluid" alt="" />
          <p class="text-left">
            Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl tempus convallis quis ac
            lectus. Cras ultricies ligula sed magna dictum porta.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- //blog modal -->
  <!-- blog modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel3">Cras ultricies ligula sed magna dictum porta auris blandita.</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <img src="images/b2.jpg" class="img-fluid" alt="" />
          <p class="text-left">
            Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl tempus convallis quis ac
            lectus. Cras ultricies ligula sed magna dictum porta.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- //blog modal -->
  <!-- blog modal -->
  <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel4">Cras ultricies ligula sed magna dictum porta auris blandita.</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <img src="images/b3.jpg" class="img-fluid" alt="" />
          <p class="text-left">
            Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl tempus convallis quis ac
            lectus. Cras ultricies ligula sed magna dictum porta.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- //blog modal -->
  <script src="js/jquery-2.2.3.min.js"></script>
  <!-- Banner Responsiveslides -->
  <script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $("#slider3").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
  <!-- // Banner Responsiveslides -->
  <!-- Flexslider-js for-testimonials -->
  <script src="js/jquery.flexisel.js"></script>
  <script>
    $(window).load(function () {
      $("#flexiselDemo1").flexisel({
        visibleItems: 1,
        animationSpeed: 1000,
        autoPlay: false,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint: 480,
            visibleItems: 1
          },
          landscape: {
            changePoint: 640,
            visibleItems: 1
          },
          tablet: {
            changePoint: 768,
            visibleItems: 1
          }
        }
      });

    });
  </script>
  <!-- //Flexslider-js for-testimonials -->
  <!-- sticky nav bar-->
  <script>
    $(() => {

      //On Scroll Functionality
      $(window).scroll(() => {
        var windowTop = $(window).scrollTop();
        windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
        windowTop > 100 ? $('ul.nav-agile').css('top', '50px') : $('ul.nav-agile').css('top', '160px');
      });

      //Click Logo To Scroll To Top
      $('#logo').on('click', () => {
        $('html,body').animate({
          scrollTop: 0
        }, 500);
      });

      //Smooth Scrolling Using Navigation Menu
      $('a[href*="#"]').on('click', function (e) {
        $('html,body').animate({
          scrollTop: $($(this).attr('href')).offset().top - 100
        }, 500);
        e.preventDefault();
      });

      //Toggle Menu
      $('#menu-toggle').on('click', () => {
        $('#menu-toggle').toggleClass('closeMenu');
        $('ul').toggleClass('showMenu');

        $('li').on('click', () => {
          $('ul').removeClass('showMenu');
          $('#menu-toggle').removeClass('closeMenu');
        });
      });

    });
  </script>
  <!-- //sticky nav bar -->
  <!-- smooth-scrolling-of-move-up -->
  <script>
    $(document).ready(function () {
      /*
       var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
       };
       */

      $().UItoTop({
        easingType: 'easeOutQuart'
      });

    });
  </script>
  <script src="js/SmoothScroll.min.js"></script>
  <!-- //smooth-scrolling-of-move-up -->
  <!-- start-smooth-scrolling -->
  <script src="js/move-top.js"></script>
  <script src="js/easing.js"></script>
  <script>
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();

        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <!-- //end-smooth-scrolling -->
  <!-- script for password match -->
  <script>
    window.onload = function () {
      document.getElementById("password1").onchange = validatePassword;
      document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
      var pass2 = document.getElementById("password2").value;
      var pass1 = document.getElementById("password1").value;
      if (pass1 != pass2)
        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
      else
        document.getElementById("password2").setCustomValidity('');
      //empty string means no validation error
    }
  </script>
  <!-- script for password match -->
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.js">
  </script>
  <!-- //Bootstrap Core JavaScript -->
</body>

</html>