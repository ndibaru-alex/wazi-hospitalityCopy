// <?php
// 	include_once("database/Database.php");
// 	include_once("models/Blogs.php");
// 	include_once("models/Comments.php");
// 	session_start();
// 	$_SESSION['active'] = "blog";
// ?>
// <!DOCTYPE html>
// <html lang="en">

// <head>
//     <meta charset="utf-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
//     <meta name="description" content="Wazi Hospitality">
//     <meta name="author" content="#">
//     <title>Wazi Hospitality | Blog</title>

//     <!-- Favicons-->
//     <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
//     <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
//     <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
//     <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
//     <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

//     <!-- GOOGLE WEB FONT -->
//     <link rel="preconnect" href="https://fonts.googleapis.com/">
// 	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
// 	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

//     <!-- BASE CSS -->
//     <link href="css/vendors.min.css" rel="stylesheet">
//     <link href="css/style.css" rel="stylesheet">

//     <!-- SPECIFIC CSS -->
//     <link href="css/blog.css" rel="stylesheet">

//     <!-- YOUR CUSTOM CSS -->
//     <link href="css/custom.css" rel="stylesheet">

// </head>

// <body>

// 	<?php
// 		include_once("includes/topNav.php");
// 	?>
// 	<!-- /header -->
	
// 	<main>
// 		<div class="shake-element hero_single inner_pages background-image" data-background="url(assets/images/why-choose-us.jpg)">
// 			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
// 				<div class="container">
// 					<div class="row justify-content-center">
// 						<div class="col-xl-9 col-lg-10 col-md-8">
// 							<h1>Wazi Blog</h1>
// 						</div>
// 					</div>
// 					<!-- /row -->
// 				</div>
// 			</div>
// 			<div class="frame white"></div>
// 		</div>
// 		<!-- /hero_single -->

// 		<div class="container margin_60_40">			
// 			<div class="row">
// 				<div class="col-lg-9">
// 					<div class="row">
// 						<?php
// 							$conn = new Database();
// 							$db = $conn -> connection();
// 							$blogs = new Blogs($db);
// 							$blog = $blogs -> getBlogs();
// 							if($blog){
// 								foreach($blog as $blog){
// 						?>
// 						<div class="col-md-6" data-cue="slideInUp">
// 							<article class="blog">
// 								<figure>
// 									<a href="blog-post.php?blog=<?php echo urlencode(base64_encode($blog['id'])) ?>"><img src="admin/uploads/<?php echo $blog['blog_image_name'] ?>" alt="">
// 										<div class="preview"><span>Read more</span></div>
// 									</a>
// 								</figure>
// 								<div class="post_info">
// 									<small>posted - <?php echo $blog['posted_date'] ?></small>
// 									<h2><a href="blog-post.php?blog=<?php echo urlencode(base64_encode($blog['id'])) ?>"><?php echo $blog['blog_title'] ?></a></h2>
// 									<div class="blog_main_content">
// 										<?php echo $blog['blog_content'] ?>
// 									</div>
// 									<ul>
// 										<li>
// 											<div class="thumb"><img src="img/avatar.jpg" alt=""></div> <?php echo $blog['postedBy'] ?>
// 										</li>
// 										<li><i class="icon_comment_alt"></i>
// 										<?php
// 											$conn = new Database();
// 											$db   = $conn -> connection();
// 											$comm = new Comments($db);
// 											$comm -> Blog = $blog['id'];
// 											$counts = $comm -> countComments();
// 											echo $counts;
// 										?>
// 										</li>
// 									</ul>
// 								</div>
// 							</article>
// 						</div>
// 						<?php
// 							}
// 							}else{
// 								echo "<div class='alert alert-danger'>No posted blogs</div>";
// 							}
// 						?>
// 					</div>
// 					<!-- <div class="pagination_fg">
// 					  <a href="#">&laquo;</a>
// 					  <a href="#" class="active">1</a>
// 					  <a href="#">2</a>
// 					  <a href="#">3</a>
// 					  <a href="#">4</a>
// 					  <a href="#">5</a>
// 					  <a href="#">&raquo;</a>
// 					</div> -->

// 				</div>
// 				<!-- /col -->

// 				<aside class="col-lg-3">
// 					<div class="widget">
// 						<div class="widget-title first">
// 							<h4>Latest Post</h4>
// 						</div>
// 						<ul class="comments-list">
// 							<?php
// 								$conn = new Database();
// 								$db  = $conn -> connection();

// 								$blogs = new Blogs($db);
// 								$blogs -> limit = 6;
// 								$blog = $blogs -> getBlogs();
// 								if($blog){
// 									foreach($blog as $blog){
// 							?>
// 									<li>
// 										<div class="alignleft">
// 											<a href="blog-post.php?blog=<?php echo urlencode(base64_encode($blog['id'])) ?>"><img src="admin/uploads/<?php echo $blog['blog_image_name'] ?>" alt=""></a>
// 										</div>
// 										<small>posted - <?php echo $blog['posted_date'] ?></small>
// 										<div class="one_linner">
// 											<h3><a href="blog-post.php?blog=<?php echo urlencode(base64_encode($blog['id'])) ?>" title="" title='<?php echo $blog['blog_title'] ?>'><?php echo $blog['blog_title'] ?></a></h3>
// 										</div>
// 									</li>
// 							<?php
// 									}
// 								}else{
// 									echo "<div class='alert alert-danger'>No latest posts</div>";
// 								}
// 							?>
// 						</ul>
// 					</div>
// 				</aside>
// 				<!-- /aside -->
// 			</div>
// 			<!-- /row -->	
// 		</div>
// 		<!-- /container -->
// 	</main>
// 	<!-- /main -->

// 	<?php
// 		include_once("includes/footer.php");
// 	?>
// 	<!--/footer-->

// 	<div id="toTop"></div><!-- Back to top button -->
		
// 	<!-- COMMON SCRIPTS -->
//     <script src="js/common_scripts.min.js"></script>
//     <script src="js/common_func.js"></script>
//     <script src="phpmailer/validate.js"></script>

// </body>
// <style>
// 	.blog_main_content{
// 		overflow: hidden;
// 		display: -webkit-box;
// 		-webkit-line-clamp: 4; /* number of lines to show */
// 		line-clamp: 4; 
// 		-webkit-box-orient: vertical;
// 	}
// 	.one_linner{
// 		overflow: hidden;
// 		display: -webkit-box;
// 		-webkit-line-clamp: 1; /* number of lines to show */
// 		line-clamp: 1; 
// 		-webkit-box-orient: vertical;
// 	}
// 	.blog_main_content h1,
// 	.blog_main_content h2,
// 	.blog_main_content h3,
// 	.blog_main_content h4,
// 	.blog_main_content h5{
// 		font-size: 20px;
// 	}
// </style>

// <!-- Mirrored from www.ansonika.com/foores/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 May 2023 08:19:46 GMT -->
// </html>
