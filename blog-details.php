<?php
session_start();
include('inc/koneksi.php');
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>HMSI UNPAM</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/logo.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
	
	<!-- HMSI StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
	
	<!-- AJAX -->
	<script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
		
	<!-- Header -->
	<header class="header shop">
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Logo -->
						<div class="logo">
						<a href="index.php"><img src="images/logo.png" style="max-width: 60px" alt="logo"></a>	
						<a href="https://www.unpam.ac.id/"><img src="images/unpam.png" style="max-width: 60px" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
					<div class="row">
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li><a href="index.php"><H4>HMSI UNPAM</H4></a></li>
													<li><a href="#">PROFILE<i class="ti-angle-down"></i></a>
													<ul class="dropdown">
															<li><a href="visimisi.php">VISI & MISI</a></li>
															<li><a href="strukturorg.php">STRUKTUR ORGANISASI</a></li>
														</ul>
													</li>												

													<li><a href="event.php">EVENT<span class="new">New</span></a>
													</li>								
													<li class="active"><a href="blog.php">BLOG</a>
													</li>
													<li><a href="faq.php">FAQ</a></li>
													<li><a href="ContactUs.php">CONTACT US</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->		
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index.php">HMSI UNPAM<i class="ti-arrow-right"></i></a></li>
                                <li><a href="blog.php">BLOG<i class="ti-arrow-right"></i></a></li>
                                <li class="active"><a href="#">BLOG DETAILS</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->				
		<!-- Start Blog Single -->
		<section class="blog-single section">
			<div class="container">
				<div class="row">
				<?php
					$id = $_GET['id'];
					$query = mysqli_query($con,"SELECT * FROM berita WHERE id_berita='$id'") or die(mysqli_error());
					$data = mysqli_fetch_array($query);
				?>					
					<div class="col-lg-8 col-12">
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
								<?php
									$query1 = mysqli_query($con, "SELECT * FROM berita WHERE id_berita='$id'");
							
									while ($data1 = mysqli_fetch_assoc($query1)) {
								?>	
                                    <h2 class="blog-title"><?= $data1['headnews']?></h2>
									<div class="image">
										<img src="admin/<?= $data1['gambar_berita']?>">
									</div>
								<?php } ?>
								<?php
								$query1 = mysqli_query($con, "SELECT * FROM berita WHERE id_berita='$id'");
						
								while ($data1 = mysqli_fetch_assoc($query1)) {
								?>	
									<div class="blog-detail">
										<div class="blog-meta">
											<span class="author"><a href="#"><i class="fa fa-user"></i><?= $data['pic_berita']?></a><a href="#"><i class="fa fa-calendar"></i><?= $data['created_date']?></a>
										</div>
										<div class="content">
											<p><?= $data['isi_berita']?></p>
											<blockquote> <i class="fa fa-quote-left"></i> <?= $data['isi_berita']?></blockquote>
											<p><?= $data['isi_berita']?></p>
											<p><?= $data['isi_berita']?></p>
										</div>
									</div>
								<?php } ?>	
									<div class="share-social">
										<div class="row">
											<div class="col-12">
												<div class="content-tags">
													<h4>Tags:</h4>
													<ul class="tag-inner">
														<li><a href="#">POSI</a></li>
														<li><a href="#">KESENIAN</a></li>
														<li><a href="#">KEAGAMAAN</a></li>
														<li><a href="#">PUBDOK</a></li>
														<li><a href="#">ABDIMAS</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="comments">
										<h3 class="comment-title">Comments</h3>
										<!-- Single Comment -->
										<div id="display_comment"></div>
										<!-- End Single Comment -->
									</div>									
								</div>											
								<div class="col-12">			
									<div class="reply">
										<div class="reply-head">
											<h2 class="reply-title">Leave a Comment</h2>
											<!-- Comment Form -->
											<form method="POST" id="comment_form"> 
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<label>Your Name<span>*</span></label>
															<input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name">
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<label>Your Message<span>*</span></label>
															<textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
														</div>
													</div>
													<div class="col-12">
														<div class="form-group button">
															<input type="hidden" name="comment_id" id="comment_id" value="0" />
															<button type="submit" name="submit" id="submit" class="btn">Post comment</button>
														</div>
													</div>
												</div>
											</form>
											<span id="comment_message"></span>
											<!-- End Comment Form -->
										</div>
									</div>			
								</div>			
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
								<!-- Single Widget -->
							<div class="single-widget search">
								<div class="form">
									<input type="email" placeholder="Search Here...">
									<a class="button" href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<!--/ End Single Widget -->
							<!-- Start Cowndown Area -->
							<section class="cown-down">
								<div class="section-inner ">
									<div class="container">
										<div class="row">
											<div class="col-lg-12 col-12">
												<div class="single-widget recent-post">
													<h3 class="title">HMSI UNPAM | UPCOMING EVENT</h3>	
												</div>
											</div>
										</div>		
											<?php
												$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 6,1");
									
												while ($data1 = mysqli_fetch_assoc($query1)) {
											?>
										<div class="row">		
											<div class="col-lg-12 col-12">
												<div class="image">
													<a href="blog-details.php?id=<?= $data1['id_berita']?>">
													<img src="admin/<?= $data1['gambar_berita']?>" alt="#">
												</div>	
											</div>
										</div>
										<div class="row">		
											<div class="col-lg-12 col-12">
												<div class="content">
													<div class="coming-time">
														<div class="clearfix" data-countdown="2021/06/30"></div>
													</div>
												</div>	
											</div>
										</div>		
										</div>
											<?php } ?>
									</div>
								</div>
							</section>
							<!-- /End Cowndown Area -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blog Single -->

	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<div class="single-footer social">
									<ul>
										<li><a href="https://web.facebook.com/HIMA-Sistem-Informasi-UNPAM-106364658203647"><i class="ti-facebook"></i></a></li>
										<li><a href="http://twitter.com/dhemol"><i class="ti-twitter"></i></a></li>
										<li><a href="https://www.youtube.com/channel/UCTi7o6sd42G1ntM5Hfx1ihw"><i class="ti-youtube"></i></a></li>
										<li><a href="https://www.instagram.com/hmsi_unpam/"><i class="ti-instagram"></i></a></li>
										<li><a href="https://page.co.id/hmsiunpam"><i class="ti-link"></i></a></li>
									</ul>
								</div>		
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<p>Copyright © 2021 <a href="https://page.co.id/hmsiunpam" target="_blank">HMSI UNPAM</a>  -  All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
	
	<!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="js/ytplayer.min.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
</body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>