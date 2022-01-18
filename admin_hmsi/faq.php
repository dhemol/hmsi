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
													<li class="active"><a href="faq.php">FAQ</a></li>
													<li><a href="pesan.php">PESAN</a></li>
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
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
                                	<?php
						if (!empty($_GET['message']) && $_GET['message'] == 'success') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Add FAQ</h4>';
							echo '</div>';
						}
						else if (!empty($_GET['message']) && $_GET['message'] == 'update') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Update FAQ</h4>';
							echo '</div>';
						}
						else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
							echo '<div class="alert alert-success">' ;
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
							echo '<h4>Success Delete FAQ</h4>';
							echo '</div>';
						}
						
                  	?>
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
					<thead>
                                            <tr>
                                                <th>NO</th>
                                                <th text-center>QUESTION</th>
												<th>ANSWER</th>
                                                <th>EDIT</th>
												<th>DELETE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$query = mysqli_query($con,"SELECT * FROM faq");
										 
											$no = 1;
											while ($data = mysqli_fetch_array($query)) {
											?>
												<tr>
													<td align="center"><?php echo $no; ?></td>
													<td align="center"><?php echo $data['question']; ?></td>
													<td align="center"><?php echo $data['answer']; ?></td>
													<td align="center"><a href="edit-faq.php?id=<?php echo $data['id']; ?>" class="btn"><i class="icon-edit"></i>Edit</a></td>
													<td align="center"><a href="delete-faq.php?id=<?php echo $data['id']; ?>" class="btn"><i class="icon-trash"></i>Delete</a></td>
													</tr>
											<?php
												$no++;
											}
											?>
                                        </tbody>
                                    </table>
                                   
					<!--/ End Shopping Summery -->
				</div>
            </div>
            <div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-7 col-12">
								<div class="left">
								</div>
							</div>
							<div class="col-lg-5 col-12">
								<div class="right">
									<div class="button5">
										<a href="tambah-faq.php" class="btn">Add FAQ</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
	
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
	<script src="assets/scripts.js"></script>
        <script>
        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
</body>
</html>