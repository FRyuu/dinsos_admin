<?php
  session_start();
  include ("../koneksi.php");

  $nik   = $_GET['nik'];
  $sql     = "SELECT * FROM data_disabilitas WHERE nik = '".$nik."' ";
  $query   = mysqli_query($connect, $sql);
  $result   = mysqli_fetch_array($query);

  $result = "DELETE FROM data_disabilitas WHERE nik = '".$nik."' ";
  $result = mysqli_query($connect, $result);
  if ($result) {
    echo "<script>alert('Data Berhasil dihapus') </script>";
    echo "<script>window.location.href = \"datatables.php\" </script>";
  } else {
    echo "Maaf Tidak Dapat Menghapus Data !";
  }
 ?>