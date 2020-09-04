
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
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Contact Us</h1>
								<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="contact.html">Contact Us </a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start contact-page Area -->
			<section class="contact-page-area pt-50 pb-120">
				<div class="container">
					<div class="row contact-wrap">
						<div class="map-wrap" style="width:100%; height: 445px;" >
							<iframe  style="width:100%; height: 445px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.6260270186594!2d108.220113914858!3d16.032971688903327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219eeff35daaf%3A0xf0a713ab8f158e7f!2zMzQgWMO0IFZp4bq_dCBOZ2jhu4cgVMSpbmgsIEhvw6AgQ8aw4budbmcgTmFtLCBI4bqjaSBDaMOidSwgxJDDoCBO4bq1bmc!5e0!3m2!1svi!2s!4v1599214556452!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
						<div class="col-lg-3 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Đại học Đông Á</h5>
									<p>
										34 Xô Viết Nghệ Tĩnh
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>0585 4444 653</h5>
									<p>Mon to Fri 9am to 6 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>mrt.boss@yahoo.com</h5>
									<p>Gủi tin nhắn yêu cầu</p>
								</div>
							</div>
						</div>
						<div class="col-lg-9">
							<form class="form-area contact-form text-right">
								<div class="row">
									<div class="col-lg-6">						
										<input name="name" id="name"  placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control"  type="text">						
										<input name="email" id="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" type="email">
										<input name="phone_number" id="phone" placeholder="Enter Your Phone" onfocus="this.placeholder = ''"  class="common-input mb-20 form-control" >
										<input name="subject" id="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" type="text">
									</div>
									<div class="col-lg-6">
										<textarea id = "content" class="common-textarea form-control " name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'"></textarea>
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<div  class="primary-btn primary" style="float: right;" id="sendMessage" onclick="sendMessage()">Send Message</div>
									
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End contact-page Area -->
		</div>
		<!-- start footer Area -->
		<?php include_once 'public/views/users/footer.php';?>
	<!-- End footer Area -->
		<script type="text/javascript">
		function sendMessage(){
			var c = confirm("Xác nhận gửi tin nhắn !");
	    	if (c==true) {			
			    var content = $('#content').val();
			    var nameUser = $('#name').val();
			    var email = $('#email').val();	
			    var phone= $('#phone').val();			        
			    var subject = $('#subject').val();
			    if(content == ''||nameUser == ''||email==''||subject==''){
				    alert('Không được để trống các trường');
				}else{
					var Object = {'content':content,'nameUser':nameUser,'email':email, 'phone':phone,'subject':subject};	
					$.ajax({
						url: '/news/contacts_controller/save_contacts',
						data:Object,
						method:'POST'
					}).done(function(result) {
						alert('Gui tin nhan thanh cong');
					});
				}
			}
		}	 
	</script>
	<script src="/news/public/views/js/vendor/jquery-2.2.4.min.js"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		></script>
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

