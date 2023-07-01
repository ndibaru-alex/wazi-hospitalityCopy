<?php
	session_start();
	$_SESSION['active'] = "cuisine"
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wazi Hospitality">
    <meta name="author" content="#">
    <title>Wazi Cuisine</title>

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

	<?php
		include_once("includes/topNav.php");
	?>
	

	<main>
		<div class="hero_single inner_pages background-image" data-background="url(assets/images/cuisine.jpg)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Wazi Cuisine</h1>
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
	                    <a href="assets/images/cuisine.jpg" title="Photo title" ><img src="assets/images/cuisine.jpg" alt="" class="img-fluid"></a>
	                </p>
	            </div>
	            <div class="col-lg-6" >
	                <div class="prod_info">
	                    <h1>Wazi Cuisine</h1>
						<h4>Extravagant tastes. Promoting wellness. Relaxing pleasure.</h4>

						<h6>Local Produce</h6>
	                    <p>
						Wherever possible we ensure that we source locally and support producers of high quality ingredients for use in our menus.
						</p>
						<p>
							Our food Philosophy and uniqueness is driven by flavor, freshness, innovation and sustainability.
						</p>
						<p>
						All our fruit and vegetable suppliers are scrutinized intensively to ensure they deliver the freshest, healthiest and most flavorful products.
						</p>
						<p>
						Our aim is to make food fun, delicious and appealing.
						</p>
						
						
	                </div>
	                <!-- /prod_info -->
	            </div>
	        </div>

			<div class="col-lg-12">
					<div class="prod_info">
					<h4>Our corporate and private catering includes and is not limited to : </h4>
						<ol>
							<li>Corporate catering for office parties, cocktails, breakfast and lunch meetings, as well as canteen management</li>
							<li>Outdoor catering for weddings, bridal and baby showers, graduations, birthdays, child christening, family reunions, nyombo, ruracio. Koito etc.</li>
							<li>Sport and festival catering</li>
							<li>Home Catering</li>
							<li>Live Cooking</li>
							<li>Client Customization Menu</li>
							<li>Indulge the unique creation of our renowned chefs in offering you diverse menu options including live cooking stations for your events.</li>

						</ol>

						<p>Indulge the unique creation of our renowned chefs in offering you diverse menu options including live cooking stations for your events.</p>
					</div>
				</div>
	        <!-- /row -->		
			
			
			<!-- wazi bar -->
			<div class="row">
	            
	            <div class="col-lg-12" >
	                <div class="prod_info">
	                    <h1>Wazi Bar</h1>
						
	                    <p>
						Our mixologists and baristas are always prepared to provide an array of cocktails and mocktails for your event. Your choice to have them shaken or stirred to wow your clients is our pleasure. 
						</p>
						
						
						
	                </div>
	                <!-- /prod_info -->
	            </div>

				<div class="col-lg-12 magnific-gallery">
	                <p>
	                    <a href="assets/images/wazi-mixologist-bar.jpg" title="Photo title" ><img src="assets/images/wazi-mixologist-bar.jpg" alt="" class="img-fluid"></a>
	                </p>
	            </div>
	        </div>
			<!-- wazi bar end -->
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