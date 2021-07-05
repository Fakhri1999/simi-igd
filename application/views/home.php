<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Simi IGD | Halaman Utama</title>

	<!-- Bootstrap -->
	<link href="<?= base_url('') ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url('') ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?= base_url('') ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="<?= base_url('') ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="<?= base_url('') ?>assets/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="<?= base_url('') ?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="<?= base_url('') ?>assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="<?= base_url('') ?>assets/vendors/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="<?= base_url('') ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?= base_url('') ?>assets/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-hospital-o"></i> <span>Simi IGD</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="<?= base_url('') ?>assets/images/admin.png" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Halo,</span>
							<h2>Admin</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url('') ?>">Halaman Utama</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i> Pendaftaran <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url('pasien/baru') ?>">Daftar Baru</a></li>
										<li><a href="<?= base_url('pasien/cari') ?>">Cari Pasien</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="right" title="Logout" href="<?= base_url('login/logout') ?>">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									<img src="<?= base_url('') ?>assets/images/admin.png" alt="">Admin
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="javascript:;"> Profile</a>
									<a class="dropdown-item" href="javascript:;">
										<span class="badge bg-red pull-right">50%</span>
										<span>Settings</span>
									</a>
									<a class="dropdown-item" href="javascript:;">Help</a>
									<a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="x_panel">
								<h1><b>Halaman Utama</b></h1>
								<h4>Selamat Datang di Sistem Informasi IGD RSIA Bunda</h4>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-6">
							<div class="x_panel">
								<center>
									<h2 class="display-2"><b><?= sizeof($totalPasien) ?></b></h2>
									<h5>Pasien hari ini</h5>
								</center>
							</div>
						</div>
						<div class="col-6">
							<div class="x_panel">
								<center>
									<h5><b><?= date("l, j F Y"); ?></b></h5>
									<center>
										<h1 class="display-1"><?= date("H:i"); ?></h1>
									</center>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-3">
							<div class="x_panel">
								<center>
									<h1><b><?= sizeof($totalPonekPasien) ?></b></h1>
									<h5>Pasien Ponek</h5>
								</center>
							</div>
						</div>
						<div class="col-3">
							<div class="x_panel">
								<center>
									<h1><b><?= sizeof($totalNonPonekPasien) ?></b></h1>
									<h5>Pasien Non Ponek</h5>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->
			<!-- jQuery -->
			<script src="<?= base_url('') ?>assets/vendors/jquery/dist/jquery.min.js"></script>
			<!-- Bootstrap -->
			<script src="<?= base_url('') ?>assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
			<!-- FastClick -->
			<script src="<?= base_url('') ?>assets/vendors/fastclick/lib/fastclick.js"></script>
			<!-- NProgress -->
			<script src="<?= base_url('') ?>assets/vendors/nprogress/nprogress.js"></script>
			<!-- bootstrap-progressbar -->
			<script src="<?= base_url('') ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
			<!-- iCheck -->
			<script src="<?= base_url('') ?>assets/vendors/iCheck/icheck.min.js"></script>
			<!-- bootstrap-daterangepicker -->
			<script src="<?= base_url('') ?>assets/vendors/moment/min/moment.min.js"></script>
			<script src="<?= base_url('') ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
			<!-- bootstrap-wysiwyg -->
			<script src="<?= base_url('') ?>assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
			<script src="<?= base_url('') ?>assets/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
			<script src="<?= base_url('') ?>assets/vendors/google-code-prettify/src/prettify.js"></script>
			<!-- jQuery Tags Input -->
			<script src="<?= base_url('') ?>assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
			<!-- Switchery -->
			<script src="<?= base_url('') ?>assets/vendors/switchery/dist/switchery.min.js"></script>
			<!-- Select2 -->
			<script src="<?= base_url('') ?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
			<!-- Parsley -->
			<script src="<?= base_url('') ?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
			<!-- Autosize -->
			<script src="<?= base_url('') ?>assets/vendors/autosize/dist/autosize.min.js"></script>
			<!-- jQuery autocomplete -->
			<script src="<?= base_url('') ?>assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
			<!-- starrr -->
			<script src="<?= base_url('') ?>assets/vendors/starrr/dist/starrr.js"></script>
			<!-- Custom Theme Scripts -->
			<script src="<?= base_url('') ?>assets/build/js/custom.min.js"></script>

</body>

</html>
