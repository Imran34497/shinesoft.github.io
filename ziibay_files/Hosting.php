<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from ziibay.com/hosting.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2020 19:14:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>SHINE SOFT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="pakistan best hosting,best pakistan domain hosting company , best hosting , ssd hosting , pakistan hosting company ,cheap hosting , good hosting" content="ZIIBAY SOFT" />
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
    <!-- lightbox -->
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!-- portfolio -->
    <link rel="stylesheet" href="css/portfolio.css">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="http://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- //online-fonts -->
    <style>
		#h3{
			font-size: 1.05em;
    letter-spacing: 2px;
    font-weight: 600;
    text-transform: uppercase;
    padding-bottom: 14px;
    border-bottom: 1px solid #2d917e;
    color: #fff;
		}
		
	</style>
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

<!-- Mirrored from ziibay.com/hosting.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2020 19:14:13 GMT -->
</html>    <!-- //header -->
    <!-- inner banner -->
	<br><br><br><br>
    <style="padding-top:200px">
    <img src="images/hosting.jpg" width="1350px;" height="350px" class="responsive" >
	</style>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index-2.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Hosting</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- portfolio -->
    
    <section id="section03" class="py-lg-5 portfolio-agile pt-3 pb-5">
    
         <div class="container py-lg-5">
            <div class="text-center wthree-title pb-sm-5 pb-3">
                <h4 class="w3l-sub">Hosting Features and Plan</h4>
                <span></span>
            </div>
            <div class="row">
                <ul class="nav nav-pills my-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="showall-tab" data-toggle="pill" href="#showall" role="tab" aria-controls="showall" aria-selected="true">Hosting Information</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" id="dedicated-tab" data-toggle="pill" href="#dedicated" role="tab" aria-controls="showall" aria-selected="false">Dedicated Servers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="categorys-tab" data-toggle="pill" href="#categorys" role="tab" aria-controls="categorys" aria-selected="false">VPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Tab2-Image-tab" data-toggle="pill" href="#Tab2-Image" role="tab" aria-controls="Tab2-Image" aria-selected="false">Hosting Plans</a>
                    </li>

                </ul>
            </div>
            <hr style="margin-top:-20px;">
            <div class="container">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="showall" role="tabpanel" aria-labelledby="showall-tab">
                         <section id="section02">
        					
              					 
									 <!-- start row 1 -->
									   <div class="row mt-lg-6 pt-md-6">
										<div class="col-lg-12">
											<h4 style="color:orange;"><b>Feature-rich, fast Unlimited SSD web hosting. 100% network uptime with professional UK based support.</b></h4>
											<br>
												<h5>&#x2611	Unlimited Websites with Separate Domains</h5>
												<h5>&#x2611	Unlimited MySQL Databases without Size Limits</h5>
												<h5>&#x2611	Regular Backups</h5>
												<h5>&#x2611	Unlimited Email Accounts</h5>
												<h5>&#x2611	Unlimited Fast 100% SSD Disk Space</h5>
												<h5>&#x2611	Unlimited UK Bandwidth / Transfer</h5>
												<h5>&#x2611	Free 1,000Gbps DDoS protection</h5>
												<h5>&#x2611	Free 256-bit SSL Certificates</h5>
												<h5>&#x2611	Free Website Builder</h5>
												<h5>&#x2611	cPanel Control Panel</h5>
												<h5>&#x2611	Free SpamExperts SPAM Protection</h5>
												<h5>&#x2611	FREE Domain Name for the First Year (Annual Billing)</h5>
												<br><br>
												
	
											</div>
										<div>
											
											
										<div class="row mt-lg-12 pt-md-6">
										<h2 style="color:orange;"><b>What do you get?</b></h2>
											<div class="col-lg-12">
											
												<br>
												<h5>⦁	UK Data Centre with full UK based support</h5>
												<h5>⦁	Litespeed Powered High-Performance Hosting</h5>
												<h5>⦁	100% Super Fast SSD-Powered Disk Space</h5>
												<h5>⦁	CloudLinux Server Security / Account Separation</h5>
												<h5>⦁	Imunify360 Intrusion & Malware protection</h5>
												<h5>⦁	Unlimited Sites Under a Single Control Panel</h5>
												<h5>⦁	Modern and intuitive cPanel with ‘Paper Lantern’ Theme</h5>
												<h5>⦁	Online File Manager / FTP / FTPs Access</h5>
												<h5>⦁	Website, Database, and Email Backups</h5>
												<h5>⦁	Hotlink & leech protection</h5>
												<h5>⦁	Unlimited Mailboxes with Auto Responders</h5>
												<h5>⦁	SpamExperts SPAM Protection</h5>
												<h5>⦁	PHP 4, 5 and 7 Support (4.4 / 5.1 to 5.6 and 7.0 to 7.2 )</h5>
												<h5>⦁	MYSQL - MariaDB database support</h5>
												<h5>⦁	Secure WebMail (RoundCube, Horde and SquirrelMail)</h5>
												<h5>⦁	Mailing List Support</h5>
												<h5>⦁	phpMyAdmin Database Control</h5>
												<h5>⦁	Full PHP Memory / Timeout and Upload Control</h5>
												<h5>⦁	CGI & Perl Script Support</h5>
												<h5>⦁	CronJob / Scheduled Task Support</h5>
												<h5>⦁	Zend Guard Loader Support</h5>
												<h5>⦁	Mcrypt and ionCube PHP Support</h5>
												<h5>⦁	Custom 404 Error Pages</h5>
												<h5>⦁	POP3 / POP3s and IMAP / IMAPS Support</h5>

											</div>
											<br><br>
											<div class="col-lg-12 pt-md-6">
											<br>
												<h2 style="color:orange"><b>100% Network Uptime</b></h2>
												<h5>
												Our high-performance fully redundant network provides full failover to ensure your website has the highest network availability
												</h5>
												<h2 style="color:orange"><b>Free DDoS protection</b></h2>
												<h5>
												Our advanced 1,000Gbps DDoS protection is provided absolutely FREE on your hosting account to help mitigate unwanted traffic spikes.
												</h5>
												<h2 style="color:orange"><b>Free SSL Certificates</b></h2>
												<h5>
												Free SSL certificate with Let's Encrypt for all websites managed under your hosting package.
												</h5>
												<h2 style="color:orange"><b>cPanel control panel</b></h2>
												<h5>
												We provide the fully featured cPanel control panel as standard. With a vast array of great features, making hosting a website easy.
												</h5>
												<h2 style="color:orange"><b>30-day guarantee</b></h2>
												<h5>
												We know you will love our hosting just as much as we do! If you don't for any reason, we will refund you during the first 30 days.
												</h5>
												<h2 style="color:orange"><b>Truly unlimited web hosting is hard to find; but it is exactly what we offer you here.</b></h2>
													<h5>Our unlimited web hosting allows you to add as many domains as you wish without paying any extras hosting fees. It is truly unlimited web hosting.
														Thanks to our highly efficient server hardware, we are able to provide you with unlimited web hosting that has the seamless capacity to expand to your business needs.
														Do you have domains with other web hosts? We are ready to give you all the support that you need to transfer to your new hosting account with us.
														Our unlimited web hosting package also supports various cms and ecommerce platforms including WordPress, Joomla! & more.
														Get in touch and talk with our highly knowledgeable support staff today!
													</h5>

											</div>
										</div>
									
										
									</div>
									<!-- end row 1 -->
  							
   							 </section>                        
                    </div>

	<div class="tab-pane fade" id="dedicated" role="tabpanel" aria-labelledby="dedicated-tab">
      <!-- Dedicated Server plans -->
    <section class="py-lg-5 py-5 services-w3sec" id="pricing" style="margin-top: -25px;">
        <div class="container">
            <div class="agileabt-w3 pt-lg-5">
                <div class="row my-md-5">
                    <!-- Table #1  -->
                    <div class="col-lg-4 col-md-6">
                        <div class="w3ls-pricing card text-center">
                            <div class="card-header">
                                <h4 class="display-2">
                                    <span class="currency">£</span>59 
                                    <span class="period">/month</span>
                                </h4>
                            </div>
                            <div class="card-block">
							<h4 class="card-title price-title">
                                   <b>Dual-Core</b>
                                </h4>
                                <h5 class="card-title price-title">
                                    
                                </h5>
                                <ul class="list-group list-group-flush">
                                    <h5 style="color:orange"><b>Intel Xeon 3040 2x 1.90 GHz</b></h5>
									<li class="list-group-item">250 GB SATA HDD</li>
                                    <li class="list-group-item">2 GB of memory(RAM)</li>
                                    <li class="list-group-item">Dual-Core Inter Xeon 3040</li>
                                    <li class="list-group-item">Additional IPs: 5 Usable</li>
									 <li class="list-group-item">5 TB Traffic</li>
                                    <li class="list-group-item">Linux/Windows</li>
                                </ul>

                                <a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" class="btn btn-gradient mt-4" role="button">Order Package Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Table #2s  -->
                    <div class="col-lg-4 col-md-6 price-wthree mt-md-0 mt-5">
                        <div class="w3ls-pricing card text-center service-active">
                            <div class="card-header">
                                <h4 class="display-2">
                                    <span class="currency">£</span>79
                                    <span class="period">/month</span>
                                </h4>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title price-title">
                                    <b>Dual-Core</b>
                                </h4>
                                <ul class="list-group list-group-flush">
									<h5 style="color:orange"><b>CPU 2x 3.20 GHZ</b></h5>
                                    <li class="list-group-item">500 GB SATA</li>
                                    <li class="list-group-item">3 GB of Memory( RAM)</li>
                                    <li class="list-group-item">Dual-Core 2x 3.20 GHz CPU</li>
                                    <li class="list-group-item">Additional IPs: 5 Usable</li>
									  <li class="list-group-item">5 TB Traffic</li>
                                    <li class="list-group-item">Linux/Windows</li>
                                </ul>
                                <a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" class="btn btn-gradient mt-4" role="button">Order Package Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Table #3  -->
                    <div class="col-lg-4 col-md-6 mx-sm-auto mt-lg-0 mt-5">
                        <div class="w3ls-pricing card text-center">
                            <div class="card-header">
                                <h4 class="display-2">
                                    <span class="currency">£ </span>99
                                    <span class="period">/month</span>
                                </h4>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title price-title">
                                    <b>Quad-Core</b>
                                </h4>
                                <ul class="list-group list-group-flush">
                                   	<h5 style="color:orange"><b>Intel Xeon X3220 Kentsfield</b></h5>
                                    <li class="list-group-item">500 GB SATA</li>
                                    <li class="list-group-item">8 GB of memory(RAM)</li>
                                    <li class="list-group-item">Qaud-Core Intel Xeon X3220</li>
                                    <li class="list-group-item">Additional IPs: 5 Usable</li>
									  <li class="list-group-item">10 TB Traffic</li>
                                    <li class="list-group-item">Linux/Windows</li>
									<br>
                                </ul>
                                <a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" class="btn btn-gradient mt-4" role="button">Order Package Now</a>
                            </div>
							
                        </div>
                    </div>
					 
            </div>
        </div>
		</div>
		<!--Table#4-->
		 <div class="col-lg-4 col-md-6 mx-sm-auto mt-lg-0 mt-5">
                        <div class="w3ls-pricing card text-center">
                            <div class="card-header">
                                <h4 class="display-2">
                                    <span class="currency">£ </span>129
                                    <span class="period">/month</span>
                                </h4>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title price-title">
                                    <b>Quad-Core</b>
                                </h4>
                                <ul class="list-group list-group-flush">
                                   	<h5 style="color:orange"><b>Intel Xeon E3-1230 V2 Lvy Bridge</b></h5>
                                    <li class="list-group-item">500 GB SATA HDD</li>
                                    <li class="list-group-item">16 GB of memory(RAM)</li>
                                    <li class="list-group-item">4*3.3 GHz,8M Cache CPU</li>
                                    <li class="list-group-item">Additional IPs: 5 Usable</li>
									  <li class="list-group-item">10 TB Traffic</li>
                                    <li class="list-group-item">Linux/Windows</li>
                                </ul>
                                <a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" class="btn btn-gradient mt-4" role="button">Order Package Now</a>
                            </div>
							
                        </div>
                    </div>
				<!--Table#5-->
					 <div class="col-lg-4 col-md-6 mx-sm-auto mt-lg-0 mt-5">
                        <div class="w3ls-pricing card text-center">
                            <div class="card-header">
                                <h4 class="display-2">
                                    <span class="currency">£ </span>149
                                    <span class="period">/month</span>
                                </h4>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title price-title">
                                   <b>2 x Xeon Qaud-Core</b>
                                </h4>
                                <ul class="list-group list-group-flush">
                                   	<h5 style="color:orange"><b>CPU 8x 2.40 GHz,8M Cache</b></h5>
                                    <li class="list-group-item">2x1 TB SATA HDD</li>
                                    <li class="list-group-item">32 GB of memory(RAM)</li>
                                    <li class="list-group-item">8x2.40 GHz,8M Cache CPU</li>
                                    <li class="list-group-item">Additional IPs: 5 Usable</li>
									  <li class="list-group-item">20 TB Traffic</li>
                                    <li class="list-group-item">Linux/Windows</li>
                                </ul>
                                <a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" class="btn btn-gradient mt-4" role="button">Order Package Now</a>
                            </div>
							
                        </div>
						
                </div>
    </section>
    
                    </div>
						<!-- //Dedicated Server plans --> 
                    <div class="tab-pane fade" id="categorys" role="tabpanel" aria-labelledby="categorys-tab">
      <!-- VPS(Virtual Private Services) plans -->
    <section class="py-lg-5 py-5 services-w3sec" id="pricing" style="margin-top: -25px;">
        <div class="container">
            <div class="agileabt-w3 pt-lg-5">
                <div class="row my-md-5">
                    <!-- Table #1  -->
                    <div class="col-lg-4 col-md-6">
                        <div class="w3ls-pricing card text-center">
                            <div class="card-header">
                                <h4 class="display-2">
                                    <span class="currency">£</span>14.99 
                                    <span class="period">/month</span>
                                </h4>
                            </div>
                            <div class="card-block">
							<h4 class="card-title price-title">
                                   <b>Base</b>
                                </h4>
                               
                                <ul class="list-group list-group-flush">
                                    <h5 style="color:orange"><b>Starter Package</b></h5>
									<li class="list-group-item">50 GB Hard Drive</li>
                                    <li class="list-group-item">1 GB RAM</li>
                                    <li class="list-group-item">1 CPU Cores</li>
                                    <li class="list-group-item">Easy Instalments Monthly/Yearly</li>
									 <li class="list-group-item">Control Panel from £ 4/month</li>
                                    <li class="list-group-item">Operating System from  £ 5.00/month </li>
                                </ul>

                                <a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" class="btn btn-gradient mt-4" role="button">Order Package Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Table #2s  -->
                    <div class="col-lg-4 col-md-6 price-wthree mt-md-0 mt-5">
                        <div class="w3ls-pricing card text-center service-active">
                            <div class="card-header">
                                <h4 class="display-2">
                                    <span class="currency">£</span>45.99
                                    <span class="period">/month</span>
                                </h4>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title price-title">
                                    <b>Plus</b>
                                </h4>
                                <ul class="list-group list-group-flush">
									<h5 style="color:orange"><b>Starter Plus Package</b></h5>
                                    <li class="list-group-item">100 GB Hard Drive</li>
                                    <li class="list-group-item">3 GB RAM</li>
                                    <li class="list-group-item">2 CPU Cores</li>
                                    <li class="list-group-item">Easy Instalments Monthly/Yearly</li>
									  <li class="list-group-item">Control Panel from £ 4/month</li>
                                    <li class="list-group-item">Operating System from £ 5.00/month</li>
                                </ul>
                                <a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" class="btn btn-gradient mt-4" role="button">Order Package Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Table #3  -->
                    <div class="col-lg-4 col-md-6 mx-sm-auto mt-lg-0 mt-5">
                        <div class="w3ls-pricing card text-center">
                            <div class="card-header">
                                <h4 class="display-2">
                                    <span class="currency">£ </span>59.99
                                    <span class="period">/month</span>
                                </h4>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title price-title">
                                    <b>Advance Package</b>
                                </h4>
                                <ul class="list-group list-group-flush">
                                   	<h5 style="color:orange"><b>Standard Package for Business</b></h5>
                                    <li class="list-group-item">120 GB Hard Drive</li>
                                    <li class="list-group-item">4 GB RAM</li>
                                    <li class="list-group-item">3 CPU Cores</li>
                                    <li class="list-group-item">Easy Instalments Monthly/Yearly</li>
									  <li class="list-group-item">Control Panel from £ 4/month</li>
                                    <li class="list-group-item">Operating System from £ 5.00/month</li>
                                </ul>
                                <a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" class="btn btn-gradient mt-4" role="button">Order Package Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //VPS plans --> 
                    </div>
    <div class="tab-pane fade" id="Tab2-Image" role="tabpanel" aria-labelledby="Tab2-Image-tab">
      <!-- pricing plans -->
    <section class="py-lg-5 py-5 services-w3sec" id="pricing" style="margin-top: -25px;">
        <div class="container">
            <div class="agileabt-w3 pt-lg-5">
                <div class="row my-md-5">
                    <!-- Table #1  -->
                    <div class="col-lg-4 col-md-6">
                        <div class="w3ls-pricing card text-center">
                            <div class="card-header">
                                <h4 class="display-2">
                                    <span class="currency">£</span>50 
                                    <span class="period">/year</span>
                                </h4>
                            </div>
                            <div class="card-block">
							<h4 class="card-title price-title">
                                   <b>Professional Hosting</b>
                                </h4>
                               
                                <ul class="list-group list-group-flush">
                                    <h5 style="color:orange"><b>For corporate companies</b></h5>
									<li class="list-group-item">Ultimate Web Space</li>
                                    <li class="list-group-item">Ultimate BandWidth</li>
                                    <li class="list-group-item">Ultimate Database</li>
                                    <li class="list-group-item">Ultimate Email Accounts</li>
                                </ul>

                                <a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" class="btn btn-gradient mt-4" role="button">Order Hosting Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Table #2s  -->
                    <div class="col-lg-4 col-md-6 price-wthree mt-md-0 mt-5">
                        <div class="w3ls-pricing card text-center service-active">
                            <div class="card-header">
                                <h4 class="display-2">
                                    <span class="currency">£</span>35
                                    <span class="period">/year</span>
                                </h4>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title price-title">
                                    <b>Business Hosting</b>
                                </h4>
                                <ul class="list-group list-group-flush">
									<h5 style="color:orange"><b>Medium size companies</b></h5>
                                    <li class="list-group-item">20 GB Web Space</li>
                                    <li class="list-group-item">50 GB Bandwidth</li>
                                    <li class="list-group-item">50 GB Database</li>
                                    <li class="list-group-item">50 Email Accounts</li>
                                </ul>
                                <a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" class="btn btn-gradient mt-4" role="button">Order Hosting Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Table #3  -->
                    <div class="col-lg-4 col-md-6 mx-sm-auto mt-lg-0 mt-5">
                        <div class="w3ls-pricing card text-center">
                            <div class="card-header">
                                <h4 class="display-2">
                                    <span class="currency">£ </span>25
                                    <span class="period">/Year</span>
                                </h4>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title price-title">
                                    <b>Standard Hosting</b>
                                </h4>
                                <ul class="list-group list-group-flush">
								<h5 style="color:orange"><b>Small size companies</b></h5>
                                    <li class="list-group-item">5 GB Web Space</li>
                                    <li class="list-group-item">20 GB Bandwidth</li>
                                    <li class="list-group-item">30 Database</li>
                                    <li class="list-group-item">30 Email Accounts</li>
									<br>
                                </ul>
                                <a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" class="btn btn-gradient mt-4" role="button">Order Hosting Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //pricing plans --> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //portfolio -->
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