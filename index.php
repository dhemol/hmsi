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
	<meta name='copyright' content='https://page.co.id/hmsiunpam'>
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
													<li class="active"><a href="index.php"><H4>HMSI UNPAM</H4></a>
													<ul class="dropdown">
															<li><a href="login.php">Login</a></li>
														</ul>
													</li>
													<li><a href="#">PROFILE<i class="ti-angle-down"></i></a>
													<ul class="dropdown">
															<li><a href="visimisi.php">VISI & MISI</a></li>
															<li><a href="strukturorg.php">STRUKTUR ORGANISASI</a></li>
														</ul>
													</li>												

													<li><a href="event.php">EVENT<span class="new">New</span></a>
													</li>								
													<li><a href="blog.php">BLOG</a>
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

	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>KABAR HMSI</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						<div class="single-product">
						<?php
							$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 6,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
							<div class="product-img">
								<a href="blog-details.php?id=<?= $data1['id_berita']?>">
									<img class="default-img" src="admin/<?= $data1['gambar_berita']?>" alt="#">
									<img class="hover-img" src="admin/<?= $data1['gambar_berita']?>" alt="#">
									<span class="out-of-stock">Hot News</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#4" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick View</span></a>
										<a title="Wishlist" href="wishlist.php"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="compare.php"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
									<?='<a title="Add to cart" href="blog-details.php?id='.$data1['id_berita'].'">VIEW MORE</a>';?>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="blog-details.php?id=<?= $data1['id_berita']?>" class="title"><?= $data1['headnews'] ?></a></h3>
							</div>
						</div>
						<?php } ?>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
						<?php
							$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 5,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
							<div class="product-img">
								<a href="blog-details.php?id=<?= $data1['id_berita']?>">
									<img class="default-img" src="admin/<?= $data1['gambar_berita']?>" alt="#">
									<img class="hover-img" src="admin/<?= $data1['gambar_berita']?>" alt="#">
									<span class="out-of-stock">Hot News</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#3" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick View</span></a>
										<a title="Wishlist" href="wishlist.php"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="compare.php"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
									<?='<a title="Add to cart" href="blog-details.php?id='.$data1['id_berita'].'">VIEW MORE</a>';?>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="blog-details.php?id=<?= $data1['id_berita']?>" class="title"><?= $data1['headnews'] ?></a></h3>
							</div>
						</div>
						<?php } ?>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
						<?php
							$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 4,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
							<div class="product-img">
								<a href="blog-details.php?id=<?= $data1['id_berita']?>">
									<img class="default-img" src="admin/<?= $data1['gambar_berita']?>" alt="#">
									<img class="hover-img" src="admin/<?= $data1['gambar_berita']?>" alt="#">
									<span class="out-of-stock">Hot News</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#2" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick View</span></a>
										<a title="Wishlist" href="wishlist.php"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="compare.php"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
									<?='<a title="Add to cart" href="blog-details.php?id='.$data1['id_berita'].'">VIEW MORE</a>';?>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="blog-details.php?id=<?= $data1['id_berita']?>" class="title"><?= $data1['headnews'] ?></a></h3>
							</div>
						</div>
						<?php } ?>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
						<?php
							$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 3,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
							<div class="product-img">
								<a href="blog-details.php?id=<?= $data1['id_berita']?>">
									<img class="default-img" src="admin/<?= $data1['gambar_berita']?>" alt="#">
									<img class="hover-img" src="admin/<?= $data1['gambar_berita']?>" alt="#">
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#1" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick View</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
									<?='<a title="Add to cart" href="blog-details.php?id='.$data1['id_berita'].'">VIEW MORE</a>';?>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="blog-details.php?id=<?= $data1['id_berita']?>" class="title"><?= $data1['headnews'] ?></a></h3>
							</div>
						</div>
						<?php } ?>
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->

	<!-- Modal -->
	<div class="modal fade" id="1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 3,1");
									
											while ($data1 = mysqli_fetch_assoc($query1)) {
										?>	
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
										</div>
									</div>
									<?php } ?>
								<!-- End Product slider -->
							</div>
							<?php
								$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 3,1");
						
								while ($data1 = mysqli_fetch_assoc($query1)) {
							?>	
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
									<h2><?= $data1['headnews']?></h2>
                                    <div class="quickview-peragraph">
                                        <p><?= $data1['isi_berita']?></p>
                                    </div>
									<br>
									<div class="add-to-cart">
										<?php
											echo '<a title="Add to cart" href="blog-details.php?id='.$data1['id_berita'].'"class="btn">VIEW MORE</a>'; ?>
										<a href="#" alt="#" class="btn min"><i class="ti-heart"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
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
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
	</div>
	<!-- Modal end -->

	<!-- Modal -->
	<div class="modal fade" id="2" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 4,1");
									
											while ($data1 = mysqli_fetch_assoc($query1)) {
										?>	
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
										</div>
									</div>
									<?php } ?>
								<!-- End Product slider -->
							</div>
							<?php
								$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 4,1");
						
								while ($data1 = mysqli_fetch_assoc($query1)) {
							?>	
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
									<h2><?= $data1['headnews']?></h2>
                                    <div class="quickview-peragraph">
                                        <p><?= $data1['isi_berita']?></p>
                                    </div>
									<br>
									<div class="add-to-cart">
										<?php
											echo '<a title="Add to cart" href="blog-details.php?id='.$data1['id_berita'].'" class="btn">VIEW MORE</a>'; ?>
										<a href="#" alt="#" class="btn min"><i class="ti-heart"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
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
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
	</div>
	<!-- Modal end -->

	<!-- Modal -->
	<div class="modal fade" id="3" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 5,1");
									
											while ($data1 = mysqli_fetch_assoc($query1)) {
										?>	
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
										</div>
									</div>
									<?php } ?>
								<!-- End Product slider -->
							</div>
							<?php
								$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 5,1");
						
								while ($data1 = mysqli_fetch_assoc($query1)) {
							?>	
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
									<h2><?= $data1['headnews']?></h2>
                                    <div class="quickview-peragraph">
                                        <p><?= $data1['isi_berita']?></p>
                                    </div>
									<br>
									<div class="add-to-cart">
										<?php
											echo '<a title="Add to cart" href="blog-details.php?id='.$data1['id_berita'].'" class="btn">VIEW MORE</a>'; ?>
										<a href="#" alt="#" class="btn min"><i class="ti-heart"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
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
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
	</div>
	<!-- Modal end -->

	<!-- Modal -->
	<div class="modal fade" id="4" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 6,1");
									
											while ($data1 = mysqli_fetch_assoc($query1)) {
										?>	
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_berita']?>">
											</div>
										</div>
									</div>
									<?php } ?>
								<!-- End Product slider -->
							</div>
							<?php
								$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 6,1");
						
								while ($data1 = mysqli_fetch_assoc($query1)) {
							?>	
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
									<h2><?= $data1['headnews']?></h2>
                                    <div class="quickview-peragraph">
                                        <p><?= $data1['isi_berita']?></p>
                                    </div>
									<br>
									<div class="add-to-cart">
										<?php
											echo '<a title="Add to cart" href="blog-details.php?id='.$data1['id_berita'].'" class="btn">VIEW MORE</a>'; ?>
										<a href="#" alt="#" class="btn min"><i class="ti-heart"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
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
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
	</div>
	<!-- Modal end -->

		<!-- Start Blog Single -->
		<section class="blog-single section">
			<div class="container">
				<div class="row">
				<div class="col-lg-8 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">List Blog</h3>
								<!-- Single Post -->
								<?php
									$query = mysqli_query($con, "SELECT * FROM berita ORDER BY id_berita DESC");
							
									while ($data1 = mysqli_fetch_array($query)) {
								?>
								<div class="single-post">
								<!-- <div class="col-lg-6 col-12"> -->
									<div class="image">
									<a href="blog-details.php?id=<?= $data1['id_berita']?>">
										<img alt="#" src="admin/<?= $data1['gambar_berita']?>">
									</div>
									<!-- </div> -->
									<!-- <div class="col-lg-12 col-12"> -->
									<div class="content">
											
										<h5><a href="blog-details.php?id=<?=$data1['id_berita']?>"><?= $data1['headnews'] ?></h5>
										<ul class="comment">
											<li><a href="blog-details.php?id=<?=$data1['id_berita']?>"><i class="fa fa-user" aria-hidden="true"></i><?= $data1['pic_berita']?></li>
											<li><a href="blog-details.php?id=<?=$data1['id_berita']?>"><i class="fa fa-calendar" aria-hidden="true"></i><?= $data1['created_date']?></li>
									<!-- </div> -->
									</div>
								</div>
								<?php } ?>
								<!-- End Single Post -->
																									
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!--/ End Single Widget -->
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
												$query1 = mysqli_query($con, "SELECT * FROM berita LIMIT 6,1 ");
									
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
														<div class="clearfix" data-countdown="<?= $data1['event_date']?>"></div>
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
										<li><a href="https://twitter.com/dhemol"><i class="ti-twitter"></i></a></li>
										<li><a href="https://www.youtube.com/channel/UCTi7o6sd42G1ntM5Hfx1ihw"><i class="ti-youtube"></i></a></li>
										<li><a href="https://www.instagram.com/hmsi_unpam/"><i class="ti-instagram"></i></a></li>
										<li><a href="https://page.co.id/hmsiunpam"><i class="ti-link"></i></a></li>
									</ul>
								</div>		
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<p>Copyright © 2021 <a href="https://page.co.id/hmsiunpam" rel="noopener" target="_blank">HMSI UNPAM</a>  -  All Rights Reserved.</p>
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