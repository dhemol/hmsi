<?php
include('cek-login.php');
include('../inc/koneksi.php');
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
    <title>ADMIN | HMSI UNPAM</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="../images/logo.png">
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
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

	
	
</head>
<?php
	//kode php ini kita gunakan untuk menampilkan pesan eror
	if (!empty($_GET['error'])) {
		if ($_GET['error'] == 1) {
			echo '<h3 align="center">Username dan Password belum diisi!</h3>';
		} else if ($_GET['error'] == 2) {
			echo '<h3 align="center">Username belum diisi!</h3>';
		} else if ($_GET['error'] == 3) {
			echo '<h3 align="center">Password belum diisi!</h3>';
		} else if ($_GET['error'] == 4) {
			echo '<h3 align="center">Username dan Password tidak terdaftar!</h3>';
		}
	}
	?>
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
						<a href="index.php"><img src="../images/logo.png" style="max-width: 60px" alt="logo"></a>	
						<a href="https://www.unpam.ac.id/"><img src="../images/unpam.png" style="max-width: 60px" alt="logo"></a>
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
												<?php
													if (isset($_SESSION['username'])) : ?>
													<li><a href="index.php"><H4>DASHBOARD ADMIN HMSI</H4></a>
														<ul class="dropdown">
															<li><a tabindex="-1" href="#"><b><?= $_SESSION['username']?></b></a></li>
															<li><a tabindex="-1" href="logout.php">Logout</a></li>
														</ul>
													</li>
												<?php else : ?>
													<li><a href="index.php"><H4>DASHBOARD ADMIN HMSI</H4></a>
														<ul class="dropdown">
															<li><a tabindex="-1" href="login.php">Login</a></li>
														</ul>
													</li>
												<?php endif; ?>
													<li><a href="user.php">USER</a></li>	
													<li><a href="profil.php">PROFIL</a></li>											
													<li><a href="berita.php">BERITA</a></li>								
													<li><a href="faq.php">FAQ</a></li>
													<li class="active"><a href="pesan.php">PESAN</a></li>
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

	<!-- Start Login Area -->
	<section id="login" class="login section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="form-main">
								<div class="title" align="center">
									<h1>ADD MESSAGE</h1>
								</div>
								<form name="input_message" class="form" method="post" action="insert-pesan.php">
									<div class="row">
                                    <div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input name="nama_lengkap" type="text" class="form-control" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Subjects<span>*</span></label>
												<input name="subject" type="text" class="form-control" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" class="form-control" placeholder="">
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input name="no_hp" type="text" class="form-control" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>your message<span>*</span></label>
												<textarea name="pesan" class="form-control" placeholder=""></textarea>
											</div>
										</div>
											<div class="col-12">
												<div class="form-group button">
                                                    <button type="submit" class="btn btn-block" >Save Changes</button>
                                                    <button type="reset" class="btn btn-block">Reset</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
	</section>
	
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