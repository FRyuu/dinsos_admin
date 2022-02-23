<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dinsos";

$connect = mysqli_connect($host, $user, $pass, $db);

if ($connect) {
	// echo "Terhubung";
	return $connect;
}else{
	echo "Gagal";
}
?>