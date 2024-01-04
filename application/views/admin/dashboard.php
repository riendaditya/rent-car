<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Dashboard</h1>
		</div>
		<div class="row">

			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-primary">
						<i class="far fa-user"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Total Customer</h4>
						</div>
						<div class="card-body">
							<?php echo $total_customer; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-danger">
						<i class="far fa-newspaper"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Total Transaksi</h4>
						</div>
						<div class="card-body">
							<?php echo $total_transaksi; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-warning">
						<i class="far fa-file"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Jumlah Mobil</h4>
						</div>
						<div class="card-body">
							<?php echo $total_mobil; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-success">
						<i class="fas fa-circle"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Jumlah Type</h4>
						</div>
						<div class="card-body">
							<?php echo $total_type; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
