<div class="container" style="margin-top: 200px">
	<div class="card">
		<div class="card-body">
			<?php foreach ($detail as $dt) : ?>
				<div class="row">
					<div class="col-md-6 ">
						<img style="width: 89%" src="<?php echo base_url('assets/upload/' . $dt->gambar) ?>"></img>
					</div>
					<div class="col-md-6">
						<table class="table table-bordered responsive">
							<tr>
								<td><strong>Type Mobil</strong></td>
								<td>
									<?php
									if ($dt->kode_type == "SDN") {
										echo "Sedan";
									} elseif ($dt->kode_type == "HTB") {
										echo "Hatchback";
									} elseif ($dt->kode_type == "MPV") {
										echo "Multi Purpose Vehicle";
									} elseif ($dt->kode_type == "SUV") {
										echo "Sport Utility Vehicle";
									} else {
										echo "<span class='text-danger'>Type Mobil belum tersedia</span>";
									}
									?>
								</td>
							</tr>
							<tr>
								<td><strong>Merk</strong></td>
								<td><?php echo $dt->merk ?></td>
							</tr>
							<tr>
								<td><strong>Plat Nomer</strong></td>
								<td><?php echo $dt->no_plat ?></td>
							</tr>
							<tr>
								<td><strong>Warna</strong></td>
								<td><?php echo $dt->warna ?></td>
							</tr>
							<tr>
								<td><strong>Tahun</strong></td>
								<td><?php echo $dt->tahun ?></td>
							</tr>
							<tr>
								<td><strong>Bahan Bakar</strong></td>
								<td><?php echo $dt->bahan_bakar ?></td>
							</tr>

							<tr>
								<td><strong>Transmisi</strong></td>
								<td><?php echo $dt->transmisi ?></td>
							</tr>
							<tr>
								<td><strong>Harga sewa</strong></td>
								<td>Rp. <?php echo number_format($dt->harga, 0, ',', '.')  ?></td>
							</tr>
							<tr>
								<td><strong>Denda Sewa</strong></td>
								<td>Rp. <?php echo number_format($dt->denda, 0, ',', '.') ?></td>
							</tr>
							<tr>
								<td><strong>Supir</strong></td>
								<td>
									<?php
									if ($dt->supir == "0") {
										echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
									} else {
										echo "<span class='badge badge-primary'>Tersedia</span>";
									}
									?>
								</td>
							</tr>
							<tr>
								<td><strong>Status</strong></td>
								<td>
									<?php
									if ($dt->status == "1") {
										echo anchor('customer/rental/tambah_rental/' . $dt->id_mobil, '<button class="btn btn-success">Rental</button>');
									} else {
										echo "<span class='rent-btn'>Tidak Tersedia</span>";
									} ?>
								</td>
							</tr>
						</table>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
