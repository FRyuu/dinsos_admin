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
<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Disabilitas.xls");
	?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Dinsos Web</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets/img/icon1.png" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<!-- <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script> -->
	<!-- CSS Files -->
	<!-- <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css"> -->
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<!-- <link rel="stylesheet" href="../../assets/css/demo.css"> -->
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data Disabilitas</h4>
										
									</div>
								</div>
								<!-- <div class="card-body">
								Modal 
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
																	<input type="text" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali Jika ada" name="pekerjaan_wali">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Penghasilan Wali</label>
																	<input type="number" class="form-control" aria-label="banyak (dalam bentuk rupiah)" id="penghasilan_wali" name="penghasilan_wali">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>Bantuan yg Dibutuhkan</label>
																	<input type="text" class="form-control" id="bantuan_ygdibutuhkan" name="bantuan_ygdibutuhkan">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>PPKS Tinggal Bersama</label>
																	<input type="text" class="form-control" id="ppks_tinggal_bersama" name="ppks_tinggal_bersama">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-defaut">
																	<label>No Hp</label>
																	<input type="number" class="form-control" id="no_hp" placeholder="0812345678910" name="no_hp">
																</div>
															</div>															
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="tambah" class="btn btn-primary" name="tambah">Tambah</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
												</div>
											</div>
										</div>
									</div> -->
									<div class="table-responsive">
										<table id="add-row" class="display table table-striiped table-hover" >
										<thead>
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
                                        </thead>
											<!--isi dari data-->
										<tbody>
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
										</tbody>
											<!--end isi data-->
											<!-- <tfoot>
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
										</tfoot> -->
                                        <!-- <button class="btn btn-primary btn-sm" style="margin-bottom: 20px;" onclick="window.print()" >
										<a href="detail.php" style="color: #FFF;">DETAIL
										</a></button> -->
										</table>					
									</div>
									
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
            var css = '@page { size: landscape; }',
			head = document.head || document.getElementsByTagName('head')[0],
			style = document.createElement('style');

			style.type = 'text/css';
			style.media = 'print';

			if (style.styleSheet){
			style.styleSheet.cssText = css;
			} else {
			style.appendChild(document.createTextNode(css));
			}

			head.appendChild(style);

			// window.print();
		});
	</script>
</body>
</html>