<?php
	include_once("admin/database/Database.php");
	include_once("models/Gallery.php");
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.ansonika.com/foores/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 May 2023 08:19:46 GMT -->
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
	    <div class="hero_single inner_pages background-image" data-background="url(img/hero_general.jpg)">
	        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
	            <div class="container">
	                <div class="row justify-content-center">
	                    <div class="col-xl-9 col-lg-10 col-md-8">
	                        <h1>Media Gallery</h1>
	                        <p>Cooking delicious and tasty food since 2005</p>
	                    </div>
	                </div>
	                <!-- /row -->
	            </div>
	        </div>
	        <div class="frame gray"></div>
	    </div>
	    <!-- /hero_single -->
	    <div class="bg_gray">
	        <div class="container margin_60_40">
	            <div class="main_title center">
	                <span><em></em></span>
	                <h2>Welcome to our gallery</h2>
	            </div>
	            <div class="grid">
	                <ul class="magnific-gallery clearfix">
						<?php
							$conn = new Database();
							$db = $conn -> connection();

							$gallery = new Gallery($db);
							$galleries = $gallery -> getGallery();

							if($galleries){
								foreach($galleries as $gall){
						?>
								<li>
									<div class="item">
										<div class="item-img" data-cue="slideInUp">
											<img src="admin/Images/<?php echo $gall['Image'] ?>" alt="">
											<div class="content">
												<a href="admin/Images/<?php echo $gall['Image'] ?>" title="Photo title" data-effect="mfp-zoom-in"><i class="arrow_expand"></i></a>
											</div>
										</div>
									</div>
								</li>
						<?php
								}
							}else{
								echo "<div class='alert alert-danger'>No Images in your gallery</div>";
							}
						?>
	                </ul>
	            </div>
	            <!-- /grid gallery -->
	        </div>
	        <!-- /container -->
	    </div>
	    <!-- /bg_gray -->
	</main>
	<!-- /main -->

	<footer>
	    <div class="frame black"></div>
	    <div class="container">
	        <div class="row">
	            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
	                <div class="footer_wp">
	                    <i class="icon_pin_alt"></i>
	                    <h3>Address</h3>
	                    <p>Mbagathi Road,<br> Nairobi, Kenya</p>
	                </div>
	            </div>

	            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
	                <div class="footer_wp">
	                    <i class="icon_tag_alt"></i>
	                    <h3>Enquiries</h3>
	                    <p><a href="tel:+254110239861">+254 110 239861</a><br><a href="wazicuisine@gmail.com">wazicuisine@gmail.com</a></p>
	                </div>
	            </div>

	            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
	                <div class="footer_wp">
	                    <i class="icon_clock_alt"></i>
	                    <h3>Opening Hours</h3>
	                    <ul>
	                        <li>Mon - Sat: 08am - 7pm</li>
	                        <li>Sunday: Closed</li>
	                    </ul>
	                </div>
	            </div>

	            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
	                <h3>Policies</h3>
					<ul>
						<li><a href="">Cancellation Policy</a></li>
						<li><a href="">Payment Terms</a></li>
					</ul>
	                
	            </div>
	        </div>
	        <!-- /row-->
	        <hr>
	        <div class="row">
	            <div class="col-sm-5">
	                <p class="copy">© Wazi Hospitality - All rights reserved</p>
	            </div>
	            <div class="col-sm-7">
	                <div class="follow_us">
	                    <ul>
	                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/twitter_icon.svg" alt="" class="lazy"></a></li>
	                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/facebook_icon.svg" alt="" class="lazy"></a></li>
	                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/instagram_icon.svg" alt="" class="lazy"></a></li>
	                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/youtube_icon.svg" alt="" class="lazy"></a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	        <p class="text-center"></p>
	    </div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->
		
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/common_func.js"></script>
    <script src="phpmailer/validate.js"></script>

</body>

<!-- Mirrored from www.ansonika.com/foores/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 May 2023 08:19:46 GMT -->
</html>