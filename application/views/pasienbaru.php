<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Simi IGD | Daftar Baru</title>

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
							<center>
								<h5>Sistem Informasi IGD RSIA Bunda</h5>
							</center>
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
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3><b>Pendaftaran Pasien Baru</b></h3>
						</div>
					</div>
					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2><b>Identifikasi Pasien |<small>Data Pasien</small></b></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?= base_url('pasien/simpan') ?>">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No. RM <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="no_rm" required="required" class="form-control" placeholder="Masukkan No. RM" required>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="nama_pasien" placeholder="Masukkan Nama Lengkap" required>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIK/No Paspor <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="last-name" name="nik_pasien" required="required" class="form-control" placeholder="Masukkan sesuai kartu identitas" required>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="tempat_lahir" placeholder="Kota/Kab" required>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="birthday" class="date-picker form-control" name="tanggal_lahir" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
											<div class="col-md-6 col-sm-6 ">
												<p>
													<input type="radio" class="flat" name="gender_pasien" id="genderM" value="M" checked="" required />
													Laki-laki </br>
													<input type="radio" class="flat" name="gender_pasien" id="genderF" value="F" />
													Perempuan
												</p>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Kebangsaan</label>
											<div class="col-md-6 col-sm-6 ">
												<p>
													<input type="radio" class="flat" name="kebangsaan_pasien" id="wni" value="WNI" checked="" required />
													WNI </br>
													<input type="radio" class="flat" name="kebangsaan_pasien" id="wna" value="WNA" />
													WNA
												</p>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Agama</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="agama" required>
													<option>Pilih Agama</option>
													<option>Islam</option>
													<option>Kristen</option>
													<option>Katholik</option>
													<option>Hindu</option>
													<option>Buddha</option>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Status Menikah</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="status_menikah" required>
													<option>Pilih Status</option>
													<option>Belum Menikah</option>
													<option>Menikah</option>
													<option>Janda</option>
													<option>Duda</option>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="pekerjaan" required>
													<option>Pilih Pekerjaan</option>
													<option>PNS</option>
													<option>Tentara/Polisi</option>
													<option>Belum Bekerja</option>
													<option>Wiraswasta</option>
													<option>Lainnya</option>
												</select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea class="form-control" rows="3" name="alamat_pasien" placeholder="Alamat Lengkap (sesuai domisili)" required></textarea>
											</div>
										</div>


										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No. Telepon</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="no_telp_pasien" placeholder="Masukkan nomor yang aktif" required>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Pasien</label>
											<div class="col-md-6 col-sm-6 ">
												<p>
													<input type="radio" class="flat" name="jenis_pasien" id="ponek" value="ponek" checked="" required />
													Ponek </br>
													<input type="radio" class="flat" name="jenis_pasien" id="non" value="non-ponek" />
													Non Ponek
												</p>
											</div>
										</div>

								</div>
							</div>
						</div>

						<div class="col-md-12 col-sm-12  ">
							<div class="x_panel">
								<div class="x_title">
									<h2><b>Identifikasi Pasien |<small>Data Penanggungjawab</small></b></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="">

										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="nama_penanggungjawab" placeholder="Masukkan Nama Lengkap" required>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIK/No Paspor <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="last-name" name="nik_penanggungjawab" required="required" class="form-control" placeholder="Masukkan sesuai kartu identitas" required>
											</div>
										</div>
										<!-- <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
											<div class="col-md-6 col-sm-6 ">
												<p>
													<input type="radio" class="flat" name="gender_penanggungjawab" id="genderM" value="M" checked="" required />
													Laki-laki </br>
													<input type="radio" class="flat" name="gender_penanggungjawab" id="genderF" value="F" />
													Perempuan
												</p>
											</div>
										</div> -->
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea class="form-control" rows="3" name="alamat_penanggungjawab" placeholder="Alamat Lengkap (sesuai domisili)" required></textarea>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No. Telepon</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="no_telp_penanggungjawab" placeholder="Masukkan nomor yang aktif" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Hubungan</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="hubungan_penanggungjawab" required>
													<option selected disabled>Pilih Hubungan</option>
													<option value="Suami/Istri">Suami/Istri</option>
													<option value="Orangtua">Orangtua</option>
													<option value="Adik/Kakak">Adik/Kakak</option>
													<option value="Kerabat">Kerabat</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Petugas</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="nama_petugas" placeholder="Petugas yang mengisi" required>
											</div>
										</div>

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Simpan</button>
												<button class="btn btn-primary" type="button" onclick="">Bersihkan</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						</form>
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
