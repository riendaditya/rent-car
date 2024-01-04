<body class="sidebar-menu">
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<form class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
						<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
					</ul>
				</form>

				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
						<img alt="image" src="<?php echo base_url('assets/admin_stisla') ?>/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="dropdown-title"></div>
						<div class="dropdown-divider"></div>
						<a href="<?php echo base_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
							<i class="fas fa-sign-out-alt"></i> Logout
						</a>
					</div>
				</li>
			</nav>
			<div class="main-sidebar sidebar-style-2">
				<aside id="sidebar-wrapper">
					<div class="sidebar-brand">
						<a href="<?php echo base_url('admin/dashboard') ?>"> Berkah Insani RentCar </a>
					</div>
					<div class="sidebar-brand sidebar-brand-sm">
						<a href="<?php echo base_url('admin/dashboard') ?>">Rl</a>
					</div>
					<ul class="sidebar-menu">
						<li><a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

						<li><a class="nav-link" href="<?php echo base_url('admin/data_mobil') ?>"><i class="fas fa-car"></i> <span>Data Mobil</span></a></li>

						<li><a class="nav-link" href="<?php echo base_url('admin/data_type') ?>"><i class="fas fa-grip-horizontal"></i> <span>Data Type</span></a></li>

						<li><a class="nav-link" href="<?php echo base_url('admin/data_customer') ?>"><i class="fas fa-user"></i> <span>Data Customer</span></a></li>

						<li><a class="nav-link" href="<?php echo base_url('admin/transaksi') ?>"><i class="fas fa-random"></i> <span>Transaksi</span></a></li>

						<li><a class="nav-link" href="<?php echo base_url('admin/laporan') ?>"><i class="fas fa-clipboard"></i> <span>Laporan</span></a></li>

						<li><a class="nav-link" href="<?php echo base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></span></a></li>

						<li><a class="nav-link" href="<?php echo base_url('auth/ganti_password') ?>"><i class="fas fa-lock"></i> <span>Ganti Password</span></a></span></a></li>
					</ul>
				</aside>
			</div>
		</div>
	</div>
