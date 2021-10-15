<?php

require_once("session_check.php");

if ($sessionStatus == false) {
	header("Location: index.php");
}

require_once("connection.php");

if (isset($_POST['nis'])) {
	$nis = $_POST['nis'];
}else{
	echo "NIS Tidak ditemukan! <a href='index.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM siswa WHERE nis = '{$nis}'";
$result = mysqli_query($mysqli, $query);

if (isset($_POST['name'])) $name = $_POST['name'];

if (isset($_POST['gender'])) $gender = $_POST['gender'];

if (isset($_POST['address'])) $address = $_POST['address'];

if (isset($_POST['tmp_lahir'])) $tmp_lahir = $_POST['tmp_lahir'];

if (isset($_POST['tgl_lahir'])) $tgl_lahir = $_POST['tgl_lahir'];

if (isset($_POST['nohp'])) $nohp = $_POST['nohp'];

foreach ($result as $siswa) {
	$foto = $siswa["foto"];
}

// FOto
$files = $_FILES['foto'];
$path = "penyimpanan/";

if (!empty($files["name"])) {
	$filepath = $path . $files["name"];
	$upload = move_uploaded_file($files["tmp_name"], $filepath);
	if ($upload) {
		unlink($foto);
	}
} else {
	$filepath = $foto;
	$upload = false;
}

// Menangani Error saat Upload
if ($upload != true && $filepath != $foto) {
	exit("Gagal Mengupload File. <a href='index.php'>Kembali</a>");
}


$query = "UPDATE siswa SET 
		nama = '{$name}',
		jk = '{$gender}',
		alamat = '{$address}',
		tmp_lahir = '{$tmp_lahir}',
		tgl_lahir = '{$tgl_lahir}',
		telepon = '{$nohp}',
		foto = '{$filepath}'
	WHERE nis = '{$nis}' ";

$insert = mysqli_query($mysqli, $query);

if ($insert == false) {
	echo "Error dalam mengubah data. <a href='index.php'>Kembali</a>";
}else{
	header("Location: index.php");
}


?>