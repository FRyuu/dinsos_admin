<?php
session_start();
    include ("../koneksi.php");
    if (isset($_POST['submit'])) {
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
                    '$ppks_tinggal_bersama',
					'$no_hp')
                    "
        );
		if ($result) {
			 
			echo "<script>
			window.alert('Data Berhasil Ditambahkan');
			window.location = '../tables/datatables.php';
			</script>";
			}   
			else {
			echo '<script>
			window.alert("gagal");
			</script>';
			} 
}   
?>
<?php

if( !isset($_SESSION['nama']) ){
	
	//$_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  //header('Location: login.php');
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
						<form class="navbar-left navbar-form nav-search mr-md-3"></form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
						
						
						
					<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../../assets/img/img.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="scroll-wrapper dropdown-user-scroll scrollbar-outer" style="position: relative;"><div class="scroll-wrapper dropdown-user-scroll scrollbar-outer scroll-content" style="position: relative;"><div class="scroll-wrapper dropdown-user-scroll scrollbar-outer scroll-content" style="position: relative;"><div class="dropdown-user-scroll scrollbar-outer scroll-content" style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
									<li>
										<div class="user-box">
											<div class="avatar-lg">
												<img src="../../assets/img/img.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
											<h4><?php echo $_SESSION['nama']; ?></h4>
												<p>Hallo <?php echo $_SESSION['nama']; ?> !! Welcome</p></a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="../logout.php">Logout</a>
									</li>
								</div>
								<div class="scroll-element scroll-x">
									<div class="scroll-element_outer">
										<div class="scroll-element_size"></div>
										<div class="scroll-element_track"></div>
										<div class="scroll-bar ui-draggable ui-draggable-handle"></div>
									</div>
								</div>
								<div class="scroll-element scroll-y">
										<div class="scroll-element_outer">
										<div class="scroll-element_size"></div>
										<div class="scroll-element_track"></div>
										<div class="scroll-bar ui-draggable ui-draggable-handle"></div>
									</div>
								</div>
							</div>
							<div class="scroll-element scroll-x">
										<div class="scroll-element_outer"><div class="scroll-element_size">
										</div>
										<div class="scroll-element_track"></div>
										<div class="scroll-bar ui-draggable ui-draggable-handle"></div>
									</div>
								</div>
								<div class="scroll-element scroll-y">
										<div class="scroll-element_outer"><div class="scroll-element_size"></div>
										<div class="scroll-element_track"></div>
										<div class="scroll-bar ui-draggable ui-draggable-handle"></div>
									</div>
								</div>
							</div>
							<div class="scroll-element scroll-x">
										<div class="scroll-element_outer"><div class="scroll-element_size"></div>
										<div class="scroll-element_track"></div>
										<div class="scroll-bar ui-draggable ui-draggable-handle"></div>
									</div>
								</div><div class="scroll-element scroll-y">
										<div class="scroll-element_outer">
											<div class="scroll-element_size">
											</div><div class="scroll-element_track"></div>
											<div class="scroll-bar ui-draggable ui-draggable-handle"></div>
										</div>
									</div>
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
					<div class="user" style="margin-bottom: 10px; padding-bottom: 20px;">
						<div class="avatar-sm float-left mr-2">
							<img src="../../assets/img/img.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
							<span>
								<?php echo $_SESSION['nama']; ?>
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
						<li class="nav-item active submenu">
							<a href="../forms/forms.php">
								<i class="fas fa-pen-square"></i>
								<p>Forms</p>
							</a>
						</li>
						<li class="nav-item">
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
						<h4 class="page-title">Forms</h4>
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
								<a href="#">Forms</a>
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
									<div class="card-title">Data Disabilitas</div>
								</div>
								<div class="card-body">
									<form action="" method="post">
										<div class="row">
											<div class="col-xl-4">
												<div class="form-group">
													<label for="nama">Nama</label>
													<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" name="nama">
												</div>
												<div class="form-group" style="width: 200px;">
													<label for="umur">Umur</label>
													<div class="input-group mb-3">
														<input type="number" class="form-control" placeholder="1" aria-label="1" aria-describedby="umur" name="umur">
														<div class="input-group-append">
															<span class="input-group-text" id="umur">Tahun</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="jenis_disabilitas">Jenis Disabilitas</label>
													<select class="form-control" id="jenis_disabilitas" name="jenis_disabilitas">
														<option>-</option>
														<option>PDFSK (Penyandang Disabilitas Fisik) </option>
														<option>PDINT (Penyandang Disabilitas Intelektual)< /option>
														<option>PDMTL (Penyandang Disabilitas Mental) </option>
														<option>PDSNS (Penyandang Disabilitas Sensorik) </option>
													</select>
												</div>
												<div class="form-group">
													<label for="penyebab_disabilitas">Penyebab Disabilitas</label>
													<input type="text" class="form-control" id="penyebab_disabilitas" name="penyebab_disabilitas">
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
												<div class="form-group">
													<label for="program_pemerintah">Program Bantuan Pemerintah</label>
													<input type="text" class="form-control" id="program_pemerintah" name="program_pemerintah">
												</div>
												<div class="form-group">
													<label for="pekerjaan_ibu">Pekerjaan Ibu</label>
													<input type="text" class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Sesuai KK" name="pekerjaan_ibu">
												</div>
												<div class="form-group">
													<label for="nama_wali">Nama Wali</label>
													<input type="text" class="form-control" id="nama_wali" placeholder="Jika Ada"  name="nama_wali">
												</div>
												<div class="form-group">
													<label for="bantuan_ygdibutuhkan">Bantuan yg Dibutuhkan</label>
													<input type="text" class="form-control" id="bantuan_ygdibutuhkan" name="bantuan_ygdibutuhkan">
												</div>								
											</div>
											<div class="col-xl-4">
												<div class="form-group">
													<label for="tempat_lahir">Tempat Lahir</label>
													<input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir Sesuai KK" name="tempat_lahir">
												</div>
												<div class="form-group">
													<label for="nik">NIK</label>
													<input type="number" class="form-control" id="nik" placeholder="No NIK Sesuai KK" name="nik"> 
												</div>
												<div class="form-group" style="padding-top: 17px;padding-bottom: 12px;">
													<label for="gambaran_disabilitas">Gambaran Disabilitas</label>
														<input type="text" class="form-control" placeholder="contoh: cacat kaki" id="gambaran_disabilitas" name="gambaran_disabilitas"> 
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
													<label for="alamat">Alamat</label>
													<input type="text" class="form-control" id="alamat" placeholder="Alamat Sesuai KK" name="alamat">
												</div>
												<div class="form-group">
													<label for="pekerjaan_disabilitas">Pekerjaan Disabilitas</label>
													<input type="text" class="form-control" id="pekerjaan_disabilitas" placeholder="Pekerjaan Sesuai KK" name="pekerjaan_disabilitas">
												</div>
												<div class="form-group">
													<label for="penghasilan_disabilitas">Penghasilan Disabilitas</label>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">Rp.</span>
														</div>
														<input type="number" class="form-control" aria-label="banyak (dalam bentuk rupiah)" id="penghasilan_disabilitas" name="penghasilan_disabilitas">
														<div class="input-group-append">
															<span class="input-group-text">.00</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="pekerjaan_wali">Pekerjaan Wali</label>
													<input type="text" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali Jika ada" name="pekerjaan_wali">
												</div>
												<div class="form-group">
													<label for="ppks_tinggal_bersama">PPKS Tinggal Bersama</label>
													<input type="text" class="form-control" id="ppks_tinggal_bersama" name="ppks_tinggal_bersama">
												</div>
											</div>
											<div class="col-xl-4">
												<div class="form-group">
													<label for="tanggal_lahir">Tanggal Lahir</label>
													<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
												</div>
												<div class="form-group">
													<label class="form-label">Jenis Kelamin</label>
													<div class="selectgroup w-100">
														<label class="selectgroup-item">
															<input type="radio" name="jenis_kelamin" value="Laki-Laki" class="selectgroup-input" checked="">
															<span class="selectgroup-button">Laki-Laki</span>
														</label>
														<label class="selectgroup-item">
															<input type="radio" name="jenis_kelamin" value="Perempuan" class="selectgroup-input">
															<span class="selectgroup-button">Perempuan</span>
														</label>
													</div>
												</div>
												<div class="form-group">
													<label for="sejak_kapan">Sejak Kapan</label>
													<input type="date" class="form-control" id="sejak_kapan" name="sejak_kapan">
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
													<label for="alamat_domisili">Alamat Domisili</label>
													<input type="text" class="form-control" id="alamat_domisili" name="alamat_domisili">
												</div>
												<div class="form-group">
													<label for="pekerjaan_ayah">Pekerjaan Ayah</label>
													<input type="text" class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Sesuai KK" name="pekerjaan_ayah">
												</div>
												<div class="form-group">
													<label for="penghasilan_orangtua">Penghasilan Orang Tua</label>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">Rp.</span>
														</div>
														<input type="number" class="form-control" aria-label="banyak (dalam bentuk rupiah" id="penghasilan_orangtua" name="penghasilan_orangtua">
														<div class="input-group-append">
															<span class="input-group-text">.00</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="penghasilan_wali">Penghasilan Wali</label>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">Rp.</span>
														</div>
														<input type="number" class="form-control" aria-label="banyak (dalam bentuk rupiah)" id="penghasilan_wali" name="penghasilan_wali">
														<div class="input-group-append">
															<span class="input-group-text">.00</span>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="no_hp">No Hp</label>
													<input type="text" class="form-control" id="no_hp" value="+62" name="no_hp">
												</div>
												<div class="pt-4">
													<button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
													<button class="btn btn-danger">Cancel</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
	<!-- Atlantis JS -->
	<script src="../../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/setting-demo2.js"></script>
</body>
</html>