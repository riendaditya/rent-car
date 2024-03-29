<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Update Data Mobil</h1>
		</div>
		<div class="card">
			<div class="card-body">
				<?php foreach ($mobil as $mb) : ?>
					<form method="POST" action="<?php echo base_url('admin/data_mobil/update_mobil_aksi') ?>" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Type Mobil</label>
									<input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">
									<select name="kode_type" class="form-control">
										<option value="<?php echo $mb->kode_type ?>"><?php echo $mb->kode_type ?></option>
										<?php foreach ($type as $tp) : ?>
											<option value="<?php echo $tp->kode_type ?>">
												<?php echo $tp->nama_type ?></option>
										<?php endforeach; ?>
									</select>
									<?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Merk</label>
									<input type="text" name="merk" class="form-control" value="<?php echo $mb->merk ?>">
									<?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>No Plat</label>
									<input type="text" name="no_plat" class="form-control" value="<?php echo $mb->no_plat ?>">
									<?php echo form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Transmisi</label>
									<input type="text" name="transmisi" class="form-control" value="<?php echo $mb->transmisi ?> ">
									<?php echo form_error('transmisi', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Bahan Bakar</label>
									<input type="text" name="bahan_bakar" class="form-control" value="<?php echo $mb->bahan_bakar ?> ">
									<?php echo form_error('bahan_bakar', '<div class="text-small text-danger">', '</div>/div>') ?>
								</div>
								<div class="form-group">
									<label>Tahun</label>
									<input type="text" name="tahun" class="form-control" value="<?php echo $mb->tahun ?>">
									<?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Warna Mobil</label>
									<input type="text" name="warna" class="form-control" value="<?php echo $mb->warna ?>">
									<?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
								</div>


								<div class="form-group">
									<label>Harga Rental</label>
									<input type="number" name="harga" class="form-control" value="<?php echo $mb->harga ?>">
									<?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Harga Denda</label>
									<input type="number" name="denda" class="form-control" value="<?php echo $mb->denda ?>">
									<?php echo form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Supir</label>
									<select name="supir" class="form-control">
										<option <?php if ($mb->supir == "1") {
													echo "elected='selected'";
												}
												echo $mb->supir ?> value="1">Tersedia
										</option>
										<option <?php if ($mb->supir == "0") {
													echo "elected='selected'";
												}
												echo $mb->supir ?> value="0">Tidak Tersedia
										</option>
									</select>
									<?php echo form_error('supir', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Status</label>
									<select name="status" class="form-control">
										<option <?php if ($mb->status == "1") {
													echo "elected='selected'";
												}
												echo $mb->status; ?> value="1">Tersedia
										</option>
										<option <?php if ($mb->status == "0") {
													echo "elected='selected'";
												}
												echo $mb->status; ?> value="0">Tidak Tersedia
										</option>
									</select>
									<?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Gambar</label>
									<input type="file" name="gambar" class="form-control">
								</div>

								<button type="submit" class="btn btn-primary mt-4">Save</button>
								<button type="reset" class="btn btn-danger mt-4">Reset</button>
							</div>
						</div>
					</form>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>
