<!--== Footer Area Start ==-->
<section id="footer-area">

	<div class="footer-widget-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="single-footer-widget">
						<h2>Hubungi Kami!</h2>
						<div class="widget-body">
							<p><strong>CV BERKAH BINA INSANI</strong></p>
							<ul class="get-touch">
								<li><i class="fa fa-map-marker"></i>Jalan Danau Batur 2 No 33 RT 02 RW 05 Kel. Abadijaya Kec. Sukmajaya Kota Depok
									Kode Pos 16417</li>
								<li><i class="fa fa-mobile"></i> +6285721292965</li>
							</ul>
							<a href="https://goo.gl/maps/H4Cz8W1RupZ1QjbC6" class="map-show" target="_blank">Show Location</a>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>

	<!-- Footer Bottom Start -->
	<div class="footer-bottom-area fixed">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> CV BERKAH BINA INSANI | BERKAH INSANI RENTCAR
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Bottom End -->
</section>
<!--== Footer Area End ==-->

<!--== Scroll Top Area Start ==-->
<div class="scroll-top">
	<img src="<?php echo base_url('assets/home') ?>/img/bg.jpg" alt="JSOFT">
</div>
<!--== Scroll Top Area End ==-->

<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/jquery-3.2.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/jquery-migrate.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<!-- <script src="<?php echo base_url('assets/home') ?>/js/bootstrap.min.js"></script> -->
<!--=== Gijgo Min Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/plugins/gijgo.js"></script>
<!--=== Vegas Min Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/plugins/vegas.min.js"></script>
<!--=== Isotope Min Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/plugins/isotope.min.js"></script>
<!--=== Owl Caousel Min Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/plugins/owl.carousel.min.js"></script>
<!--=== Waypoint Min Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/plugins/waypoints.min.js"></script>
<!--=== CounTotop Min Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/plugins/counterup.min.js"></script>
<!--=== YtPlayer Min Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/plugins/mb.YTPlayer.js"></script>
<!--=== Magnific Popup Min Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/plugins/magnific-popup.min.js"></script>
<!--=== Slicknav Min Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/plugins/slicknav.min.js"></script>

<!--=== Mian Js ===-->
<script src="<?php echo base_url('assets/home') ?>/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
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
