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
													<li class="active"><a href="index.php"><H4>DASHBOARD ADMIN HMSI</H4></a>
														<ul class="dropdown">
															<li><a tabindex="-1" href="#"><b><?= $_SESSION['username']?></b></a></li>
															<li><a tabindex="-1" href="logout.php">Logout</a></li>
														</ul>
													</li>
												<?php else : ?>
													<li class="active"><a href="index.php"><H4>DASHBOARD ADMIN HMSI</H4></a>
														<ul class="dropdown">
															<li><a tabindex="-1" href="login.php">Login</a></li>
														</ul>
													</li>
												<?php endif; ?>
													<li><a href="user.php">USER</a></li>
													<li><a href="profil.php">PROFIL</a></li>												
													<li><a href="berita.php">BERITA</a></li>								
													<li><a href="faq.php">FAQ</a></li>
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
			<div class="col-12">
				<div class="section-title">
					<h2>DATABASE USER</h2>
				</div>
			</div>
			<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
					<thead>
                                            <tr>
                                                <th>NO</th>
                                                <th text-center>USERNAME</th>
												<th>NAMA LENGKAP</th>
												<th>EMAIL</th>
                                                <th>PASSWORD</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$query = mysqli_query($con,"select * from admin_hmsi");
										 
											$no = 1;
											while ($data = mysqli_fetch_array($query)) {
											?>
												<tr>
													<td align="center"><?php echo $no; ?></td>
													<td align="center"><?php echo $data['username']; ?></td>
													<td align="center"><?php echo $data['nama_lengkap']; ?></td>
													<td align="center"><?php echo $data['Email']; ?></td>
													<td align="center"><?php echo md5($data['password']); ?></td>
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
				<br>
				<div class="col-12">
					<div class="section-title">
						<h2>DATABASE BERITA</h2>
					</div>
				</div>
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
					<thead>
                                            <tr>
                                                <th>ID BERITA</th>
                                                <th>ID KATEGORI</th>
                                                <th>HEADNEWS</th>
                                                <th>GAMBAR BERITA</th>
                                                <th>ISI BERITA</th>
												<th>PIC BERITA</th>
												<th>CREATED DATE</th>
												<th>CREATED TIME</th>
												<th>MODIFIED DATE</th>
												<th>EVENT DATE	</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$per_page = 5;
 
											$page_query = mysqli_query($con,"SELECT * FROM berita");
                                            $page_result = mysqli_num_rows($page_query);

                                            $pages = ceil($page_result / $per_page);
 
											$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
											$start = ($page - 1) * $per_page;
											
											$query = mysqli_query($con, "SELECT * FROM berita LIMIT $start, $per_page");
										 
											while ($data = mysqli_fetch_array($query)) {
											?>
												<tr>
													<td align="center"><?= $data['id_berita']; ?></td>
													<td align="center"><?= $data['id_kategori']; ?></td>
													<td align="center"><?= $data['headnews']; ?></td>
													<td align="center"><?= '<img src="'.$data['gambar_berita'].'"'; ?></td>
													<td align="center"><?= $data['isi_berita']; ?></td>
                                                    <td align="center"><?= $data['pic_berita']; ?></td>
                                                    <td align="center"><?= $data['created_date']; ?></td>
													<td align="center"><?= $data['created_time']; ?></td>
													<td align="center"><?= $data['modified_date']; ?></td>
													<td align="center"><?= $data['event_date']; ?></td>											
												</tr>
											<?php	
											}
											?>
						</tbody>
					</table>
					<?php
					if($pages >= 1 && $page <= $pages)
					{
						for($x=1; $x<=$pages; $x++)
						{
							//echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
						if($x == $page)
							echo ' <b><a href="?page='.$x.'">'.$x.'</a></b> | ';
						else
							echo ' <a href="?page='.$x.'">'.$x.'</a> |';
						}
					}
					?>
					<!--/ End Shopping Summery -->
				</div>				
			</div>
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>DATABASE PROFIL</h2>
					</div>
				</div>
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
					<thead>
                                            <tr>
                                                <th>NO</th>
                                                <th text-center>ISI PROFIL</th>
												<th>IMAGE PROFIL</th>
                                                <th>MODIFIED DATE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$query = mysqli_query($con,"SELECT * FROM profil");
										 
											$no = 1;
											while ($data = mysqli_fetch_array($query)) {
											?>
												<tr>
													<td align="center"><?php echo $no; ?></td>
													<td align="center"><?php echo $data['isi_profil']; ?></td>
													<td align="center"><?php echo '<img src="'.$data['img_profil'].'"'; ?></td>
                                                    <td align="center"><?php echo $data['modified_date']; ?></td>
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
				<div class="section-title">
					<h2>DATABASE FAQ</h2>
				</div>
			</div>
			<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
					<thead>
                                            <tr>
                                                <th>NO</th>
                                                <th text-center>QUESTION</th>
												<th>ANSWER</th>
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
				<br>
				<div class="col-12">
					<div class="section-title">
						<h2>DATABASE PESAN</h2>
					</div>
				</div>
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
					<thead>
                                            <tr>
                                                <th>NO</th>
												<th>ID</th>
                                                <th>NAMA LENGKAP</th>
                                                <th>SUBJECT</th>
                                                <th>EMAIL</th>
                                                <th>NO. HP</th>
												<th>PESAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$per_page = 5;
 
											$page_query = mysqli_query($con,"SELECT * FROM hubungi");
                                            $page_result = mysqli_num_rows($page_query);

                                            $pages = ceil($page_result / $per_page);
 
											$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
											$start = ($page - 1) * $per_page;
											
											$query = mysqli_query($con, "SELECT * FROM hubungi LIMIT $start, $per_page");
											$no = 1;
											while ($data = mysqli_fetch_array($query)) {
											?>
												<tr>
													<td align="center"><?= $no; ?></td>
													<td align="center"><?= $data['id']; ?></td>
													<td align="center"><?= $data['nama_lengkap']; ?></td>
													<td align="center"><?= $data['subject']; ?></td>
                                                    <td align="center"><?= $data['email']; ?></td>
                                                    <td align="center"><?= $data['no_hp']; ?></td>
													<td align="center"><?= $data['pesan']; ?></td>										
												</tr>
											<?php
												$no++;	
											}
											?>
						</tbody>
					</table>
					<?php
					if($pages >= 1 && $page <= $pages)
					{
						for($x=1; $x<=$pages; $x++)
						{
							//echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
						if($x == $page)
							echo ' <b><a href="?page='.$x.'">'.$x.'</a></b> | ';
						else
							echo ' <a href="?page='.$x.'">'.$x.'</a> |';
						}
					}
					?>
					<!--/ End Shopping Summery -->
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