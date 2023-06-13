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
    <title>Wazi Hospitalityuisine</title>

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
							<h1>Cuisine</h1>
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
	                    <a href="assets/images/cuisine.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="assets/images/cuisine.jpg" alt="" class="img-fluid"></a>
	                </p>
	            </div>
	            <div class="col-lg-6" id="sidebar_fixed">
	                <div class="prod_info">
	                    <h1>Cuisine</h1>
	                    <p>
							We serve a blended taste of both  <b>local and international cuisine</b>  and invite you to rest and relax as you enjoy a meal or drink anytime when and where you need it.
						</p>
						<p>
							Our food Philosophy and uniqueness is driven by flavor, freshness, innovation and sustainability.
						</p>
						<p>
							We guarantee you our client, an experience that is sure to delight your senses as we combine menus with contemporary and traditional flavors from diverse regions across the globe including our local dishes here in Kenya, Asian and Indian flavors. 
						</p>
						<p>
							Our specialized Chefs, Baristas and mixologists work with a variety of cooking styles from cooking ranges, Jikogrills, shawarma’s, tandoori just to ensure you get the correct distinctive tastes.
						</p>
						<p></p>
	                </div>
	                <!-- /prod_info -->
	            </div>
	        </div>
			<div class="col-lg-12">
					<div class="prod_info">
						<h1>Commitment to freshness</h1>
						<p>
							Wazi provides a wide array of fruits and vegetables and ensures that they are fresh and create delightful meals. That our markets offer an abundance of fresh produce enable us source locally. Our meats and dairies are also sourced from reputable and accredited suppliers and as an organization we practice strict levels of hygiene. This way we guarantee environments free of food contamination and any resultant food poisoning.
						</p>
						<p>
							On sustainability, we ensure our cooking processes eliminate food waste, and our storage facilities avoid spoilage. We also train our staff and casuals under our training department to equip them with hospitality knowledge and quick response to guest concerns and issues as well as on emerging trends to cope with workplace dynamics.
						</p>
						<p>
							Resilience is the capacity for our core business to endure and respond to disruption in a way that either resists or limits damage and enables swift recovery. Resilient systems are characterized as adaptable, flexible, agile and able to deal with change and uncertainty.
						</p>
						<p>
							Innovation is the essence of creation and we believe in continuous growth, exposure and evolution.
							From large scale catering to the smallest family dinner, we continue to deliver unique culinary experiences that are the hallmark of the wazi experience
						</p>
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