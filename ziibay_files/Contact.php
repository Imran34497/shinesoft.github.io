<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from ziibay.com/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2020 19:14:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>SHINE SOFT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="CONTACT ZIIBAY" content="ZIIBAY SOFT" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all"><link rel="shortcut icon" href="ziibay.ico" type="image/x-icon" />

    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
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

<!-- Mirrored from ziibay.com/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2020 19:14:33 GMT -->
</html>    <!-- //header -->
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
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="main-sec-w3 py-lg-5">
        <div class="container py-sm-5 pt-3 pb-5">
            <div class="wthree-inner-sec">
                <div class="text-center wthree-title pb-sm-5 pb-3">
                    <h4 class="w3l-sub">contact</h4>
                    <span></span>
                </div>
                <div class="row pt-lg-5 pt-lg-5">
                    <div class="col-lg-3">
                        <div class="address">
                            <address>
                                <p class="contact-title">Layyah Office</p>
                                <p class="c-txt"><i class="fa fa-map-marker-alt"></i> Housing Colony # 1   Near United Commerce College Layyah, Pakistan.
                                    <br><i class="fa fa-envelope"></i> <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="7c15121a133c0615151e1d05521f1311">[email&#160;protected]</a>
                                    <br><i class="fa fa-phone"></i> (+92)300 4118761
									<br><i class="fa fa-phone"></i> (+92)313 6350169
                                </p>
                            </address>
                        </div>
                        <div class="address">
                            <address>
                                <p class="contact-title">DG Khan Office</p>
                                <p class="c-txt"><i class="fa fa-map-marker-alt"></i> Model Town Street #1 Block Z Dera Ghazi Khan, Pakistan.
                                    <br><i class="fa fa-envelope"></i> <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="4821262e27083221212a2931662b2725">[email&#160;protected]</a>
                                    <br><i class="fa fa-phone"></i> (+92)332 3720841
									<br><i class="fa fa-phone"></i> (+92)313 6350169
                                </p>
                            </address>
                        </div>
                    </div>
                    <div class="col-lg-9 pl-lg-5">
                        <div class="form-wrapper">
                            <form action="https://ziibay.com/contact.php" method="post">
                                <div class="d-flex flex-column">
                                    <label>Your Name:</label>
                                    <input class="text-input" type="text" name="name" id="name" required>
                                </div>
                                <div class="d-flex flex-column my-sm-5 my-3">
                                    <label>Your Email:</label>
                                    <input class="text-input" type="email" name="email" id="email" required>
                                </div>
                                <div class="d-flex flex-column">
                                    <label>Subject:</label>
                                    <input class="text-input" type="text" name="subject" id="text1">
                                </div>
                                <div class="d-flex flex-column my-sm-5 my-3">
                                    <div class="message">
                                        <h6>Add Your Message</h6>
                                    </div>
                                    <textarea name="message" id="t1" required></textarea>
                                </div>
                                <input class="submit" type="submit" name="email_send" value="Send">
                            </form>
                        </div>
						                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
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