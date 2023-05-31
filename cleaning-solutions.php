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

	<?php
		include_once("includes/topNav.php");
	?>
	

	<main>
		<div class="hero_single inner_pages background-image" data-background="url(assets/images/house-keeping-cleaning.jpg)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Cleaning Solutions</h1>
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
	                    <a href="assets/images/house-keeping-cleaning.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="assets/images/house-keeping-cleaning.jpg" alt="" class="img-fluid"></a>
	                </p>
	            </div>
	            <div class="col-lg-6" id="sidebar_fixed">
	                <div class="prod_info">
	                    <h1>House Keeping & Cleaning Services</h1>
	                    <p>
							We understand first impressions count. Whether you are hosting clients, interviewing, or it’s just the regular workforce, great sanitation and ambiance are critical.
						</p>
						<p>
							Our team helps provide different cleaning options and are committed to meeting and exceeding your expectations. Our experience in the industry guarantees for great quality, great customer experience, and satisfaction. We comb through your requirements to ensure 100 percent compliance.
						</p>
						<p>
							For restaurant and kitchen design, we do a site visit to see and understand the space, understand client use of space, wishes, and budget then work with experts to deliver.
						</p>
						<p>
							We follow the process outlined for perfect project delivery.
						</p>
	                </div>
	                <!-- /prod_info -->
	            </div>
	        </div>
			<div class="row mt-5">
	            <div class="col-lg-6 magnific-gallery">
	                <p>
	                    <a href="assets/images/images.png" title="Photo title" data-effect="mfp-zoom-in"><img src="assets/images/images.png" alt="" class="img-fluid"></a>
	                </p>
	            </div>
	            <div class="col-lg-6" id="sidebar_fixed">
	                <div class="prod_info">
	                    <p>
							A thorough professional cleaning is an important factor in keeping your home fresh clean and healthy
						</p>
						<p>
							Our team is committed to providing personalized cleaning services for your homes and offices.
						</p>
						<p>
							We provide high quality cleaning services for both indoors and outdoors and believe clean environments impact the wellbeing and productivity of our customers 
						</p>
						<p>
							Our solutions include:-
							<ol>
								<li>Carpet and fabric cleaning</li>
								<li>Fumigation and pest control</li>
								<li>Office cleaning and disinfection</li>
								<li>House spring cleaning</li>
								<li>Post construction cleaning</li>
								<li>After event cleaning</li>
							</ol>
						</p>
						<p>
							Your employees, guests and clients require and need to feel comfort and value. Accommodating their basic rights is your duty.  The environment you create greatly benefits your business.
						</p>
						<p>
							Our cleaning solutions offers you maintenance and care whilst you concentrate on your core business.
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