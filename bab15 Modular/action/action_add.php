<?php

require_once("session_check.php");

if ($sessionStatus == false) {
	header("Location: ../index.php");
}

require_once("connection.php");

$error = 0;
if (isset($_POST['kode_barang']) && isset($_POST['name']) && isset($_POST['harga'])) {
	$kode_barang = $_POST['kode_barang'];
	$name = $_POST['name'];
	$harga = $_POST['harga'];
}else{
	$error = 1;
}

// FOto
$files = $_FILES['foto'];
$path = "../penyimpanan/";

if (!empty($files["name"])) {
	$filepath = $path . $files["name"];
	$upload = move_uploaded_file($files["tmp_name"], $filepath);
} else {
	$filepath = "";
	$upload = false;
}

// Menangani Error saat Upload
if ($upload != true && $filepath != "") {
	exit("Gagal Mengupload File. <a href='../index.php'>Kembali</a>");
}


if ($error == 1) {
	echo "Terjadi kesalahan dalam proses input data";
	exit();
}

$query = "INSERT INTO barang (id_barang, nama_barang, harga, foto)
		VALUES('{$kode_barang}', '{$name}', '{$harga}', '{$filepath}')";
$insert = mysqli_query($mysqli, $query);

if ($insert == false) {
	echo "Error dalam menambahkan data. <a href='../index.php'>Kembali</a>";
}else {
	header("Location: ../index.php");
}


?>