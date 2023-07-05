<?php
	session_start();
	$_SESSION['active'] = "contact"
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wazi Hospitality">
    <meta name="author" content="#">
    <title>Wazi Hospitality | Contact Us</title>

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

	<?php
		include_once("includes/topNav.php");
	?>
	
	<main>

		<div class="shake-element hero_single inner_pages background-image" data-background="url(assets/images/contact-us.jpg)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Contact Us</h1>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="frame white"></div>
		</div>
		<!-- /hero_single -->

		<div class="bg_gray">
		    <div class="container margin_60_40">
		        <div class="row justify-content-center">
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_tag_alt"></i>
		                    <h2>Reservations</h2>
		                    <a href="tel:+254 110 239861">+254 110 239861</a> - <a href="mailto:wazicuisine@gmail.com">wazicuisine@gmail.com</a>
		                    <small>- <a href="reservations.html">Or use the online form</a> -</small>
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_pin_alt"></i>
		                    <h2>Address</h2>
		                    <div>mbagathi road, Nairobi, Kenya</div>
		                    <small>- <a href="https://goo.gl/maps/N5PXKthgC48zYMhS6" target="_blank">Get Directions</a> -</small>
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_clock_alt"></i>
		                    <h2>Opening Hours</h2>
		                    <div>MON to FRI 9am-6pm | SAT 9am-2pm</div>
		                    <small>- Sunday Closed -</small>
		                </div>
		            </div>
		        </div>
		        <!-- /row -->
		    </div>
		    <!-- /container -->
		</div>
		<!-- /bg_gray -->

		<div class="container margin_60_40">
		    <h5 class="mb_5">Let's talk</h5>
		    <div class="row">
		        <div class="col-lg-6 col-md-6 add_bottom_25">
		            <div id="message-contact"></div>
		            <form method="post" action="functions/save-contact.php" id="contactform" autocomplete="off">
						<?php
							if(isset($_GET['success'])){
								echo "<div class='alert alert-success'>{$_GET['success']}</div>";
							}

							if(isset($_GET['error'])){
								echo "<div class='alert alert-danger'>{$_GET['error']}</div>";
							}
						?>
						
		                <div class="form-group">
		                    <input class="form-control" type="text" placeholder="Name" id="name_contact" name="name_contact">
		                </div>
		                <div class="form-group">
		                    <input class="form-control" type="email" placeholder="Email" id="email_contact" name="email_contact">
		                </div>
		                <div class="form-group">
		                    <textarea class="form-control" style="height: 150px;" placeholder="Message" id="message_contact" name="message_contact"></textarea>
		                </div>
						<div class="g-recaptcha" data-sitekey="6LdNsFQmAAAAADiCL4_wZae9SCYnmR0VVvH7jreH"></div>
		                <div class="form-group">
		                    <input class="btn_1 full-width" type="submit" value="Submit" id="submit-contact">
		                </div>
		            </form>
		        </div>
		        <div class="col-lg-6 col-md-6 add_bottom_25">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7977.5644901772675!2d36.79831258631227!3d-1.3057682947272995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10ed38ff32cd%3A0x7791f22e000317aa!2sMbagathi%20Rd%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1685526246758!5m2!1sen!2ske" class="map_contact" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>