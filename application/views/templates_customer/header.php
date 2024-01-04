<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<title>RentCars</title>

	<!--=== Bootstrap CSS ===-->
	<link href="<?php echo base_url('assets/home') ?>/css/bootstrap.min.css" rel="stylesheet">
	<!--=== Vegas Min CSS ===-->
	<link href="<?php echo base_url('assets/home') ?>/css/plugins/vegas.min.css" rel="stylesheet">
	<!--=== Slicknav CSS ===-->
	<link href="<?php echo base_url('assets/home') ?>/css/plugins/slicknav.min.css" rel="stylesheet">
	<!--=== Magnific Popup CSS ===-->
	<link href="<?php echo base_url('assets/home') ?>/css/plugins/magnific-popup.css" rel="stylesheet">
	<!--=== Owl Carousel CSS ===-->
	<link href="<?php echo base_url('assets/home') ?>/css/plugins/owl.carousel.min.css" rel="stylesheet">
	<!--=== Gijgo CSS ===-->
	<link href="<?php echo base_url('assets/home') ?>/css/plugins/gijgo.css" rel="stylesheet">
	<!--=== FontAwesome CSS ===-->
	<!-- <link href="<?php echo base_url('assets/home') ?>/css/font-awesomee.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--=== Theme Reset CSS ===-->
	<link href="<?php echo base_url('assets/home') ?>/css/reset.css" rel="stylesheet">
	<!--=== Main Style CSS ===-->
	<link href="<?php echo base_url('assets/home') ?>/css/style.css" rel="stylesheet">
	<!--=== Responsive CSS ===-->
	<link href="<?php echo base_url('assets/home') ?>/css/responsive.css" rel="stylesheet">


	<!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
[endif]-->
</head>

<body class="loader-active">
	<header id="header-area" class="fixed-top">
		<div id="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<a href="<?php echo base_url('customer/dashboard') ?>" class="logo">
							<h2>Berkah Insani RentCar</h2>
						</a>
					</div>

					<div class="col-lg-8 d-none d-xl-block">
						<nav class="mainmenu alignright">
							<ul>
								<li><a href="<?php echo base_url('customer/dashboard') ?>">Home</a></li>
								<li><a href="<?php echo base_url('customer/about') ?>">About</a></li>
								<li><a href="<?php echo base_url('customer/data_mobil') ?>">Cars</a></li>

								<?php if ($this->session->userdata('nama')) { ?>

									<li><a href="#">Welcome <?php echo $this->session->userdata('nama'); ?></a>
										<ul>
											<li><a href="<?php echo base_url('customer/transaksi') ?>">Data Transaksi</a></li>
											<li><a href="<?php echo base_url('auth/ganti_password') ?>">Ganti Password</a></li>
											<li><a href="<?php echo base_url('auth/logout') ?>">Logout</a></li>
										</ul>
									</li>
								<?php } else { ?>
									<li><a href="#">Hello</a>
										<ul>
											<li><a href="<?php echo base_url('auth/login') ?>">Login</a></li>
											<li><a href="<?php echo base_url('register') ?>">Register</a></li>
										</ul>
									</li>
								<?php } ?>

							</ul>
						</nav>
					</div>

				</div>
			</div>
		</div>

	</header>
