<?php

    include ("../koneksi.php");
    $result = mysqli_query($connect, "SELECT * FROM data_disabilitas");
	
    if (isset($_POST['tambah'])) {
		$nama =  $_POST['nama']; 
		$tempat_lahir =  $_POST['tempat_lahir'];
		$tanggal_lahir =  $_POST['tanggal_lahir'];
		$umur =  $_POST['umur'];
		$nik =  $_POST['nik'];
		$jenis_kelamin =  $_POST['jenis_kelamin'];
        $jenis_disabilitas =  $_POST['jenis_disabilitas'];
		$gambaran_disabilitas =  $_POST['gambaran_disabilitas'];
		$sejak_kapan =  $_POST['sejak_kapan'];
		$penyebab_disabilitas =  $_POST['penyebab_disabilitas'];
        $agama =  $_POST['agama'];
        $pendidikan =  $_POST['pendidikan'];
        $status_kawin =  $_POST['status_kawin'];
        $alamat =  $_POST['alamat'];
		$alamat_domisili =  $_POST['alamat_domisili'];
        $program_pemerintah =  $_POST['program_pemerintah'];
        $pekerjaan_disabilitas =  $_POST['pekerjaan_disabilitas'];
        $pekerjaan_ayah =  $_POST['pekerjaan_ayah'];
        $pekerjaan_ibu =  $_POST['pekerjaan_ibu'];
        $penghasilan_disabilitas =  $_POST['penghasilan_disabilitas'];
        $penghasilan_orangtua =  $_POST['penghasilan_orangtua'];
        $nama_wali =  $_POST['nama_wali'];
        $pekerjaan_wali =  $_POST['pekerjaan_wali'];
		$penghasilan_wali =  $_POST['penghasilan_wali'];
        $bantuan_ygdibutuhkan =  $_POST['bantuan_ygdibutuhkan'];
        $ppks_tinggal_bersama =  $_POST['ppks_tinggal_bersama']; 
		$no_hp =  $_POST['no_hp'];

        $result = mysqli_query($connect, "INSERT INTO data_disabilitas(
                    nama,
                    tempat_lahir,
					tanggal_lahir,
					umur,
                    nik,
                    jenis_kelamin,
                    jenis_disabilitas,
                    gambaran_disabilitas,
                    sejak_kapan,
                    penyebab_disabilitas,
                    agama,
                    pendidikan,
                    status_kawin,
                    alamat,
					alamat_domisili,
                    program_pemerintah,
                    pekerjaan_disabilitas,
                    pekerjaan_ayah,
                    pekerjaan_ibu,
                    penghasilan_disabilitas,
                    penghasilan_orangtua,
                    nama_wali,
                    pekerjaan_wali,
					penghasilan_wali,
                    bantuan_ygdibutuhkan,
                    ppks_tinggal_bersama,
					no_hp)
                    VALUES(
                    '$nama',
                    '$tempat_lahir',
					'$tanggal_lahir',
					'$umur',
                    '$nik',
                    '$jenis_kelamin',
                    '$jenis_disabilitas',
                    '$gambaran_disabilitas',
                    '$sejak_kapan',
                    '$penyebab_disabilitas',
                    '$agama',
                    '$pendidikan',
                    '$status_kawin',
                    '$alamat',
					'$alamat_domisili',
                    '$program_pemerintah',
                    '$pekerjaan_disabilitas',
                    '$pekerjaan_ayah',
                    '$pekerjaan_ibu',
                    '$penghasilan_disabilitas',
                    '$penghasilan_orangtua',
                    '$nama_wali',
                    '$pekerjaan_wali',
					'$penghasilan_wali',
                    '$bantuan_ygdibutuhkan',
                    '$ppks_tinggal_bersama'
					'$no_hp')
                    "
        );
    if ($result) {
    $log = mysqli_query($connect, "insert into log(log) values('Admin menambahkan data disabilitas dengan nik".$nik." dari nama ".$nama."')");
    echo "<script>
    window.alert('Data Berhasil Disimpan');
    window.location = '../demo1/tables/datatables.php';
    </script>";
    }   
    else {
    echo '<script>
    window.alert("gagal");
    </script>';
    } 

}   



?> 



<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Dinsos Web</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets/img/icon1.png" type="image/x-icon"/>
	
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
				
				<a href="../index.php" class="logo">
					<img src="../../assets/img/logo.png" alt="navbar brand" class="navbar-brand" style="width: 3.5rem;">
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
							<div class="input-group" style="width: 600px;">
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
								<div class="scroll-wrapper dropdown-user-scroll scrollbar-outer" style="position: relative;"><div class="scroll-wrapper dropdown-user-scroll scrollbar-outer scroll-content" style="position: relative;"><div class="scroll-wrapper dropdown-user-scroll scrollbar-outer scroll-content" style="position: relative;"><div class="dropdown-user-scroll scrollbar-outer scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
									<li>
										<div class="user-box">
											<div class="avatar-lg">
												<img src="../../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="../logout.php">Logout</a>
									</li>
								</div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar ui-draggable ui-draggable-handle"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar ui-draggable ui-draggable-handle"></div></div></div></div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar ui-draggable ui-draggable-handle"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar ui-draggable ui-draggable-handle"></div></div></div></div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar ui-draggable ui-draggable-handle"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar ui-draggable ui-draggable-handle"></div></div></div></div>
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
					<div class="user" style="
    margin-bottom: 10px;
    padding-bottom: 20px;
">
						<div class="avatar-sm float-left mr-2">
							<img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level"></span>
								</span>
							</a>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="../index.php">
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
						<h4 class="page-title">Table</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="../index.php">
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
								<a href="#">Data Disabilitas</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data Disabilitas</h4>
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
																	<input id="nama" type="text" class="form-control" placeholder="Isi nama" name="nama">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Tempat lahir</label>
																	<input id="tempat_lahir" type="text" class="form-control" placeholder="isi Tempat Lahir" name="tempat_lahir">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Tanggal Lahir</label>
																	<input id="tanggal_lahir" type="date" class="form-control" placeholder="fill office" name="tanggal_lahir">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Umur</label>
																	<input type="number" class="form-control" placeholder="1" id="umur" name="umur">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>NIK</label>
																	<input type="number" class="form-control" id="nik" placeholder="No NIK Sesuai KK" name="nik"> 
																</div>
															</div>
															<div class="form-group">
																<label class="form-label">Jenis Kelamin</label>
																<div class="selectgroup w-100">
																	<label class="selectgroup-item" id="jenis_kelamin"  name="jenis_kelamin">
																		<input type="radio" name="value" value="50" class="selectgroup-input" checked="">
																		<span class="selectgroup-button">Laki-Laki</span>
																	</label>
																	<label class="selectgroup-item" id="jenis_kelamin"  name="jenis_kelamin">
																		<input type="radio" name="value" value="100" class="selectgroup-input">
																		<span class="selectgroup-button">Perempuan</span>
																	</label>
																</div>
															</div>	
															<div class="form-group">
																<label for="jenis_disabilitas">Jenis Disabilitas</label>
																<select class="form-control" id="jenis_disabilitas" name="jenis_disabilitas">
																	<option>-</option>
																	<option>PDFSK (Penyandang Disabilitas Fisik) </option>
																	<option>PDINT (Penyandang Disabilitas Intelektual)</option>
																	<option>PDMTL (Penyandang Disabilitas Mental) </option>
																	<option>PDSNS (Penyandang Disabilitas Sensorik) </option>
																</select>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Gambaran Disabilitas</label>
																	<input type="text" class="form-control file-upload-info"  id="gambaran_disabilitas" name="gambaran_disabilitas">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Sejak Kapan</label>
																	<input type="date" class="form-control" id="sejak_kapan" name="sejak_kapan">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Penyebab Disabilitas</label>
																	<input type="text" class="form-control" id="penyebab_disabilitas" name="penyebab_disabilitas">											
																</div>
															</div>
															<div class="form-group">
															<label for="agama">Agama</label>
															<select class="form-control" id="agama" name="agama">
																<option>-</option>
																<option>Islam</option>
																<option>Protestan</option>
																<option>Katolik</option>
																<option>Hindu</option>
																<option>Buddha</option>
															</select>
															</div>
															<div class="form-group">
																<label for="pendidikan">Pendidikan Terakhir</label>
																<select class="form-control" id="pendidikan" name="pendidikan">
																	<option>TIDAK / BELUM SEKOLAH</option>
																	<option>TAMAT SD / SEDERAJAT</option>
																	<option>TIDAK TAMAT SD / SEDERAJAT</option>
																	<option>SLTA / SEDERAJAT</option>
																	<option>SLTP/SEDERAJAT</option>
																	<option>DIPLOMA I / II</option>
																	<option>AKADEMI/ DIPLOMA III/S. MUDA</option>
																	<option>DIPLOMA IV/ STRATA I</option>
																	<option>STRATA II</option>
																	<option>STRATA III</option>
																</select>
															</div>
															<div class="form-group">
																<label for="status_kawin">Status Kawin</label>
																<select class="form-control" id="status_kawin" name="status_kawin">
																	<option>Belum Kawin</option>
																	<option>Kawin</option>
																	<option>Cerai Hidup</option>
																	<option>Cerai Mati</option>
																</select>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Alamat</label>
																	<input type="text" class="form-control" id="alamat" placeholder="Alamat Saat Ini" name="alamat">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Alamat Domisili</label>
																	<input type="text" class="form-control" id="alamat_domisili" placeholder="Alamat Sesuai KK" name="alamat_domisili">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Program Bantuan Pemerintah</label>
																	<input type="text" class="form-control" id="program_pemerintah" name="program_pemerintah">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Pekerjaan Disabilitas</label>
																	<input type="text" class="form-control" id="pekerjaan_disabilitas" placeholder="Pekerjaan Sesuai KK" name="pekerjaan_disabilitas">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Pekerjaan Ayah</label>
																	<input type="text" class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Sesuai KK" name="pekerjaan_ayah">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Pekerjaan Ibu</label>
																	<input type="text" class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Sesuai KK" name="pekerjaan_ibu">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Penghasilan Disabilitas</label>
																	<input type="number" class="form-control" id="penghasilan_disabilitas" name="penghasilan_disabilitas">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Penghasilan Orang Tua</label>
																	<input type="number" class="form-control" id="penghasilan_orangtua" name="penghasilan_orangtua">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Nama Wali</label>
																	<input type="text" class="form-control" id="nama_wali" placeholder="Jika Ada" name="nama_wali">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Pekerjaan Wali</label>
<<<<<<< HEAD
																	<input type="text" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali Jika ada" name="pekerjaan_wali">
=======
																	<input type="text" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali Jika ada">
																</div>
																	<label>Penghasilan Wali</label>
<<<<<<< HEAD
																	<input type="number" class="form-control" aria-label="banyak (dalam bentuk rupiah)" id="penghasilan_wali" name="penghasilan_wali">
=======
																	<input type="number" class="form-control" aria-label="banyak (dalam bentuk rupiah)" id="penghasilan_wali">
>>>>>>> master
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Bantuan yg Dibutuhkan</label>
<<<<<<< HEAD
																	<input type="text" class="form-control" id="bantuan_ygdibutuhkan" name="bantuan_ygdibutuhkan">
=======
																	<input type="text" class="form-control" id="bantuan_ygdibutuhkan">
>>>>>>> master
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>PPKS Tinggal Bersama</label>
<<<<<<< HEAD
																	<input type="text" class="form-control" id="ppks_tinggal_bersama" name="ppks_tinggal_bersama">
=======
																	<input type="text" class="form-control" id="ppks_tinggal_bersama">
>>>>>>> master
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>No Hp</label>
<<<<<<< HEAD
																	<input type="number" class="form-control" id="no_hp" placeholder="0812345678910" name="no_hp">
=======
																	<input type="number" class="form-control" id="no_hp" placeholder="0812345678910">
>>>>>>> master
																</div>
															</div>															
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
<<<<<<< HEAD
													<button type="button" id="tambah" class="btn btn-primary" name="tambah">Tambah</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
=======
													<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
>>>>>>> master
												</div>
											</div>
										</div>
									</div>
<<<<<<< HEAD
									<div class="table-responsive">
										<div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
											<div class="row">
												<div class="col-sm-12 col-md-6">
													<div class="dataTables_length" id="add-row_length"><label>Show <select name="add-row_length" aria-controls="add-row" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
												</div>
											</div>
											<div class="col-sm-12 col-md-6">
												<div id="add-row_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="add-row"></label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<table id="add-row" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="add-row_info">
										<thead>
											<tr role="row">
												<th class="sorting_asc" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 37.0312px;" aria-sort="ascending" aria-label="Nama: activate to sort column descending">Nama</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 46.8438px;" aria-label="Tempat Lahir: activate to sort column ascending">Tempat Lahir</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 47.5312px;" aria-label="Tanggal Lahir: activate to sort column ascending">Tanggal Lahir</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 35.6719px;" aria-label="Umur: activate to sort column ascending">Umur</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 24.7656px;" aria-label="NIK: activate to sort column ascending">NIK</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 51.625px;" aria-label="Jenis Kelamin: activate to sort column ascending">Jenis Kelamin</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 65.9375px;" aria-label="Jenis Disabilitas: activate to sort column ascending">Jenis Disabilitas</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 65.9375px;" aria-label="Gambar Disabilitas: activate to sort column ascending">Gambar Disabilitas</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 40.3125px;" aria-label="Sejak Kapan: activate to sort column ascending">Sejak Kapan</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 65.9375px;" aria-label="Penyebab Disabilitas: activate to sort column ascending">Penyebab Disabilitas</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 43.6406px;" aria-label="Agama: activate to sort column ascending">Agama</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 70.5469px;" aria-label="Pendidikan Terakhir: activate to sort column ascending">Pendidikan Terakhir</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 39.8125px;" aria-label="Status Kawin: activate to sort column ascending">Status Kawin</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 45.6094px;" aria-label="Alamat: activate to sort column ascending">Alamat</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 51.5156px;" aria-label="Alamat Domisili: activate to sort column ascending">Alamat Domisili</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 73.4844px;" aria-label="Program Bantuan Pemerintah: activate to sort column ascending">Program Bantuan Pemerintah</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 65.9375px;" aria-label="Pekerjaan Disabilitas: activate to sort column ascending">Pekerjaan Disabilitas</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 62.9219px;" aria-label="Pekerjaan Ayah: activate to sort column ascending">Pekerjaan Ayah</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 62.9219px;" aria-label="Pekerjaan Ibu: activate to sort column ascending">Pekerjaan Ibu</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 75.5156px;" aria-label="Penghasilan Disabilitas: activate to sort column ascending">Penghasilan Disabilitas</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 75.5156px;" aria-label="Penghasilan Orang Tua: activate to sort column ascending">Penghasilan Orang Tua</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 37.0312px;" aria-label="Nama Wali: activate to sort column ascending">Nama Wali</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 62.9219px;" aria-label="Pekerjaan Wali: activate to sort column ascending">Pekerjaan Wali</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 75.5156px;" aria-label="Penghasilan Wali: activate to sort column ascending">Penghasilan Wali</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 74.5469px;" aria-label="Bantuan yg Dibutuhkan: activate to sort column ascending">Bantuan yg Dibutuhkan</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 54.8906px;" aria-label="PPKS Tinggal Bersama: activate to sort column ascending">PPKS Tinggal Bersama</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 18.5469px;" aria-label="No Hp: activate to sort column ascending">No Hp</th>
												<th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" style="width: 18.5469px;" aria-label="Aksi">Aksi</th>
											</tr>
											
																				
										</tfoot>
										<!--isi dari data-->
										<tbody><tr class="odd">
=======

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
>>>>>>> master
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
<<<<<<< HEAD
													<td style="text-align: center;">
													<a class='btn btn-info btn-xs' href="edit_table.php?nik=<?php echo $row['nik'] ?>" class=""> <i class="mdi mdi-table-edit icon-sm"></i></a>
                                                	<a class='btn btn-danger btn-xs' href="hapus_table.php?nik=<?php echo $row['nik'] ?>" class="mdi mdi-delete icon-sm" onclick="return confirm('Yakin ingin menghapus data?')";><i class="mdi mdi-delete icon-sm"></i></a>
                                            		</td>
												</tr>
=======
												</tr>
                                            <td style="text-align: center;">
                                                
												<a class='btn btn-info btn-xs' href="edit_table.php?nik=<?php echo $row['nik'] ?>" class=""> <i class="mdi mdi-table-edit icon-sm"></i></a>
                                                <a class='btn btn-danger btn-xs' href="hapus_table.php?nik=<?php echo $row['nik'] ?>" class="mdi mdi-delete icon-sm" onclick="return confirm('Yakin ingin menghapus data?')";><i class="mdi mdi-delete icon-sm"></i>
                                                </a>
                                            </td>
                                            </tr>
>>>>>>> master
                                                <?php
                                                }
                                            } else {
                                                echo "Maaf Database error, silahkan hubungi pihak Dinas Sosial";
                                            } ?>
<<<<<<< HEAD
										</thead>
										<tfoot>
											<tr>
												<th rowspan="1" colspan="1">Nama</th>
												<th rowspan="1" colspan="1">Tempat Lahir</th>
												<th rowspan="1" colspan="1">Tanggal Lahir</th>
												<th rowspan="1" colspan="1">Umur</th>
												<th rowspan="1" colspan="1">NIK</th>
												<th rowspan="1" colspan="1">Jenis Kelamin</th>
												<th rowspan="1" colspan="1">Jenis Disabilitas</th>
												<th rowspan="1" colspan="1">Gambar Disabilitas</th>
												<th rowspan="1" colspan="1">Sejak Kapan</th>
												<th rowspan="1" colspan="1">Penyebab Disabilitas</th>
												<th rowspan="1" colspan="1">Agama</th>
												<th rowspan="1" colspan="1">Pendidikan Terakhir</th>
												<th rowspan="1" colspan="1">Status Kawin</th>
												<th rowspan="1" colspan="1">Alamat</th>
												<th rowspan="1" colspan="1">Alamat Domisili</th>
												<th rowspan="1" colspan="1">Program Bantuan Pemerintah</th>
												<th rowspan="1" colspan="1">Pekerjaan Disabilitas</th>
												<th rowspan="1" colspan="1">Pekerjaan Ayah</th>
												<th rowspan="1" colspan="1">Pekerjaan Ibu</th>
												<th rowspan="1" colspan="1">Penghasilan Disabilitas</th>
												<th rowspan="1" colspan="1">Penghasilan Orang Tua</th>
												<th rowspan="1" colspan="1">Nama Wali</th>
												<th rowspan="1" colspan="1">Pekerjaan Wali</th>
												<th rowspan="1" colspan="1">Penghasilan Wali</th>
												<th rowspan="1" colspan="1">Bantuan yg Dibutuhkan</th>
												<th rowspan="1" colspan="1">PPKS Tinggal Bersama</th>
												<th rowspan="1" colspan="1">No Hp</th>
												<th rowspan="1" colspan="1" style="padding: 0 3rem !important;">Aksi </th>
											</tr>
										</tr>
									</tbody>
										<!--end isi data-->
									</table>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-5">
									<div class="dataTables_info" id="add-row_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries
									</div>
								</div>
								<div class="col-sm-12 col-md-7">
									<div class="dataTables_paginate paging_simple_numbers" id="add-row_paginate">
										<ul class="pagination">
											<li class="paginate_button page-item previous disabled" id="add-row_previous">
												<a href="#" aria-controls="add-row" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
											</li>
											<li class="paginate_button page-item next disabled" id="add-row_next">
												<a href="#" aria-controls="add-row" data-dt-idx="1" tabindex="0" class="page-link">Next</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
								</div>
								</div>
=======
                                        </thead>
											<!--isi dari data-->

											<!--end isi data-->
										</table>
									</div>
								</div>
>>>>>>> master
							</div>
						</div>
					</div>
				</div>
			</div>
<<<<<<< HEAD
=======
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
>>>>>>> master
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