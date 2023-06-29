<?php
session_start();
$_SESSION['active'] = "home"
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Wazi Hospitality">
	<meta name="author" content="#">
	<title>Wazi Hospitality | Home</title>

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
	<link href="css/wizard.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>

<body>

	<?php
	include_once("includes/topNav.php");
	?>

	<main>
		<div id="carousel-home">
			<div class="owl-carousel owl-theme">


			<div class="owl-slide cover lazy" data-bg="url(img/slides/slider-c.jpg)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-6 static">
									<div class="slide-text white">
										<h2 class="owl-slide-animated owl-slide-title">
											Welcome To Wazi Cuisine & Hospitality
										</h2>
										<p class="owl-slide-animated owl-slide-subtitle"> Extravagant tastes. Promoting wellness. Relaxing pleasure. </p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="contacts.php" role="button">Let's Talk</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="owl-slide cover lazy" data-bg="url(img/slides/slider-b.jpg)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-end">
								<div class="col-lg-6 static">
									<div class="slide-text text-end white">
										<h2 class="owl-slide-animated owl-slide-title">
											Delivering Excellence
										</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Join a proven journey of value creation
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll" href="about.php" role="button">Read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--/owl-slide-->
				<div class="owl-slide cover lazy" data-bg="url(img/slides/slider-c.jpg)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-6 static">
									<div class="slide-text white">
										<h2 class="owl-slide-animated owl-slide-title">
											Empowering dreams
										</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Enjoy world class hospitality services
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="contacts.php" role="button">Let's Talk</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->
				
			</div>
			<div id="icon_drag_mobile"></div>
		</div>
		

		<div class="pattern_2">
			<div class="container margin_120_100 home_intro">
				<div class="row justify-content-center d-flex align-items-center">
					<div class="col-lg-5 text-lg-center d-none d-lg-block" data-cue="slideInUp">
						<figure>
							<img src="assets/imgs/restaurant.jpg" data-src="assets/imgs/restaurant.jpg" width="354" height="440" alt="" class="img-fluid lazy">
							<!-- <a href="" class="btn_play" data-cue="zoomIn" data-delay="500"><span class="pulse_bt"><i class="arrow_triangle-right"></i></span></a> -->
						</figure>
					</div>
					<div class="col-lg-5 pt-lg-4" data-cue="slideInUp" data-delay="500">
						<div class="main_title">
							<span><em></em></span>
							<h2>About us.</h2>
							<p>Wazi Cuisine & Hospitality.</p>
						</div>
						<p>
						We are a leading integrated world class service provider, purpose-led and driven organization, with all our efforts centered on helping our clients live their dream through the provision of hospitality services and exceed their expectations.
						</p>
						<p>
						Our strategy is executed through business clusters that deliver tailored, comprehensive and client-centric solutions to individual and institutional clients.
						</p>
						<p>
						We develop tailored, appropriate solutions and enable our clients to make sound choices. 
						</p>
						<div class=""><a class="btn_1 btn_scroll " href="about.php" role="button">Know us better</a></div>
					</div>
				</div>
				<!--/row -->
			</div>
			<!--/container -->
		</div>
		<!--/pattern_2 -->

		<div class="bg_gray">
			<div class="container margin_120_100" data-cue="slideInUp">
				<div class="main_title center mb-5">
					<span><em></em></span>
					<h2>What Fuels Wazi</h2>
				</div>
				<!-- /main_title -->
				<div class="banner lazy" data-bg="url(assets/imgs/breakfast-options/pumpkin-soup.jpg)">

					<div class="wrapper d-flex align-items-center justify-content-between opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<p>
						We are driven by our purpose of creating unique distinct and sterling(priceless) experiences where and when the client needs them.
						</p>
					</div>
					<!-- /wrapper -->
				</div>


				<!-- /banner -->
				<div class="row magnific-gallery homepage add_bottom_25">
					<div class="main_title center mb-5">
						<span><em></em></span>
						<h2>Our Solutions</h2>
					</div>


					<div class="col-sm-4 mb-4">
						<div class="card border-0 h-100">
							<div class="card-body">
								<h4>Corporate & Private Catering</h4>
								<p>
									Experience the convenience of professional food services tailored to your unique event, with delectable menus, impeccable presentation, and flawless execution that leave a lasting impression.
								</p>
								<div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll remove_event_listerner" href="catering.php" role="button">Read more</a></div>
							</div>
						</div>
					</div>


					<div class="col-sm-4 mb-4">
						<div class="card border-0 h-100">
							<div class="card-body">
								<h4>Professional Cleaning Solutions</h4>
								<p>
									We understand first impressions count. Whether you are hosting clients, interviewing, or it’s just the regular workforce, great sanitation and ambiance are critical.
								</p>
								<div class=""><a class="btn_1 btn_scroll " href="cleaning-solutions.php" role="button">Read more</a></div>
							</div>
						</div>
					</div>


					<div class="col-sm-4 mb-4">
						<div class="card border-0 h-100">
							<div class="card-body">
								<h4>Hostpitality Staff Training</h4>
								<p>
									Hospitality staff training: Elevate service standards, enhance guest experiences, and cultivate a skilled workforce through comprehensive and effective training programs.
								</p>
								<div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll remove_event_listerner" href="staff-training.php" role="button">Read more</a></div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 mb-4">
						<div class="card border-0 h-100">
							<div class="card-body">
								<h4>Facility layout & Design</h4>
								<p>
									Facility layout & design: Optimize operational efficiency, maximize space utilization, and create a visually appealing environment through strategic planning and thoughtful design solutions.
								</p>
								<div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll remove_event_listerner" href="facility-layout-and-designs.php" role="button">Read more</a></div>
							</div>
						</div>
					</div>


					<!-- <div class="col-sm-4 mb-4">
						<div class="card border-0 h-100">
							<div class="card-body">
								<h4>Cuisine</h4>
								<p>
									Indulge in a symphony of flavors, artfully crafted dishes, and culinary delights that transport your taste buds on an unforgettable gastronomic journey.
								</p>
								<div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll remove_event_listerner" href="cuisine.php" role="button">Read more</a></div>
							</div>
						</div>
					</div> -->


					


					<!-- <div class="col-sm-4 mb-4">
						<div class="card border-0 h-100">
							<div class="card-body">
								<h4>Pest Control</h4>
								<p>
									Safeguard your premises from unwanted intruders, ensuring a pest-free environment through expert inspection, prevention, and effective elimination methods for long-term peace of mind.
								</p>
								<div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll remove_event_listerner" href="pest-control-solutions.php" role="button">Read more</a></div>
							</div>
						</div>
					</div> -->


					<!-- <div class="col-sm-4 mb-4">
						<div class="card border-0 h-100">
							<div class="card-body">
								<h4>Kitchen and Restaurant Design</h4>
								<p>
									Innovative spaces blending form and function, where culinary artistry meets elegant ambiance, creating inviting atmospheres that inspire creativity and satisfy discerning palates.
								</p>
								<div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll remove_event_listerner" href="kitchen-and-restaurant-design.php" role="button">Read more</a></div>
							</div>
						</div>
					</div> -->


				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_gray -->

		<div class="call_section lazy" data-bg="url(assets/imgs/breakfast-options/chaitea.jpg)">
			<div class="container clearfix">
				<div class="row justify-content-center">
					<div class="col-lg-5 col-md-6 text-center">
						<div class="box_1" data-cue="slideInUp">
							<h2>Brand Promise</h2>
							<p>
								Memories are made of these: quality, professionalism, personal touch.
							</p>
							<a href="contacts.php" class="btn_1 mt-3">Contact us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->

		<!-- /pattern_2 -->
	</main>
	<!-- /main -->

	<?php
	include_once("includes/footer.php");
	?>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->



	<!-- COMMON SCRIPTS -->
	<script src="js/common_scripts.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/common_func.js"></script>
	<script src="phpmailer/validate.js"></script>

	<!-- SPECIFIC SCRIPTS (wizard form) -->
	<script src="js/wizard/wizard_scripts.min.js"></script>
	<script src="js/wizard/wizard_func.js"></script>

</body>

</html>

<script>
	let all = document.querySelectorAll('.remove_event_listerner');
	all.forEach(element => {
		element.onclick = () => {
			window.location.href = element.href
		}
	})
</script>