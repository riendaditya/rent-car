<footer class="main-footer">
	<div class="footer-left">
		Copyright &copy; 2023 <div class="bullet"></div> Design By Berkah Insani RentCar</a>
	</div>
	<div class="footer-right">
		2.3.0
	</div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="<?php echo base_url('assets/admin_stisla') ?>/assets/modules/jquery.min.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/assets/modules/popper.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/assets/modules/tooltip.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/assets/modules/moment.min.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/assets/js/stisla.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="<?php echo base_url('assets/admin_stisla') ?>/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/node_modules/chart.js/dist/Chart.min.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/node_modules/summernote/dist/summernote-bs4.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Template JS File -->
<script src="<?php echo base_url('assets/admin_stisla') ?>/assets/js/scripts.js"></script>
<script src="<?php echo base_url('assets/admin_stisla') ?>/assets/js/custom.js"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url('assets/admin_stisla') ?>/assets/js/page/index-0.js"></script>

<!-- datatables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<!-- <script>
	$(document).ready(function() {
		$('#table1').DataTable();
	});
</script> -->
<script>
	$(document).ready(function() {
		$('#table1').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		});
	})
</script>
</body>

</html>
<script>
	$(document).ready(function () {
    var body = $('body');
    $(".main-sidebar .sidebar-menu > li").each(function() {
        let me = $(this);

        if(me.find('> .dropdown-menu').length) {
        me.find('> .dropdown-menu').hide();
        me.find('> .dropdown-menu').prepend('<li class="dropdown-title pt-3">'+ me.find('> a').text() +'</li>');
        }else{
        me.find('> a').attr('data-toggle', 'tooltip');
        me.find('> a').attr('data-original-title', me.find('> a').text());
        $("[data-toggle='tooltip']").tooltip({
            placement: 'right'
        });
        }
    });
});
</script>
<!-- Eksekusi Form Login -->
<?php
if (isset($_POST['submit'])) {
	$user = $_POST['username'];
	$password = $_POST['password'];

	// Query untuk memilih tabel
	$cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
	$hasil = mysqli_fetch_array($cek_data);
	$status = $hasil['status'];
	$login_user = $hasil['username'];
	$row = mysqli_num_rows($cek_data);

	// Pengecekan Kondisi Login Berhasil/Tidak
	if ($row > 0) {
		session_start();
		$_SESSION['login_user'] = $login_user;

		if ($status == 'admin') {
			header('location: admin.php');
			exit();
		} elseif ($status == 'user') {
			header('location: user.php');
		}
	} else {
		header("location: login.php");
	}
}
?>
</div>
<!-- Akhir Eksekusi Form Login -->
