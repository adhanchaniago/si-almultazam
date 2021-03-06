<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

	<title>Form Pendaftaran Jamaah Al Multazam</title>

	<script src="<?php echo e(asset('js/jquery-2.2.3.min.js')); ?>"></script>

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
	<!-- <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.png')); ?>"> -->

	<!-- Scripts -->
	<script src="<?php echo e(asset('js/jquery-3.1.0.min.js')); ?>"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<body>

<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('img/logo-utama-1.png')); ?>" class="logo-brand">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="">Login</a></li>
                        <li><a href="#">Daftar</a></li>
                    <?php else: ?>
                        <li>
                            <a href="#">Daftar Peserta</a>
                        </li>
                        <li>
                            <a href="#">Cek Setoran Tabungan</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="">Ubah Username</a>
                                </li>
                                <li>
                                    <a href="">Ubah Password</a>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

	<?php echo $__env->yieldContent('content'); ?>

	<footer>
		
		<div id="top-footer" class="clearfix">
			<div class="footer-content">
				<div class="top-footer-wrap clearfix">
					<div class="col-xs-12 col-md-3 col-lg-3">

					</div>
					<div class="col-xs-12 col-md-3 col-lg-3">
						<div class="widget_text">
							<h3 class="footer-title">HEAD OFFICE</h3>
							<div class="textwidget">
								<p>Jl Slamet Riyadi Kartasura, Gang Windan Kudusan No 1, Gumpang, Sukoharjo, Jawa Tengah</p>
								<p>Hotline : 0812-2-6399937 / 0857-25687300</p>
								<p>Email : mitra.punama@gmail.com</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-3 col-lg-3">
						<div class="widget_text">
							<h3 class="footer-title">NAVIGASI</h3>
							<div class="textwidget">
								<div>
									<p class="link">
										<a href="http://www.almultazam.co.id/downloads">Download Berkas</a>
									</p>
									<p class="link">
										<a href="http://www.almultazam.co.id/download-secret">Download Berkas (Khusus Kanwil &amp; Kancab)</a>
									</p>
									<p class="link">
										<a href="http://www.almultazam.co.id/syarat-pendaftaran">Syarat Pendaftaran</a>
									</p>
									<p class="link">
										<a href="http://www.almultazam.co.id/faq">Pertanyaan Yang Sering Diajukan</a>
									</p>
									<p class="link">
										<a href="http://almultazam.co.id/ketentuan-promo">Ketentuan Promo</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-3 col-lg-3">
						<div class="widget_text">
							<h3 class="footer-title">LINK</h3>
							<div class="textwidget">
								<div>
									<p class="link">
										<a href="http://www.kemenag.go.id">KEMENAG</a>
									</p>
									<p class="link">
										<a href="http://www.himpuh.org">HIMPUH</a>
									</p>
									<p class="link">
										<a href="http://dashboard.siskohat.net">SISKOHAT</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="bottom-footer" class="clearfix">
			<div class="footer-content">
				<div class="copyright">
					&copy; 2014 - 2017. PT Darul Manasek International VISA, Umrah & Haji Khusus, Tiket, Land Arrangement
				</div>
				<ul class="social-icon">
					<span>Ikuti Kami di</span>
					<a href="https://www.facebook.com/almultazamtravel" class="facebook" data-title="Facebook" target="_blank">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="https://www.instagram.com/almultazam_travel" class="instagram" data-title="Instagram" target="_blank">
						<i class="fa fa-instagram"></i>
					</a>
				</ul>
			</div>
		</div>

	</footer>
</div>

<script>
	$(document).ready(function(){
		$("#next1").click(function(){
			$(".form-pt1").css({"display":"none"});
			$(".form-pt2").css({"display":"block"});
		});
		$("#back1").click(function(){
			$(".form-pt1").css({"display":"block"});
			$(".form-pt2").css({"display":"none"});
		});
		$("#next2").click(function(){
			$(".form-pt2").css({"display":"none"});
			$(".form-pt3").css({"display":"block"});
		});
		$("#back2").click(function(){
			$(".form-pt3").css({"display":"none"});
			$(".form-pt2").css({"display":"block"});
		});
	});
</script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>