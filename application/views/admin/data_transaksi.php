<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Transaksi</h1>
		</div>
		<div class="body">
			<div class="table-responsive">
				<table id="table1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Customer</th>
							<th>Mobil</th>
							<th>Tanggal Rental</th>
							<th>Tanggal Kembali</th>
							<th>Harga/Hari</th>
							<th>Denda/Hari</th>
							<th>Total Denda</th>
							<th>Tanggal Pengembalian</th>
							<th>Status Pengembalian</th>
							<th>Status Rental</th>
							<th>Cek Pembayaran</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($transaksi as $tr) : ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $tr->nama ?></td>
								<td><?php echo $tr->merk ?></td>
								<td><?php echo date('d/m/y', strtotime($tr->tanggal_rental)); ?></td>
								<td><?php echo date('d/m/y', strtotime($tr->tanggal_kembali)); ?></td>
								<td>Rp. <?php echo number_format($tr->harga, 0, ",", "."); ?></td>
								<td>Rp. <?php echo number_format($tr->denda, 0, ",", "."); ?></td>
								<td>
									<?php if (empty($tr->total_denda)) {
										echo "Rp. 0";
									} else { ?>
										Rp. <?php echo number_format($tr->total_denda, 0, ",", "."); ?>
									<?php } ?>
								</td>
								<td>
									<?php
									if ($tr->tanggal_pengembalian == "0000-00-00") {
										echo "------";
									} else {
										echo date('d/m/y', strtotime($tr->tanggal_pengembalian));
									} ?>
								</td>
								<td><?php echo $tr->status_pengembalian; ?></td>
								<td><?php echo $tr->status_rental ?></td>
								<td>
									<center>
										<?php
										if (empty($tr->bukti_pembayaran)) { ?>
											<button class="btn btn-sm btn-danger"><i class='fa fa-times-circle'></i></button>
										<?php } else { ?>
											<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/transaksi/pembayaran/' . $tr->id_rental); ?>"><i class='fas fa-check'></i></a>
										<?php } ?>
									</center>
								</td>
								<td><?php
									if ($tr->status == "1") {?>
										<button class="btn btn-sm btn-danger"><i class='fa fa-times-circle'></i></button>
									<?php } else { ?>
										<div class="row">
											<a class="btn btn-sm btn-success mr-2" href="<?php echo base_url('admin/transaksi/transaksi_selesai/' . $tr->id_rental); ?>"><i class='fas fa-check'></i></a>
											<a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/transaksi_batal/' . $tr->id_rental); ?>"><i class='fas fa-times'></i></a>
										</div>
									<?php } ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>
