<?php
session_start();
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
    <title>REGISTER ADMIN | HMSI UNPAM</title>
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
	
	<!-- Start Login Area -->
	<section id="register" class="login section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
							<div class="row">
								<div class="col-12" style="center">
									<div class="logo">
										<a href="#"><img src="../images/logo.png" style="max-width: 200px" alt="#"></a>
									</div>
									<h2><b>HMSI UNPAM</b></h2>
									<br>
									<h4>HIMPUNAN MAHASISWA SISTEM INFORMASI UNIVERSITAS PAMULANG</h4>
									<br>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-main">
								<div class="title" align="center">
									<h1>REGISTER</h1>
								</div>
								<form class="form" method="post" action="send_register.php">
									<div class="row">
										    <div class="col-lg-12 col-12">
                                                <div class="form-group">
                                                    <label>Full Name<span>*</span></label>
                                                    <input name="nama" type="text" class="form-control" placeholder="">
                                                </div>
											</div>
											<div class="col-lg-12 col-12">
                                                <div class="form-group">
                                                    <label>Username<span>*</span></label>
                                                    <input name="username" type="text" class="form-control" placeholder="">
                                                </div>
											</div>
                                            <div class="col-lg-12 col-12">
												<div class="form-group">
													<label>Password<span>*</span></label>
													<input name="password" type="password" class="form-control" placeholder="">
												</div>	
                                            </div>
											<div class="col-lg-12 col-12">
												<div class="form-group">
													<label>Address<span>*</span></label>
													<textarea name="alamat" type="address" class="form-control" placeholder=""></textarea>
												</div>	
                                            </div>
											<div class="col-lg-12 col-12">
												<div class="form-group">
													<label>E-mail<span>*</span></label>
													<input name="email" type="email" class="form-control" placeholder="">
												</div>	
                                            </div>
											<div class="col-lg-12 col-12">
												<div class="form-group">
													<label>No.Hp<span>*</span></label>
													<input name="no_hp" type="number" class="form-control" placeholder="">
												</div>	
                                            </div>
											<div class="col-12">
												<div class="form-group button">
													<button type="submit" name="submit" value="submit" class="btn btn-block">Register</button>
												</div>
                                            </div>
                                        </div>
                                    </div>
									<hr>
									<div class="row">
											<div class="col-lg-4 col-12">
											</div>
											<div class="col-lg-4 col-12">
												<div class="form-group button">
													<ul>
														<li>
															<a href="login.php" class="btn btn-secondary btn-block active" role="button" align="center">LOGIN</a>
														</li>
													</ul>
											</div>
											<div class="col-lg-4 col-12">
											</div>
										</div>
										</div>
                                    </div>
                                </form>
							</div>
						</div>
                        </div>
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
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
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