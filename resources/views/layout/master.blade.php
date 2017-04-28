<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>@yield('title')</title>

	    <!-- Bootstrap Core CSS -->
    	<link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    	<!-- Custom CSS -->
    	<link href="{{ URL::asset('assets/css/infinitech.css')}}" rel="stylesheet">

    	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

	</head>

	<body>

		<!-- Navigation -->
		@include('include.nav')	

	    <!-- Header -->
	    <header>
	        <div class="container">
	            <div class="intro-text">
	                <div class="intro-lead-in">Welcome To INFINITECH STUDIO!</div>
	                <div class="intro-heading">It's Nice To Meet You</div>
	                <a href="./shop" class="page-scroll btn btn-xl">Visit Our Shop</a>
	            </div>
	        </div>
	    </header>

	    <!-- Services Section -->
	    <section id="services">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2 class="section-heading">Services</h2>
	                    <h3 class="section-subheading text-muted">Delivering compelling designs.</h3>
	                </div>
	            </div>
	            <div class="row text-center">
	                <div class="col-md-4">
	                	<img src="img/webicon.png">
	                    <h4 class="service-heading">Web Design</h4>
	                    <p class="text-muted">Exceptional websites blending technolgy and right message. We focus on usability, impact and results.</p>
	                </div>
	                <div class="col-md-4">
	                    <img src="img/palleticon.png">
	                    <h4 class="service-heading">Graphics Design</h4>
	                    <p class="text-muted">We deliver compelling and inspired print material to promote your communiction efforts.</p>
	                </div>
	                <div class="col-md-4">
	                    <img src="img/app.png">
	                    <h4 class="service-heading">App Development</h4>
	                    <p class="text-muted">Supremely functional applications engineered applications engineered for stability, perfomance and long term adaptability</p>
	                </div>
	            </div>
	        </div>
	    </section>

    	<!-- Portfolio Grid Section -->
	    <section id="portfolio" class="bg-light-gray">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2 class="section-heading">Portfolio</h2>
	                    <h3 class="section-subheading text-muted">Leaving behind a track of quality work.</h3>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-md-4 col-sm-6 portfolio-item">
	                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
	                        <div class="portfolio-hover">
	                            <div class="portfolio-hover-content">
	                                <i class="fa fa-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
	                    </a>
	                    <div class="portfolio-caption">
	                        <h4>Round Icons</h4>
	                        <p class="text-muted">Graphic Design</p>
	                    </div>
	                </div>
	                <div class="col-md-4 col-sm-6 portfolio-item">
	                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
	                        <div class="portfolio-hover">
	                            <div class="portfolio-hover-content">
	                                <i class="fa fa-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
	                    </a>
	                    <div class="portfolio-caption">
	                        <h4>Startup Framework</h4>
	                        <p class="text-muted">Website Design</p>
	                    </div>
	                </div>
	                <div class="col-md-4 col-sm-6 portfolio-item">
	                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
	                        <div class="portfolio-hover">
	                            <div class="portfolio-hover-content">
	                                <i class="fa fa-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
	                    </a>
	                    <div class="portfolio-caption">
	                        <h4>Treehouse</h4>
	                        <p class="text-muted">Website Design</p>
	                    </div>
	                </div>
	                <div class="col-md-4 col-sm-6 portfolio-item">
	                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
	                        <div class="portfolio-hover">
	                            <div class="portfolio-hover-content">
	                                <i class="fa fa-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/golden.png" class="img-responsive" alt="">
	                    </a>
	                    <div class="portfolio-caption">
	                        <h4>Golden</h4>
	                        <p class="text-muted">Website Design</p>
	                    </div>
	                </div>
	                <div class="col-md-4 col-sm-6 portfolio-item">
	                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
	                        <div class="portfolio-hover">
	                            <div class="portfolio-hover-content">
	                                <i class="fa fa-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
	                    </a>
	                    <div class="portfolio-caption">
	                        <h4>Escape</h4>
	                        <p class="text-muted">Website Design</p>
	                    </div>
	                </div>
	                <div class="col-md-4 col-sm-6 portfolio-item">
	                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
	                        <div class="portfolio-hover">
	                            <div class="portfolio-hover-content">
	                                <i class="fa fa-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
	                    </a>
	                    <div class="portfolio-caption">
	                        <h4>Dreams</h4>
	                        <p class="text-muted">Website Design</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

	    <!-- jQuery -->
	    <script src="vendor/jquery/jquery.min.js"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>