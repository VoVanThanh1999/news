
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
<!-- Mobile Specific Meta -->
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon-->
<link rel="shortcut icon" href="/news/public/views/img/fav.png">
<!-- Author Meta -->
<meta name="author" content="colorlib">
<!-- Meta Description -->
<meta name="description" content="">
<!-- Meta Keyword -->
<meta name="keywords" content="">
<!-- meta character set -->
<meta charset="UTF-8">
<!-- Site Title -->
<title>Magazine</title>
<link
	href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"
	rel="stylesheet">
<!--
		CSS
		============================================= -->
<link rel="stylesheet" href="/news/public/views/css/linearicons.css">
<link rel="stylesheet"
	href="/news/public/views/css/font-awesome.min.css">
<link rel="stylesheet" href="/news/public/views/css/bootstrap.css">
<link rel="stylesheet" href="/news/public/views/css/magnific-popup.css">
<link rel="stylesheet" href="/news/public/views/css/nice-select.css">
<link rel="stylesheet" href="/news/public/views/css/animate.min.css">
<link rel="stylesheet" href="/news/public/views/css/owl.carousel.css">
<link rel="stylesheet" href="/news/public/views/css/jquery-ui.css">
<link rel="stylesheet" href="/news/public/views/css/main.css">
</head>
<body>
	<header>

		<div class="header-top">
			<div class="container">
				<div class="row">
					<div
						class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
					</div>
					<div
						class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
						<ul>
							<li><a href="tel:+440 012 3654 896"><span
									class="lnr lnr-phone-handset"></span><span>+440 012 3654 896</span></a></li>
							<li><a href="mailto:support@colorlib.com"><span
									class="lnr lnr-envelope"></span><span>support@colorlib.com</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="logo-wrap">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
						<a href="index.html"> <img class="img-fluid" src="/news/public/views/img/logo.png"
							alt="">
						</a>
					</div>
					<div
						class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
						<img class="img-fluid" src="/news/public/views/img/banner-ad.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
		<?php include_once 'public/views/users/categories.php';?>
	</header>

	<div class="site-main-container">
		<!-- Start top-post Area -->
		<?php include_once 'public/views/users/post_area.php';?>
		<!-- End top-post Area -->
		<!-- Start latest-post Area -->
		<section class="latest-post-area pb-120">
			<div class="container no-padding">
				<div class="row">
					<div class="col-lg-8 post-list">
						<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title"><?php							
    								$conn = new mysqli(hostname, username, password, dbname);
    								$sql = "SELECT * FROM categories WHERE id = ".$datas[0]->category_id ."";
    								$result = $conn->query($sql);
    								if ($result->num_rows > 0) {
    								    while($row = $result->fetch_assoc()) {
    								        echo $row['name'];
    								    }
    								}	
								?></h4>
								<div class="loadListPost">
									<?php 
    								foreach ($datas as $data){
    								    echo "
                                        <div class='single-latest-post row align-items-center'>
        									<div class='col-lg-5 post-left'>
        										<div class='feature-img relative'>
        											<div class='overlay overlay-bg'></div>
        											<img class='img-fluid' src='img/l1.jpg' alt=''>
        										</div>
        										<ul class='tags'>
        											<li><a href=''>Lifestyle</a></li>
        										</ul>
        									</div>
        									<div class='col-lg-7 post-right'>
        										<a href='image-post.html'>
        											<h4>A Discount Toner Cartridge Is
        											Better Than Ever.</h4>
        										</a>
        										<ul class='meta'>
        											<li><a href='#'><span class='lnr lnr-user'></span>Mark wiens</a></li>
        											<li><a href='#'><span class='lnr lnr-calendar-full'></span>03 April, 2018</a></li>
        											<li><a href='#'><span class='lnr lnr-bubble'></span>06 Comments</a></li>
        										</ul>
        										<p class='excert'>
        											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
        										</p>
        									</div>
        								</div>
        								";
    								}
								        
								 ?>
								</div>
								
								<div class="load-more">
									<button class="primary-btn" id="loadPost" >Load More Posts</button>
								</div>
								
							</div>
					</div>
					<div class="col-lg-4">
						<div class="sidebars-area">
						 <!-- Start Editor�s  -->
						 <?php include_once 'public/views/users/edictors.php';?>
						 <!-- Editor�s Pick -->
							
							<div class="single-sidebar-widget ads-widget">
								<img class="img-fluid" src="img/sidebar-ads.jpg" alt="">
							</div>
							<div class="single-sidebar-widget newsletter-widget">
								<h6 class="title">Newsletter</h6>
								<p>Here, I focus on a range of items andfeatures that we use in
									life without giving them a second thought.</p>
								<div class="form-group d-flex flex-row">
									<div class="col-autos">
										<div class="input-group">
											<input class="form-control" placeholder="Email Address"
												onfocus="this.placeholder = ''"
												onblur="this.placeholder = 'Email Address'" type="text">
										</div>
									</div>
									<a href="#" class="bbtns">Subcribe</a>
								</div>
								<p>You can unsubscribe us at any time</p>
							</div>
							 <!--start most popular -->
							  <?php include_once 'public/views/users/most_popular.php';?>
							  <!--end most popular -->
							<div class="single-sidebar-widget social-network-widget">
								<h6 class="title">Social Networks</h6>
								<ul class="social-list">
									<li
										class="d-flex justify-content-between align-items-center fb">
										<div class="icons d-flex flex-row align-items-center">
											<i class="fa fa-facebook" aria-hidden="true"></i>
											<p>983 Likes</p>
										</div> <a href="#">Like our page</a>
									</li>
									<li
										class="d-flex justify-content-between align-items-center tw">
										<div class="icons d-flex flex-row align-items-center">
											<i class="fa fa-twitter" aria-hidden="true"></i>
											<p>983 Followers</p>
										</div> <a href="#">Follow Us</a>
									</li>
									<li
										class="d-flex justify-content-between align-items-center yt">
										<div class="icons d-flex flex-row align-items-center">
											<i class="fa fa-youtube-play" aria-hidden="true"></i>
											<p>983 Subscriber</p>
										</div> <a href="#">Subscribe</a>
									</li>
									<li
										class="d-flex justify-content-between align-items-center rs">
										<div class="icons d-flex flex-row align-items-center">
											<i class="fa fa-rss" aria-hidden="true"></i>
											<p>983 Subscribe</p>
										</div> <a href="#">Subscribe</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 single-footer-widget">
					<h4>Top Products</h4>
					<ul>
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Features</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">Guides</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Experts</a></li>
						<li><a href="#">Agencies</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 single-footer-widget">
					<h4>Instragram Feed</h4>
					<ul class="instafeed d-flex flex-wrap">
						<li><img src="/news/public/views/img/i1.jpg" alt=""></li>
						<li><img src="/news/public/views/img/i2.jpg" alt=""></li>
						<li><img src="/news/public/views/img/i3.jpg" alt=""></li>
						<li><img src="/news/public/views/img/i4.jpg" alt=""></li>
						<li><img src="/news/public/views/img/i5.jpg" alt=""></li>
						<li><img src="/news/public/views/img/i6.jpg" alt=""></li>
						<li><img src="/news/public/views/img/i7.jpg" alt=""></li>
						<li><img src="/news/public/views/img/i8.jpg" alt=""></li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script>
					All rights reserved | This template is made with <i
						class="fa fa-heart-o" aria-hidden="true"></i> by <a
						href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
						class="fa fa-twitter"></i></a> <a href="#"><i
						class="fa fa-dribbble"></i></a> <a href="#"><i
						class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
	<script src="/news/public/views/js/vendor/jquery-2.2.4.min.js"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="/news/public/views/js/easing.min.js"></script>
	<script src="/news/public/views/js/hoverIntent.js"></script>
	<script src="/news/public/views/js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="/news/public/views/js/jquery.magnific-popup.min.js"></script>
	<script src="/news/public/views/js/mn-accordion.js"></script>
	<script src="/news/public/views/js/jquery-ui.js"></script>
	<script src="/news/public/views/js/jquery.nice-select.min.js"></script>
	<script src="/news/public/views/js/owl.carousel.min.js"></script>
	<script src="/news/public/views/js/mail-script.js"></script>
	<script src="/news/public/views/js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		var limit = 1;
		$( "#loadPost" ).click(function() {
			alert(limit);
			$.ajax({
				url: '/news/home/getByCategoriesLimit/'+limit+'/'+<?php echo $datas[0]->category_id?>,
				data:Object,
				method:'POST'
			}).done(function(result) {
				limit++;
				if(limit == '2'){
					$(".loadListPost").html('');
				}	
				var posts = JSON.parse(result);				
				for(var i = 0;i<posts.length;i++){
					$('.loadListPost').append("` 
						<div class='single-latest-post row align-items-center'>
							<div class='col-lg-5 post-left'>
							<div class='feature-img relative'>
								<div class='overlay overlay-bg'></div>
								<img class='img-fluid' src='img/l1.jpg' alt=''>
							</div>
							<ul class='tags'>
								<li><a href=''>Lifestyle</a></li>
							</ul>
						</div>
						<div class='col-lg-7 post-right'>
							<a href='image-post.html'>
								<h4>A Discount Toner Cartridge Is
								Better Than Ever.</h4>
							</a>
							<ul class='meta'>
								<li><a href='#'><span class='lnr lnr-user'></span>Mark wiens</a></li>
								<li><a href='#'><span class='lnr lnr-calendar-full'></span>03 April, 2018</a></li>
								<li><a href='#'><span class='lnr lnr-bubble'></span>06 Comments</a></li>
							</ul>
							<p class='excert'>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
							</p>
						</div>
					</div>`");
				}
				
			});
		
		});
	</script>
</body>

</html>
