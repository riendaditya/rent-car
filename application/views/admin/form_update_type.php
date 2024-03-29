<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Type Mobil</h1>
        </div>
        <?php foreach ($type as $tp) : ?>
            <form method="POST" action="<?php echo base_url('admin/data_type/update_type_aksi') ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id_type" value="<?php echo $tp->id_type ?>">
                    <input type="text" name="kode_type" class="form-control" value="<?php echo $tp->kode_type ?>">
                    <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label>Nama Type</label>
                    <input type="text" name="nama_type" class="form-control" value="<?php echo $tp->nama_type ?>">
                    <?php echo form_error('nama_type', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        <?php endforeach; ?> 
    </section>
</div>