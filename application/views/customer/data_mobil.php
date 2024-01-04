<section id="page-title-area" class="section-padding overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title  text-center">
					<h2>Our Cars</h2>
					<span class="title-line"><i class="fa fa-car"></i></span>
				</div>
			</div>

		</div>
	</div>
</section>

<section id="car-list-area" class="section-padding">
        <div class="container">
        <?php echo $this->session->flashdata('pesan') ?>
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                            <?php foreach ($mobil as $mb) : ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
									<img src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>">
									<div class="car-list-info without-bar">
										<h2><a href="#"><?php echo $mb->merk ?></a></h2>
										<h5>Rp. <?php echo number_format($mb->harga, 0, ',', '.') ?> / Hari</h5>

										<ul class="car-info-list">
											<li><i class='fas fa-gas-pump'></i> <?php echo $mb->bahan_bakar ?></li>
											<li><i class='fas fa-cog'></i> <?php echo $mb->transmisi ?></li>
											<li><?php
												if ($mb->supir == "1") {
													echo "<i class='fa fa-check-square text-warning'></i>";
												} else {
													echo "<i class='fa fa-times-circle text-danger'></i>";
												}
												?> Supir
											</li>
										</ul>
										<p class="rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star unmark"></i>
										</p>
										<?php
										if ($mb->status == "1") {
											echo anchor('customer/rental/tambah_rental/' . $mb->id_mobil, '<span class="rent-btn">Rental</span>');
										} else {
											echo "<span class='rent-btn'>Tidak Tersedia</span>";
										} ?>
										<a href="<?php echo base_url('customer/data_mobil/detail_mobil/' . $mb->id_mobil) ?>" class="rent-btn">Detail</a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
