<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-8">
			<div class="card" style="margin-top: 100px;">
				<div class="card-header">
					Invoice Pembayaran Anda
				</div>

				<div class="card-body">
					<table class="table">
						<?php foreach ($transaksi as $tr) : ?>
							<tr>
								<th>Merk Mobil</th>
								<td>:</td>
								<td><?php echo $tr->merk ?></td>
							</tr>
							<tr>
								<th>Tanggal Rental</th>
								<td>:</td>
								<td><?php echo $tr->tanggal_rental ?></td>
							</tr>
							<tr>
								<th>tanggal kembali</th>
								<td>:</td>
								<td><?php echo $tr->tanggal_kembali ?></td>
							</tr>
							<tr>
								<th>Harga Sewa/hari</th>
								<td>:</td>
								<td>Rp. <?php echo number_format($tr->harga, 0, ",", ".") ?></td>
							</tr>

							<tr>
								<?php
								$x = strtotime($tr->tanggal_kembali);
								$y = strtotime($tr->tanggal_rental);
								$jumlah = abs(($x - $y) / (60 * 60 * 24))
								?>
								<th>Jumlah Hari Sewa</th>
								<td>:</td>
								<td><?php echo $jumlah ?> Hari</td>
							</tr>
							<tr class="text-success">
								<th>Jumlah Pembayaran</th>
								<td>:</td>
								<td>Rp. <?php echo number_format($tr->harga * $jumlah, 0, ",", ".") ?></td>
							</tr>

							<tr>
								<td></td>
								<td></td>
								<td><a href="<?php echo base_url('customer/transaksi/cetak_invoice/' . $tr->id_rental); ?>" class="btn btn-sm btn-warning">Print Invoice</a></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="margin-top: 100px; margin-bottom: 100px;">
				<div class="card-header alert alert-primary">
					Informasi Pembayaran
				</div>
				<div class="card-body">
					<p><strong>Silahkan Melakukan Pembayaran Melalui no Rekening Dibawah Ini</strong></p>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Bank BCA 8812519445</li>
						<li class="list-group-item">Bank BRI 25484498448448</li>
						<li class="list-group-item">OVO 081211160550</li>
						<li class="list-group-item">Dana 081211160550</li>
					</ul>


					<?php
					if (empty($tr->bukti_pembayaran)) { ?>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-sm btn-warning mt-3" style2="width: 100%" data-bs-toggle="modal" data-bs-target="#modals">
							Upload Bukti Pembayaran
						</button>
					<?php } elseif ($tr->status_pembayaran == '0') { ?>
						<button class="btn btn-sm btn-danger" style="width: 100%;"><i class="fa fa-clock-o"></i> Menunggu Konfirmasi</button>
					<?php } elseif ($tr->status_pembayaran == '1') { ?>
						<button class="btn btn-sm btn-success" style="width: 100%;"><i class="fa fa-check"></i> Pembayaran Sudah di Konfirmasi</button>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<label> Upload Bukti Pembayaran </label>
						<input type="hidden" name="id_rental" value="<?php echo $tr->id_rental ?>" class="form-control">
						<input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModsal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">


				<a class="custom-close"> My Custom Close Link </a>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


