<table style="width: 100%;">
    <h1>Invoice Pembayaran Anda</h1>
    <?php foreach ($transaksi as $tr) : ?>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?php echo $tr->nama ?></td>
        </tr>

        <tr>
            <td>Merk Mobil</td>
            <td>:</td>
            <td><?php echo $tr->merk ?></td>
        </tr>

        <tr>
            <td>Tanggal Rental</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_rental ?></td>
        </tr>

        <tr>
            <td>tanggal kembali</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_kembali ?></td>
        </tr>

        <tr>
            <?php
            $x = strtotime($tr->tanggal_kembali);
            $y = strtotime($tr->tanggal_rental);
            $jumlah = abs(($x - $y) / (60 * 60 * 24))
            ?>
            <td>Jumlah Hari Sewa</td>
            <td>:</td>
            <td><?php echo $jumlah ?> Hari</td>
        </tr>

        <tr>
            <td>Harga Sewa/hari</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->harga, 0, ",", ".") ?></td>
        </tr>

        <tr class="text-success">
            <td>Jumlah Pembayaran</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->harga * $jumlah, 0, ",", ".") ?></td>
        </tr>

        <tr>
            <td>Merk Mobil</td>
            <td>:</td>
            <td><?php
                if ($tr->status_pembayaran == "1") {
                    echo "<span style='color:green';>INVOICE SUDAH DIBAYAR !!</span>";
                } else {
                    echo "<span style='color:red;'>Invoice Belum Dibayar, mohon Selesaikan Pembayaran Anda!</span>";
                }
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<script type="text/javascript">
    window.print();
</script>