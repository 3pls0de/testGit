<?php

require_once("connection.php");

$error = 0;

if (isset($_POST['nis'])) {
	$nis = $_POST['nis'];
}else{
	$error = 1;
}
if (isset($_POST['name'])) {
	$name = $_POST['name'];
}else{
	$error = 1;
}
if (isset($_POST['gender'])) {
	$gender = $_POST['gender'];
}else{
	$error = 1;
}
if (isset($_POST['address'])) {
	$address = $_POST['address'];
}else{
	$error = 1;
}
if (isset($_POST['tmp_lahir'])) {
	$tmp_lahir = $_POST['tmp_lahir'];
}else{
	$error = 1;
}
if (isset($_POST['tgl_lahir'])) {
	$tgl_lahir = $_POST['tgl_lahir'];
}else{
	$error = 1;
}
if (isset($_POST['nohp'])) {
	$nohp = $_POST['nohp'];
}else{
	$error = 1;
}
if (isset($_POST['jurusan'])) {
	$jurusan = $_POST['jurusan'];
}else{
	$error = 1;
}

if ($error == 1) {
	echo "Terjadi kesalahan dalam proses input data";
	exit();
}

$query = "INSERT INTO siswa (nis, nama, jk, alamat, tmp_lahir, tgl_lahir, telepon, id_jurusan)
		VALUES('{$nis}', '{$name}', '{$gender}', '{$address}', '{$tmp_lahir}', '{$tgl_lahir}', '{$nohp}', '{$jurusan}')";
$insert = mysqli_query($mysqli, $query);

if ($insert == false) {
	echo "Error dalam menambahkan data. <a href='index.php'>Kembali</a>";
}else {
	header("Location: index.php");
}


?>