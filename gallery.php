<?php
	include_once("admin/database/Database.php");
	include_once("models/Gallery.php");
	session_start();
	$_SESSION['active'] = "gallery";
?>
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

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

	<?php
		include_once("includes/topNav.php");
	?>
	<!-- /header -->
	
	<main>
	    <div class="shake-element hero_single inner_pages background-image" data-background="url(assets/imgs/breakfast-options/nuts.jpg)">
	        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
	            <div class="container">
	                <div class="row justify-content-center">
	                    <div class="col-xl-9 col-lg-10 col-md-8">
	                        <h1>Media Gallery</h1>
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

	<?php
		include_once("includes/footer.php");
	?>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->
		
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/common_func.js"></script>
    <script src="phpmailer/validate.js"></script>

</body>

</html>