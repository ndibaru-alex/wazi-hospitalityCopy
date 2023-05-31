<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wazi Hospitality">
    <meta name="author" content="#">
    <title>Wazi Hospitality</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/vendors.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="css/shop.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Page Preload -->
				
	<header class="header clearfix element_to_stick">
		<div class="layer"></div><!-- Opacity Mask Menu Mobile -->
		<div class="container-fluid">
		<div id="logo">
			<a href="index.php">
				<img src="img/logo.svg" width="140" height="35" alt="" class="logo_normal">
				<img src="img/logo_sticky.svg" width="140" height="35" alt="" class="logo_sticky">
			</a>
		</div>

	

		<!-- /top_menu -->
		<a href="#0" class="open_close">
			<i class="icon_menu"></i><span>Menu</span>
		</a>
		<nav class="main-menu">

		    <div id="header_menu">
		        <a href="#0" class="open_close">
		            <i class="icon_close"></i><span>Menu</span>
		        </a>
		        <a href="index.php"><img src="img/logo.svg" width="140" height="35" alt=""></a>
		    </div>
		    
			<ul>
		        <li class="submenu">
		            <a href="index.php" class="show-submenu">Home</a>
		        </li>

		        <li class="submenu">
		            <a href="about.php" class="show-submenu">About Us</a>
		        </li>

		         <li class="submenu">
		            <a href="#0" class="show-submenu">Wazi Solutions</a>
		            <ul>
		                
		                <li><a href="cleaning-solutions.php">Cleaning solutions</a></li>
						<li><a href="staff-training.html">Hospitality Staff training</a></li>
						<li><a href="facility-layout-and-designs.php">Facility Layout & Designs</a></li>
						
						<li><a href="cuisine.php">Cuisine</a></li>
						<li><a href="catering.php">Catering</a></li>
						<li><a href="pest-control-solutions.html">Pest Control</a></li>
						
		            </ul>
		        </li>

				<li class="submenu">
		            <a href="contacts.php" class="show-submenu">Contact Us</a>
		        </li>
		        
		        <li><a href="blog.php" class="btn_top">Blog</a></li>

		    </ul>
		</nav>
	</div>
	
	</header>
	<!-- /header -->
	

	<main>
		<div class="hero_single inner_pages background-image" data-background="url(img/hero_menu.jpg)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Pest Control Solutions</h1>
							<p>Order food with home delivery or take away</p>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="frame white"></div>
		</div>
		<!-- /hero_single -->

		<div class="container margin_60_40">
			<div class="row">
	            <div class="col-lg-6 magnific-gallery">
	                <p>
	                    <a href="assets/images/pest-control.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="assets/images/pest-control.jpg" alt="" class="img-fluid"></a>
	                </p>
	            </div>
	            <div class="col-lg-6" id="sidebar_fixed">
	                <div class="prod_info">
	                    <h1>Pest Control</h1>
						<p>
							Nobody would like to deal with pests in their homes or businesses. Pests can be so disturbing, embarrassing and at times dangerous. our aim is to stop pest infestation early enough before they become a menace.
						</p>
						<p>
							If pests have already infested your home, office or business, we offer solutions to your problem. we fumigate against cockroaches, bedbugs, mosquitos, fleas, rats, snakes, moths, termites and many other pests.
						</p>
	                </div>
	                <!-- /prod_info -->
	            </div>
	        </div>
	        <!-- /row -->			
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->

	<?php
		include_once("includes/footer.php");
	?>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->
		
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/common_func.js"></script>
    <script src="phpmailer/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/specific_shop.js"></script>
	<script src="js/sticky_sidebar.min.js"></script>
	<script>
		// Sticky sidebar
		$('#sidebar_fixed').theiaStickySidebar({
			minWidth: 991,
			updateSidebarHeight: true,
			additionalMarginTop: 90
		});
	</script>

</body>

</html>