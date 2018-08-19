<!DOCTYPE html>
<html lang="en">

	<title>
	@yield('title')
	</title>

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
	    <!-- Flaticon CSS -->
	    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
	    <!-- font-awesome CSS -->
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <!-- Offcanvas CSS -->
	    <link href="css/hippo-off-canvas.css" rel="stylesheet">
	    <!-- animate CSS -->
	    <link href="css/animate.css" rel="stylesheet">
	    <!-- owl.carousel CSS -->
	    <link href="css/owl.theme.css" rel="stylesheet">
	    <link href="css/owl.carousel.css" rel="stylesheet">
	    <!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="css/style.css" rel="stylesheet">
	    <!-- Responsive CSS -->
	    <link href="css/responsive.css" rel="stylesheet">

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
		    <script src="js/vendor/html5shim.js"></script>
		    <script src="js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>

<body id="page-top" data-spy="scroll"  data-target=".navbar">

  <div id="st-container" class="st-container">
			  	<header class="header">
					<nav class="navbar navbar-default" role="navigation">
						<div class="container">
						<div class="navbar-header">
		                       <button type="button" class="navbar-toggle collapsed" >
		                          <span class="sr-only">Toggle navigation</span>
		                          <i class="fa fa-bars"></i>
		                        </button>
							    <!-- offcanvas-trigger-effects -->
								<h1 class="logo"><a class="navbar-brand" href="index.html"><img class="img-fluid" height= "60" width = "298" src="img/logo.png" alt=""></a></h1>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="search">Search</a></li>
									<li><a class="feedback-modal" data-toggle="modal" data-target="#feedModal" href="contact">Contact Us</a></li>
									<li><a href="search">Log In</a></li>
									<li><a href="about">About</a></li>
								</ul>
							</div> <!--/.navbar-collapse -->
						</div><!-- /.container -->
					</nav>
				</header>

@yield('content')

		        <!-- footer start -->
				<footer id="contact" class="footer-widget-wrapper">
					<div class="container">
						<div class="row">

							<div class="col-sm-3 col-md-2 col-lg-2">
								<div class="footer-widget">
									<h3>Social</h3>
									<ul>
										<li><a href="#">Twitter</a></li>
										<li><a href="#">Facebook</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-sm-3 col-md-2 col-lg-2">
								<div class="footer-widget">
									<h3>Website Authors</h3>
									<ul>
										<li><a href="#">Robert Shelton</a></li>
										<li><a href="#">Annie K. Lamar</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-sm-3 col-md-3">
								<div class="footer-widget">
									<h3>Get in Touch</h3>

									<a href="mailto:#">classicalreceptions@gmail.com</a>
									<a class="feedback-modal" data-toggle="modal" data-target="#feedModal" href="contact">Make a Suggestion</a>

									<!-- Modal -->
									<div class="modal fade" id="feedModal" tabindex="-1" role="dialog" aria-labelledby="feedModalLabel" aria-hidden="true">
									  <div class="modal-dialog modal-lg">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="feedModalLabel">Make a Suggestion</h4>
									      </div>
									      <div class="modal-body">
											<form id="contactForm" action="sendemail.php" method="POST">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
														    <label for="name">Name</label>
														    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="Name">
														</div>
													</div>
													<div class="col-md-6">
													  <div class="form-group">
													    <label for="email">Email address</label>
													    <input id="email" name="email" type="email" class="form-control" required="" placeholder="Email">
													  </div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
													  <div class="form-group">
													    <label for="phone">Phone</label>
													    <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone">
													  </div>
													</div>
													<div class="col-md-6">
													  <div class="form-group">
													    <label for="subject">Subject</label>
													    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="Subject">
													  </div>
													</div>
												</div>

												<div class="form-group text-area">
													<label for="message">Message</label>
													<textarea id="message" name="message" class="form-control" rows="6" required="" placeholder="Message"></textarea>
												</div>

												<button type="submit" class="btn btn-primary">Send Message</button>
											</form>
									      </div>
									    </div>
									  </div>
									</div>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
						</div><!-- /.row -->
<!--
						<div class="row">
							<div class="col-xs-12 text-center">
								<div class="copyright">
									<p>&copy; 2017 Orchid.  Design by : <a href="https://uicookies.com" title="uiCookies">uiCookies</a></p>
								</div>
							</div>
						</div>
-->

					</div><!-- /.container -->
				</footer>
				<!-- footer end -->

    	<!-- OFFCANVAS MENU -->
    	<div class="offcanvas-menu offcanvas-effect visible-xs">
	        <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
	        <h3>Sidebar Menu</h3>
	        <ul class="list-unstyled">
	            <li class="active"><a class="offcanvas-link" href="#page-top">Home<span class="sr-only">(current)</span></a></li>
									<li><a href="search">Search</a></li>
									<li><a class="feedback-modal" data-toggle="modal" data-target="#feedModal" href="contact">Contact Us</a></li>
									<li><a href="search">Log In</a></li>
									<li><a href="about">About</a></li>
	        </ul>
      	</div><!-- .offcanvas-menu -->
	</div><!-- /st-container -->


		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>


	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- wow.min.js -->
	    <script src="js/wow.min.js"></script>
	    <!-- smoothscroll -->
	    <script src="js/smoothscroll.js"></script>
	    <!-- twitterFetcher_min -->
	    <script src="js/twitterFetcher_min.js"></script>
	    <!-- owl.carousel -->
	    <script src="js/owl.carousel.min.js"></script>
		<!-- Offcanvas Menu -->
		<script src="js/hippo-offcanvas.js"></script>
		<!-- inview -->
		<script src="js/jquery.inview.min.js"></script>
		<!-- stellar -->
		<script src="js/jquery.stellar.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>
	    <!-- Scrolling Nav JavaScript -->
	    <script src="js/jquery.easing.min.js"></script>
		<!-- flickerPhoto -->
		<script src="js/flickerPhoto.min.js"></script>
		<!-- Shuffle.min js -->
		<script src="js/jquery.shuffle.min.js"></script>
	    <!-- GOGLE MAP -->
	    <script src="https://maps.googleapis.com/maps/api/js"></script>
	    <!-- Custom Script -->
	    <script src="js/scripts.js"></script>
	</body>
</html>
