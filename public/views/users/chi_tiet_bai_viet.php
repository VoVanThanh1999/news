
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
	<?php include_once 'public/views/users/header_user.php';?>
	<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						
						<div class="col-lg-12" >
							
							<div class="hero-nav-area" >
								<?php
            						$conn = new mysqli(hostname, username, password, dbname);
            						$sql = "SELECT * FROM categories WHERE id = ".$datas->category_id."";
            						$result = $conn->query($sql);
            						if ($result->num_rows > 0) {
            						    while($row = $result->fetch_assoc()) {
            						        echo "  <h1 class='   '>".$row['name']."</h1>";
            						    }
            						} 					
            					?>
							
								<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="#">Post Types </a><span class="lnr lnr-arrow-right"></span><a href="standard-post.html">Standard Post </a></p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="news-tracker-wrap">
								<h6><span>Breaking News:</span>   <a href="#">Xem tin tức mới tại đây</a></h6>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								<div class="content-wrap">
									<ul class="tags">
									<?php
            						$conn = new mysqli(hostname, username, password, dbname);
            						$sql = "SELECT * FROM categories WHERE id = ".$datas->category_id."";
            						$result = $conn->query($sql);
            						if ($result->num_rows > 0) {
            						    while($row = $result->fetch_assoc()) {
            						        echo "<li><a href=''>".$row['name']."</a></li>";
            						    }
            						} 					
            					       ?>		
									</ul>
									<a href="#">
										<h3><?php echo "$datas->title"?></h3>
									</a>
									<ul class="meta pb-20">
										
										<li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo $datas->date?></a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span><?php echo "$datas->count_conment"?> conment</a></li>
									</ul>
									<p>
									<?php echo "$datas->content"?>
									</p>
									
									<blockquote><?php echo "$datas->description"?>.</blockquote>
									<div>
    									<ul class="mt-5">
											<?php   
											   $tags=  explode(" ",$datas->tag);
											   foreach($tags as $val){
											      echo "  <li class='btn border'>".$val."</li>";
											   }
											?>
    								
    									</ul>
									</div>
								<div class="comment-sec-area">
									<div class="container">
										<div class="row flex-column">
											<h6><?php echo "$datas->count_conment" ?> conment</h6>
												<!-- Start conment  -->
                        						 <?php include_once 'public/views/users/conment_details.php';?>
                        						<!-- End conment -->
										</div>
									</div>
								</div>
							</div>
							<div class="comment-form">
								<h4>Post Comment</h4>
								
						
									<input id="post_id" name="post_id" type="hidden" value=<?php echo $data->id?>>
									<div class="form-group form-inline">
										<div class="form-group col-lg-6 col-md-12 name">
											<input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" name="name">
										</div>
										<div class="form-group col-lg-6 col-md-12 email">
											<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
										</div>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" id="content" name="content" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
									</div>
									<div  class="  primary-btn text-uppercase" id="post_conment" onclick="sendMessage()">Post Comment </div>
							
							</div>
						</div>
						<!-- End single-post Area -->
					</div>
					<div class="col-lg-4">
						<div class="sidebars-area">
							<div class="single-sidebar-widget editors-pick-widget">
								<!-- Start Editor’s  -->
        						 <?php include_once 'public/views/users/edictors.php';?>
        						 <!-- Editor’s Pick -->
								
							</div>
							<div class="single-sidebar-widget ads-widget">
								<img class="img-fluid" src="img/sidebar-ads.jpg" alt="">
							</div>
							<div class="single-sidebar-widget newsletter-widget">
								<h6 class="title">Newsletter</h6>
								<p>
									Here, I focus on a range of items
									andfeatures that we use in life without
									giving them a second thought.
								</p>
								<div class="form-group d-flex flex-row">
									<div class="col-autos">
										<div class="input-group">
											<input class="form-control" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" type="text">
										</div>
									</div>
									<a href="#" class="bbtns">Subcribe</a>
								</div>
								<p>
									You can unsubscribe us at any time
								</p>
							</div>
							 <!--start most popular -->
							  <?php include_once 'public/views/users/most_popular.php';?>
							  <!--end most popular -->
							<div class="single-sidebar-widget social-network-widget">
								<h6 class="title">Social Networks</h6>
								<ul class="social-list">
									<li class="d-flex justify-content-between align-items-center fb">
										<div class="icons d-flex flex-row align-items-center">
											<i class="fa fa-facebook" aria-hidden="true"></i>
											<p>983 Likes</p>
										</div>
										<a href="#">Like our page</a>
									</li>
									<li class="d-flex justify-content-between align-items-center tw">
										<div class="icons d-flex flex-row align-items-center">
											<i class="fa fa-twitter" aria-hidden="true"></i>
											<p>983 Followers</p>
										</div>
										<a href="#">Follow Us</a>
									</li>
									<li class="d-flex justify-content-between align-items-center yt">
										<div class="icons d-flex flex-row align-items-center">
											<i class="fa fa-youtube-play" aria-hidden="true"></i>
											<p>983 Subscriber</p>
										</div>
										<a href="#">Subscribe</a>
									</li>
									<li class="d-flex justify-content-between align-items-center rs">
										<div class="icons d-flex flex-row align-items-center">
											<i class="fa fa-rss" aria-hidden="true"></i>
											<p>983 Subscribe</p>
										</div>
										<a href="#">Subscribe</a>
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
	<?php include_once 'public/views/users/footer.php';?>
	<script type="text/javascript">
		function sendMessage(){
			var c = confirm("Xác nhận gửi tin nhắn !");
	    	if (c==true) {
				var post_id = $('#post_id').val();			
			    var content = $('#content').val();
			    var nameUser = $('#name').val();
			    var email = $('#email').val();			        
			    var subject = $('#subject').val();
			    if(post_id == ''||content == ''||nameUser == ''||email==''||subject==''){
				    alert('Không được để trống các trường');
				}else{
					var Object = {'post_id':post_id,'content':content,'nameUser':nameUser,'email':email,'subject':subject};	
					$.ajax({
						url: '/news/comment_user/createComment',
						data:Object,
						method:'POST'
					}).done(function(result) {
						alert('Gui tin nhan thanh cong');
					});
				}
			}
		}
	
	 
	</script>
	
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
</body>
</html>

