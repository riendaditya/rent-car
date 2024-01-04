<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>
        <a class="btn btn-primary mb-3" href="<?php echo base_url('admin/data_customer/tambah_customer') ?>">Tambah Data</a>
        <!--- ini belom di benahin klo refresh suka muncul sendiri -->
        <?php echo $this->session->flashdata('pesan') ?>

        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>No. Telepon</th>
                    <th>No. KTP</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($customer as $cs) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $cs->nama ?></td>
                        <td><?php echo $cs->username ?></td>
                        <td><?php echo $cs->alamat ?></td>
                        <td><?php echo $cs->gender ?></td>
                        <td><?php echo $cs->no_telp ?></td>
                        <td><?php echo $cs->no_ktp ?></td>
                        <td><?php echo $cs->password ?></td>
                        <td>
                            <div class="row">
                                <a href="<?php echo base_url('admin/data_customer/update_customer/') . $cs->id_customer ?>" class="btn btn-sm btn-primary mr-2"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('admin/data_customer/delete_customer/') . $cs->id_customer ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin akan menghapus <?php echo $cs->nama?>');"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
