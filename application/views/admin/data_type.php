<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Type Mobil</h1>
        </div>

        <a class="btn btn-primary mb-3" href="<?php echo base_url('admin/data_type/tambah_type') ?>">Tambah Type</a>
        <?php echo $this->session->flashdata('pesan'); ?>

        <div class="card-body">
            <div class="table-responsive">
                <table id="table1" class="table table-bordered table-md">
                    <thead>
                        <tr>
                            <th width="20px">No</th>
                            <th>Kode Type</th>
                            <th>Nama Type</th>
                            <th width="150px">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach ($type as $tp): ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $tp->kode_type ?></td>
                            <td><?php echo $tp->nama_type ?></td>
                            <td>
                                <a class="btn btn-sn btn-primary" href="<?php echo base_url('admin/data_type/update_type/'. $tp->id_type) ?>"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-sn btn-danger" href="<?php echo base_url('admin/data_type/delete_type/'. $tp->id_type)?>" onclick="return confirm('Anda yakin akan menghapus type<?php echo $tp->nama_type ?>');"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
