<?php
	session_start();
	$_SESSION['active'] = "kitchen"
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wazi Hospitality">
    <meta name="author" content="#">
    <title>Wazi Hospitality | Pest Control Solutions</title>

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
	<!-- /header -->
	

	<main>
		<div class="hero_single inner_pages background-image" data-background="url(assets/images/7xm.xyz945065.jpg)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Kitchen and Restaurant Design</h1>
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
	                    <a href="assets/images/7xm.xyz945065.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="assets/images/7xm.xyz945065.jpg" alt="" class="img-fluid"></a>
	                </p>
	            </div>
	            <div class="col-lg-6" id="sidebar_fixed">
	                <div class="prod_info">
	                    <h1>Kitchen and Restaurant Design</h1>
                        <h3>Consultancy</h3>
						<p>
                            Wazi is here to serve you set up a new service business or help you replace or upgrade an existing one. We listen to your vision, advice on the best ways to utilize space and ensure practical implementation. We work within your budget and offer tailored competitive pricing and guarantee customer satisfaction. 
						</p>
                        <h3>Site Survey</h3>
						<p>
                            After consultation, we visit the site to get you the right customization fit. We believe in getting it right the first time. The survey ensures right selection of equipment with specs space settings, orientation, hygiene and overall aesthetics of the kitchen or restaurant. This process ensures maximum efficiency, least cost and wastages in your kitchen. 
						</p>
                        <h3>Layout Design</h3>
                        <p>
                            We offer low cost solution for preparing 2D& 3D floor plans that clearly bring out your dream kitchen. Our designs allow for selection of equipment, space setting, orientation and hygiene. We offer quick 24-hour turnaround of all floor plans in any image jpeg or pdf format. 
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