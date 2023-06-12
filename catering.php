<?php
	session_start();
	$_SESSION['active'] = "catering"
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wazi Hospitality">
    <meta name="author" content="#">
    <title>Wazi Hospitality | Catering</title>

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
		<div class="hero_single inner_pages background-image" data-background="url(assets/images/catering.jpg)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Catering</h1>
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
	                    <a href="assets/images/catering.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="assets/images/catering.jpg" alt="" class="img-fluid"></a>
	                </p>
	            </div>
	            <div class="col-lg-6" id="sidebar_fixed">
	                <div class="prod_info">
	                    <h1>Catering</h1>
	                    <p>Our corporate and private catering includes and is not limited to</p>
						<ul>
							<li>Corporate catering for office parties, cocktails, breakfast and lunch meetings, as well as canteen management</li>
							<li>Outdoor catering for weddings, bridal and baby showers, graduations, birthdays, child christening, family reunions, nyombo, ruracio. Koito etc.</li>
							<li>Sport and festival catering</li>
							<li>Home catering</li>
							<li>Live cooking</li>
							<li>Client customized menu</li>
						</ul>
						<p>
							Our mixologists and baristas are always prepared to provide an array of cocktails and mocktails for your event. Your choice to have them shaken or stirred to wow your clients is our pleasure. Indulge the unique creation of our renowned chefs in offering you diverse menu options including live cooking stations for your events. We offer different kinds of catering that is:-
						</p>
							<ol>
								<li>Corporate Catering</li>
								<li>Private Catering</li>
							</ol>
	                </div>
	            </div>
	        </div>
			<div class="row mt-5 mb-5">
	            <div class="col-lg-6" id="sidebar_fixed">
	                <div class="prod_info">
	                    <h1>1. Private Catering</h1>
	                    <p>
							Private catering is a premium service that caters to personal events such as weddings, birthdays, and social parties. It offers a convenient and enjoyable way to host gatherings by taking care of all aspects of food preparation, presentation, and service, allowing hosts to relax and enjoy their special occasions.
						</p>
						<p>
							We specialize in creating bespoke menus that reflect the client's vision and preferences. From intimate dinners to grand celebrations, we offer a wide range of culinary options, including international cuisines, specialty dishes, and dietary accommodations, ensuring a memorable dining experience for guests.
						</p>
						<p>
							With an emphasis on exceptional quality and presentation, We meticulously select the finest ingredients and pay attention to every detail of food arrangement and service. By delivering impeccable culinary experiences, We strive to exceed client expectations, leaving a lasting impression on all attendees and making each event truly unforgettable.
						</p>
	                </div>
	            </div>
				<div class="col-lg-6 magnific-gallery">
	                <p>
	                    <a href="assets/images/private-catering.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="assets/images/private-catering.jpg" alt="" class="img-fluid"></a>
	                </p>
	            </div>
	        </div>
			<div class="row mt-5 mb-5">
				<div class="col-lg-6 magnific-gallery">
	                <p>
	                    <a href="assets/images/corporate-catering.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="assets/images/corporate-catering.jpg" alt="" class="img-fluid"></a>
	                </p>
	            </div>
	            <div class="col-lg-6" id="sidebar_fixed">
	                <div class="prod_info">
	                    <h1>2. Corporate Catering</h1>
	                    <p>
							Corporate catering is a specialized service that caters to the culinary needs of businesses during events such as conferences, seminars, and office parties. It focuses on professionalism, efficiency, and attention to detail to create a favorable environment for networking and client relations.
						</p>
						<p>
							With customized menus designed to accommodate dietary preferences, cultural considerations, and budgetary constraints, We ensure the highest standards in presentation and food quality. From breakfast meetings to gala dinners, Our goal is to leave a lasting impression on attendees and elevate the overall event experience.
						</p>
						<p>
							We work closely with clients to understand their specific requirements, providing seamless services that include food preparation, presentation, and service. We excel in creating exceptional culinary experiences, leaving clients free to focus on the event itself and making a positive impact on their guests.
						</p>
	                </div>
	            </div>
	        </div>
		</div>

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