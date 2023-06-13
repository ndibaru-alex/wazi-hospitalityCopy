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
				<div class="owl-slide cover lazy" data-bg="url(assets/imgs/lunch-and-dinner/green-plate-with-homemade-chocolate-cupcakes.jpg)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-end">
								<div class="col-lg-6 static">
									<div class="slide-text text-end white">
										<h2 class="owl-slide-animated owl-slide-title">
											Discover the Essence of Wazi Cuisine
										</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Unleashing the Flavors of Hospitality
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll" href="about.php" role="button">Read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->
				<div class="owl-slide cover lazy" data-bg="url(assets/imgs/lunch-and-dinner/buggers.jpg)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-6 static">
									<div class="slide-text white">
										<h2 class="owl-slide-animated owl-slide-title">
											Empowering Dreams through World-Class Hospitality
										</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Your Pathway to Excellence
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="contacts.php" role="button">Let's Talk</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->				
				<div class="owl-slide cover lazy" data-bg="url(assets/imgs/lunch-and-dinner/fish.jpg)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center white">
										<h2 class="owl-slide-animated owl-slide-title">Experience Excellence in Service</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Transforming Lives and Creating Lasting Impressions
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="menu-1.html" role="button">Let's Talk</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/owl-slide-->
				</div>
			</div>
			<div id="icon_drag_mobile"></div>
		</div>
		<!--/carousel-->

		<!-- <ul id="banners_grid" class="clearfix">
			<li>
				<a href="menu-1.html" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="img/banner_1.jpg" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Our Menu</h3>
						<p>View Our Specialites</p>
					</div>
				</a>
			</li>
			<li>
				<a href="order-food.html" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="img/banner_2.jpg" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Delivery</h3>
						<p>Home delivery or take away food</p>
					</div>
				</a>
			</li>
			<li>
				<a href="gallery.html" class="img_container">
					<img src="img/banners_cat_placeholder.jpg" data-src="img/banner_3.jpg" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Inside Foores</h3>
						<p>View the Gallery</p>
					</div>
				</a>
			</li>
		</ul> -->
		<!--/banners_grid -->

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
		                    <p>Wazi cuisine. Hospitality services provider</p>
		                </div>
						<p>
							A leading integrated world class service provider, purpose-led organization, with all our efforts centered on helping our clients live their dream.
						</p>
						<p>
							We have a proven track record of delivering superior value to clients, employees, shareholders and broader society.
						</p>
						<p>
							Our strategy is executed through business clusters that deliver tailored, comprehensive and client-centric solutions to individual and institutional clients
						</p>
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
		            <h2>Our Core Values</h2>
		        </div>
		        <!-- /main_title -->
		        <div class="banner lazy" data-bg="url(assets/imgs/breakfast-options/pumpkin-soup.jpg)">
   
					<div class="wrapper d-flex align-items-center justify-content-between opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <p>
							Our core values make us who we are. As we change and grow, the beliefs that are most important to us stay the same. Being part of Wazi Hospitality means being part of a proud history and a thriving culture.
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
								<h4>Cleaning Solutions</h4>
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
					<div class="col-sm-4 mb-4">
						<div class="card border-0 h-100">
							<div class="card-body">
								<h4>Cuisine</h4>
								<p>
									Indulge in a symphony of flavors, artfully crafted dishes, and culinary delights that transport your taste buds on an unforgettable gastronomic journey.
								</p>
								<div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll remove_event_listerner" href="cuisine.php" role="button">Read more</a></div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 mb-4">
						<div class="card border-0 h-100">
							<div class="card-body">
								<h4>Catering</h4>
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
								<h4>Pest Control</h4>
								<p>
									Safeguard your premises from unwanted intruders, ensuring a pest-free environment through expert inspection, prevention, and effective elimination methods for long-term peace of mind.
								</p>
								<div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll remove_event_listerner" href="pest-control-solutions.php" role="button">Read more</a></div>
							</div>
						</div>
					</div>
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
			                <h2>We value you</h2>
			                <p>
								At Wazi Business, we believe in creating meaningful connections and unforgettable experiences. As a leading integrated world-class service provider, we are driven by a purpose-led approach that revolves around helping our clients live their dreams.
							</p>
			                <a href="contacts.php" class="btn_1 mt-3">Contact us</a>
			            </div>
			        </div>
			    </div>
    		</div>
    	</div>
   		<!--/call_section-->

		<div class="pattern_2">
		    <div class="container margin_120_100 pb-0">
		        <div class="row justify-content-center">
		        	<div class="col-lg-6 text-center d-none d-lg-block" data-cue="slideInUp">
		                <img src="assets/images/cheff.jpg" width="420" height="770" alt="" class="img-fluid">
		            </div>
		            <div class="col-lg-6 col-md-8" data-cue="slideInUp">
		                <div class="main_title">
		                    <span><em></em></span>
		                    <h2>Kitchen and Restaurant Design</h2>
		                </div>
						<p>
							<h4>Consultancy</h4>
							Wazi is here to serve you set up a new service business or help you replace or upgrade an existing one.
							We listen to your vision, advice on the best ways to utilize space and ensure practical implementation. We work within your budget and offer tailored competitive pricing and guarantee customer satisfaction. 
						</p>
						<p>
							<h4>Site Survey</h4>
							<p>
								After consultation, we visit the site to get you the right customization fit. We believe in getting it right the first time. The survey ensures right selection of equipment with specs space settings, orientation, hygiene and overall aesthetics of the kitchen or restaurant. This process ensures maximum efficiency, least cost and wastages in your kitchen.
							</p>
						</p>
						<p>
							<h4>Layout Design</h4>
							We offer low cost solution for preparing 2D& 3D floor plans that clearly bring out your dream kitchen. Our designs allow for selection of equipment, space setting, orientation and hygiene.
							We offer quick 24-hour turnaround of all floor plans in any image jpeg or pdf format.
						</p>
		            </div>
		        </div>
		        <!-- /row -->
		    </div>
		    <!-- /container -->
		</div>
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