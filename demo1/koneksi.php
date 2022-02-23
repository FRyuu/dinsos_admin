<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "data_disabilitas";

$connect = mysqli_connect($host, $user, $pass, $db);

if ($connect) {
	// echo "Terhubung";
	return $connect;
}else{
	echo "Gagal";
}
?>