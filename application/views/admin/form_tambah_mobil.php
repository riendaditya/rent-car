<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Input Data Mobil</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi'); ?>" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Type Mobil</label>
                                <select name="kode_type" class="form-control">
                                    <option value="">--Pilih Type Mobil</option>
                                    <?php foreach ($type as $tp) : ?>
                                        <option value="<?php echo $tp->kode_type ?>">
                                            <?php echo $tp->nama_type ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" name="merk" class="form-control">
                                <?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>No Plat</label>
                                <input type="text" name="no_plat" class="form-control">
                                <?php echo form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Transmisi</label>
                                <input type="text" name="transmisi" class="form-control">
                                <?php echo form_error('transmisi', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Bahan Bakar</label>
                                <input type="text" name="bahan_bakar" class="form-control">
                                <?php echo form_error('bahan_bakar', '<div class="text-small text-danger">', '</div>/div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="text" name="tahun" class="form-control">
                                <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                        </div>
                        
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Warna</label>
                                <input type="text" name="warna" class="form-control">
                                <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control">
                                <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Denda</label>
                                <input type="text" name="denda" class="form-control">
                                <?php echo form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Supir</label>
                                <select name="supir" class="form-control">

                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                                <?php echo form_error('supir', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="">--Pilih Status--</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
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
            </div>
        </div>
    </section>
</div>