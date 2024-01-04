<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Datail Mobil</h1>
        </div>
    </section>

    <?php foreach ($detail as $dt) : ?>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sd-5">
                        <img  class="img-responsive" width="100%" src="<?php echo base_url() . 'assets/upload/' . $dt->gambar ?>">
                    </div>

                    <div class="col-md-7">
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
                                    if ($dt->status == "0") {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    }
                                    ?>
                                </td>
                            </tr>

                        </table>

                        <a class="btn btn-sm btn-danger ml-3" href="<?php echo base_url('admin/data_mobil') ?>">Kembali</a>

                        <a class="btn btn-sm btn-primary ml-2" href="<?php echo base_url('admin/data_mobil/update_mobil/' . $dt->id_mobil) ?>">Update</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>