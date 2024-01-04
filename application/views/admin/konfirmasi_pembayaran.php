<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Konfirmasi Pembayaran</h1>
		</div>

		<div class="card">
			<div class="card-header">
				Konfimrasi Pembayaran
			</div>

			<!-- button download_pembayaran -->
			<div class="card-body">
				<?php foreach ($pembayaran as $pb) : ?>
					<form method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran/' . $pb->id_rental); ?>">

						<a class="btn btn-sm btn-success" href="<?php echo base_url('admin/transaksi/download_pembayaran/' . $pb->id_rental) ?>">
							<i class='fas fa-download'> </i>
							Download Bukti Pembayaran
						</a>
						<div class="custom-control custom-switch ml-3">
							<input type="hidden" class="custom-control-input" value="<?php echo $pb->id_rental; ?>" name="id_rental">
							<input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran" checked>
							<label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
						</div>

						<hr>

						<button type="submit" class="btn btn-sm btn-primary">Simpan</button>

					</form>
				<?php endforeach; ?>
	</section>
</div>
