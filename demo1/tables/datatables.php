<?php
    include ("../koneksi.php");
    $result = mysqli_query($connect, "SELECT * FROM data_disabilitas");



?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Tables - Atlantis Lite Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="../index.html" class="logo">
					<img src="../../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages 									
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="../../assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../../assets/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../../assets/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../../assets/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="../../assets/img/profile2.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file-1"></i>
													<span class="text">Generated Report</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-database"></i>
													<span class="text">Create New Database</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-pen"></i>
													<span class="text">Create New Post</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-interface-1"></i>
													<span class="text">Create New Task</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-list"></i>
													<span class="text">Completed Tasks</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file"></i>
													<span class="text">Create New Invoice</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="../index.html">
								<i class="fas fa-home"></i>
								<span class="sub-item">Dashboard</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="../forms/forms.php">
								<i class="fas fa-pen-square"></i>
								<p>Forms</p>
							</a>
						</li>
						<li class="nav-item active submenu">
							<a href="../tables/datatables.php">
								<i class="fas fa-table"></i>
								<p>Tables</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">DataTables.Net</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Tables</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Datatables</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Add Row</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add Row
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														New</span> 
														<span class="fw-light">
															Row
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Create a new row using this form, make sure you fill them all</p>
													<form>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Nama</label>
																	<input id="nama" type="text" class="form-control" placeholder="Isi nama">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Tempat lahir</label>
																	<input id="tempat_lahir" type="text" class="form-control" placeholder="isi Tempat Lahir">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Tanggal Lahir</label>
																	<input id="tanggal_lahir" type="date" class="form-control" placeholder="fill office">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Umur</label>
																	<input type="number" class="form-control" placeholder="1" id="umur">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>NIK</label>
																	<input type="number" class="form-control" id="nik" placeholder="No NIK Sesuai KK">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Jenis Kelamin</label>
																	<input type="text" class="form-control" id="jenis_kelamin">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Jenis Disabilitas</label>
																	<input type="text" class="form-control" id="jenis_disabilitas">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Gambaran Disabilitas</label>
																	<input type="text" class="form-control file-upload-info">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Sejak Kapan</label>
																	<input type="date" class="form-control" id="sejak_kapan">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Penyebab Disabilitas</label>
																	<input type="text" class="form-control" id="penyebab_disabilitas">											
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Agama</label>
																	<input type="text" class="form-control" id="agama">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Pendidikan Terakhir</label>
																	<input type="text" class="form-control" id="pendidikan">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Status Kawin</label>
																	<select type="text" class="form-control" id="status_kawin">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Alamat</label>
																	<input type="text" class="form-control" id="alamat" placeholder="Alamat Sesuai KK">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Alamat Domisili</label>
																	<input type="text" class="form-control" id="alamat_domisili">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Program Bantuan Pemerintah</label>
																	<input type="text" class="form-control" id="program_pemerintah">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Pekerjaan Disabilitas</label>
																	<input type="text" class="form-control" id="pekerjaan_disabilitas" placeholder="Pekerjaan Sesuai KK">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Pekerjaan Ayah</label>
																	<input type="text" class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Sesuai KK">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Pekerjaan Ibu</label>
																	<input type="text" class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Sesuai KK">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Penghasilan Disabilitas</label>
																	<input type="number" class="form-control" id="penghasilan_disabilitas">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Penghasilan Orang Tua</label>
																	<input type="number" class="form-control" id="penghasilan_orangtua">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Nama Wali</label>
																	<input type="text" class="form-control" id="nama_wali" placeholder="Jika Ada">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Pekerjaan Wali</label>
																	<input type="text" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali Jika ada">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Penghasilan Wali</label>
																	<input type="number" class="form-control" aria-label="banyak (dalam bentuk rupiah)" id="penghasilan_wali">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Bantuan yg Dibutuhkan</label>
																	<input type="text" class="form-control" id="bantuan_ygdibutuhkan">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>PPKS Tinggal Bersama</label>
																	<input type="text" class="form-control" id="ppks_tinggal_bersama">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>No Hp</label>
																	<input type="number" class="form-control" id="no_hp" placeholder="0812345678910">
																</div>
															</div>															
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striiped table-hover" >
										<thead>
											<tr role="row"><th rowspan="1" colspan="1">Nama</th><th rowspan="1" colspan="1">Tempat Lahir</th><th rowspan="1" colspan="1">Tanggal Lahir</th><th rowspan="1" colspan="1">Umur</th><th rowspan="1" colspan="1">NIK</th><th rowspan="1" colspan="1">Jenis Kelamin</th><th rowspan="1" colspan="1">Jenis Disabilitas</th><th rowspan="1" colspan="1">Gambaran Disabilitas</th><th rowspan="1" colspan="1">Sejak Kapan</th><th rowspan="1" colspan="1">Penyebab Disabilitas</th><th rowspan="1" colspan="1">Agama</th><th rowspan="1" colspan="1">Pendidikan Terakhir</th><th rowspan="1" colspan="1">Status Kawin</th><th rowspan="1" colspan="1">Alamat</th><th rowspan="1" colspan="1">Alamat Domisili</th><th rowspan="1" colspan="1">Program Bantuan Pemerintah</th><th rowspan="1" colspan="1">Pekerjaan Disabilitas</th><th rowspan="1" colspan="1">Pekerjaan Ayah</th><th rowspan="1" colspan="1">Pekerjaan Ibu</th><th rowspan="1" colspan="1">Penghasilan Disabilitas</th><th rowspan="1" colspan="1">Penghasilan Orang Tua</th><th rowspan="1" colspan="1">Nama Wali</th><th rowspan="1" colspan="1">Pekerjaan Wali</th><th rowspan="1" colspan="1">Penghasilan Wali</th><th rowspan="1" colspan="1">Bantuan yg Dibutuhkan</th><th rowspan="1" colspan="1">PPKS Tinggal Bersama</th><th rowspan="1" colspan="1">No Hp</th><th rowspan="1" colspan="1" style="padding: 0 3rem !important;">Aksi </th></tr>
                                                </thead>
												<tr>
													<th>Nama</th>
													<th>Tempat Lahir</th>
													<th>Tanggal Lahir</th>
													<th>Umur</th>
													<th>NIK</th>
													<th>Jenis Kelamin</th>
													<th>Jenis Disabilitas</th>
													<th>Gambaran Disabilitas</th>
													<th>Sejak Kapan</th>
													<th>Penyebab Disabilitas</th>
													<th>Agama</th>
													<th>Pendidikan Terakhir</th>
													<th>Status Kawin</th>
													<th>Alamat</th>
													<th>Alamat Domisili</th>
													<th>Program Bantuan Pemerintah</th>
													<th>Pekerjaan Disabilitas</th>
													<th>Pekerjaan Ayah</th>
													<th>Pekerjaan Ibu</th>
													<th>Penghasilan Disabilitas</th>
													<th>Penghasilan Orang Tua</th>
													<th>Nama Wali</th>
													<th>Pekerjaan Wali</th>
													<th>Penghasilan Wali</th>
													<th>Bantuan yg Dibutuhkan</th>
													<th>PPKS Tinggal Bersama</th>
													<th>No Hp</th>
													<th>Aksi </th>
												</tr>
											<?php if (mysqli_num_rows($result) > 0) {
                                                while($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['nama']; ?></td>
                                                    <td><?php echo $row['tempat_lahir']; ?></td>
													<td><?php echo $row['tanggal_lahir']; ?></td>
													<td><?php echo $row['umur']; ?></td>
                                                    <td><?php echo $row['nik']; ?></td>
                                                    <td><?php echo $row['jenis_kelamin']; ?></td>
                                                    <td><?php echo $row['jenis_disabilitas']; ?></td>
                                                    <td><?php echo $row['gambaran_disabilitas']; ?></td>
                                                    <td><?php echo $row['sejak_kapan']; ?></td>
                                                    <td><?php echo $row['penyebab_disabilitas']; ?></td>
                                                    <td><?php echo $row['agama']; ?></td>
                                                    <td><?php echo $row['pendidikan']; ?></td>
                                                    <td><?php echo $row['status_kawin']; ?></td>
                                                    <td><?php echo $row['alamat']; ?></td>
													<td><?php echo $row['alamat_domisili']; ?></td>
                                                    <td><?php echo $row['program_pemerintah']; ?></td>
                                                    <td><?php echo $row['pekerjaan_disabilitas']; ?></td>
                                                    <td><?php echo $row['pekerjaan_ayah']; ?></td>
                                                    <td><?php echo $row['pekerjaan_ibu']; ?></td>
                                                    <td><?php echo $row['penghasilan_disabilitas']; ?></td>
                                                    <td><?php echo $row['penghasilan_orangtua']; ?></td>
                                                    <td><?php echo $row['nama_wali']; ?></td>
                                                    <td><?php echo $row['pekerjaan_wali']; ?></td>
													<td><?php echo $row['penghasilan_wali']; ?></td>
                                                    <td><?php echo $row['bantuan_ygdibutuhkan']; ?></td>
                                                    <td><?php echo $row['ppks_tinggal_bersama']; ?></td>
													<td><?php echo $row['no_hp']; ?></td>
												</tr>
                                            <td style="text-align: center;">
                                                
												<a class='btn btn-info btn-xs' href="edit_table.php?nik=<?php echo $row['nik'] ?>" class=""> <i class="mdi mdi-table-edit icon-sm"></i></a>
                                                <a class='btn btn-danger btn-xs' href="hapus_table.php?nik=<?php echo $row['nik'] ?>" class="mdi mdi-delete icon-sm" onclick="return confirm('Yakin ingin menghapus data?')";><i class="mdi mdi-delete icon-sm"></i>
                                                </a>
                                            </td>
                                            </tr>
                                                <?php
                                                }
                                            } else {
                                                echo "Maaf Database error, silahkan hubungi pihak Dinas Sosial";
                                            } ?>
                                        </thead>
											<!--isi dari data-->

											<!--end isi data-->
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2022, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>				
				</div>
			</footer>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets/js/core/popper.min.js"></script>
	<script src="../../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/setting-demo2.js"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>