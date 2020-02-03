<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from ziibay.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2020 19:13:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <title>SHINE SOFT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  <meta name="ziibay soft , softwares , school softwares pakistan , school software , super store software , garments software pakistan , shoe store software , book shop software , paper making software" content="ZIIBAY SOFT" />

  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- Custom Theme files -->
  <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
  <link rel="shortcut icon" href="ziibay.ico" type="image/x-icon" />

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
  <header class="index-banner">
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

<!-- Mirrored from ziibay.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2020 19:13:37 GMT -->
</html>    <!-- banner -->
    <div id="hero-section">
      <!-- banner text responsive slider -->
      <div class="banner-text">
        <div class="callbacks_container">
          <ul class="rslides" id="slider3">
            <li>
              <div class="slider-info">
                <?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='logo_a'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                        <h3><?php echo $data['p_name']; ?></h3>
                    
                    <?php
                    }
					?>
                <?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='logo_p1'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                        <p><?php echo $data['p_name']; ?></p>
                    
                    <?php
                    }
					?>
                
              </div>
            </li>
            <li>
              <div class="slider-info">
			   <?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='logo_b'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                        <h3><?php echo $data['p_name']; ?></h3>
                    
                    <?php
                    }
					?>
					<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='logo_p2'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                        <p><?php echo $data['p_name']; ?></p>
                    
                    <?php
                    }
					?>
               
                
              </div>
            </li>
            <li>
              <div class="slider-info">
			   <?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='logo_c'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                        <h3><?php echo $data['p_name']; ?></h3>
                    
                    <?php
                    }
					?>
					<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='logo_p3'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                        <p><?php echo $data['p_name']; ?></p>
                    
                    <?php
                    }
					?>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- banner text responsive slider -->
    </div>
    <!-- //banner -->
  </header>
  <!-- //header -->
  <!-- about -->
  <section id="section00">
    <div id="heading">
      <!-- about -->
      <div class="agileits-wthree-about py-md-5 py-4" id="wthree-about">
        <div class="container py-lg-5">
          <div class="text-center wthree-title pb-sm-5 pb-3">
            <?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='h1'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                        <h4 class="w3l-sub"><?php echo $data['p_name']; ?></h4>
                    
                    <?php
                    }
					?>
            
            <span></span>
          </div>
                
				<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='p1'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                        <p style="text-align: center;"><?php echo $data['p_name']; ?></p>
                    
                    <?php
                    }
					?>
        </div>
      </div>
      <!-- //about -->
    </div>
  </section>
  <!-- //about -->
  <!-- our services -->
  <div class="py-lg-5 progress-bar-sec">
    <div class="container py-6">
           <section id="section02">
        <div class="container py-lg-5">
            <div class="wthree-row  py-lg-5">
                <div class="about-w3sec py-sm-5 pt-3 pb-5">
                    <div class="text-center wthree-title pb-sm-5 pb-3">
                        <?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='h2'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <h4 class="w3l-sub" style= "color:white;"><?php echo $data['p_name'];?></h4>
                    
                    <?php
                    }
					?>
                        <span></span>
                    </div>
                      
                     <!-- start row 1 -->
                       <div class="row mt-lg-5 pt-md-5">
                        <div class="col-lg-4 col-md-6 my-md-0 my-5">
                            <div class="abt-block">
                                <div class="serv_abs serv_bottom">
                                    <i class="fas fa-chart-pie" aria-hidden="true"></i>
                                </div>
								<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='s1'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <h3 style =   "background-color:orange;padding:6px;"><?php echo $data['p_name'];?></h3>
                    
                    <?php
                    }
					?>
					<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='sp1'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <p><?php echo $data['p_name'];?></p>
                    
                    <?php
                    }
					?>
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 my-md-0 mt-5">
                            <div class="abt-block">
                                <div class="serv_abs serv_bottom">
                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                </div>
								<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='s2'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <h3 style =   "background-color:orange;padding:6px;"><?php echo $data['p_name'];?></h3>
                    
                    <?php
                    }
					?>
					<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='sp2'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <p><?php echo $data['p_name'];?></p>
                    
                    <?php
                    }
					?>
                               
                                
								<br>
                               
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 my-md-0 mt-5">
                            <div class="abt-block">
                                <div class="serv_abs serv_bottom">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                </div>
								<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='s3'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <h3 style =   "background-color:orange;padding:6px;"><?php echo $data['p_name'];?></h3>
                    
                    <?php
                    }
					?>
					<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='sp3'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <p><?php echo $data['p_name'];?></p>
                    
                    <?php
                    }
					?>
                               
                                
							
                            </div>
                        </div>
						
                        </div>
                        
                    <!-- end row 1 -->
                    
                    <!-- start row 2 -->
                    
                    
                    <!-- end row 3 -->
                    <!-- start row 4 -->
                    
                    <div class="row mt-lg-5 pt-md-5">
                       
                        <div class="col-lg-4 col-md-6 my-md-0 mt-5">
                            <div class="abt-block">
                                <div class="serv_abs serv_bottom">
                                    <i class="fas fa-desktop" aria-hidden="true"></i>
                                </div>
								<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='s4'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <h3 style =   "background-color:orange;padding:6px;"><?php echo $data['p_name'];?></h3>
                    
                    <?php
                    }
					?>
					<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='sp4'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <p><?php echo $data['p_name'];?></p>
                    
                    <?php
                    }
					?>
                                
                                
							<br>	
								
								
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 my-md-0 mt-5">
                            <div class="abt-block">
                                <div class="serv_abs serv_bottom">
                                    <i class="fas fa-gamepad" aria-hidden="true"></i>
                                </div>
								<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='s5'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <h3 style =   "background-color:orange;padding:6px;"><?php echo $data['p_name'];?></h3>
                    
                    <?php
                    }
					?>
					<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='sp5'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <p><?php echo $data['p_name'];?></p>
                    
                    <?php
                    }
					?>
								
                               
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 my-lg-0 mt-5 mx-auto service-grid-3">
                            <div class="abt-block mt-md-0 mt-5">
                                <div class="serv_abs serv_bottom">
                                    <i class="fas fa-tasks" aria-hidden="true"></i>
                                </div>
								<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='s6'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <h3 style =   "background-color:orange;padding:6px;"><?php echo $data['p_name'];?></h3>
                    
                    <?php
                    }
					?>
					<?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='sp6'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <p><?php echo $data['p_name'];?></p>
                    
                    <?php
                    }
					?>
                                
                                
								<br><br>
                            </div>
                        </div>
						
                    </div>
                    </div>
					
					
                    
                    <!-- end row 2 -->
                    <!-- start row 3 -->
                   
                    
                    
                    <!-- end row 4 -->
                    
                </div>
            </div>
        </div>
    </section>
    </div>
  </div>
  <!-- //our services -->
  
  
  <!-- our clients -->
  <div class =  "own">
    
  <div class =  "own">
    <div class="container-fluid p-0">
      <div class="text-center wthree-title pb-sm-5 pb-3">
	  <?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "select * from paragraphs where p_status='h3'";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					
					?>
					
                 <h4 class="w3l-sub"><?php echo $data['p_name'];?></h4>
                    
                    <?php
                    }
					?>
        
        <span></span>
      </div>
	  
	  <marquee>
      <ul style="display:inline;">
	    <li>
	  <?php 
					$con=mysqli_connect('localhost','root','','ziibay');
					$query= "Select*from images where img_status=1";
					$run=mysqli_query($con,$query);
					while ($data = mysqli_fetch_array($run))
					{
					?>
					
              
	<img src="<?php echo '../admin/'.$data['img_name'];?>"  width="" height="200" style="padding:10px;" >
	    	<?php echo $data['img_detail'];?>
		
		       
		
                    
                    <?php
                    }
					?>
         </li>
         
				
				
		
          
       
        
      </ul>
	  </marquee>
    </div>
  </div>  </div>
  <!-- //our clients -->
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