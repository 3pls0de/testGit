<?php

require_once("session_check.php");

if ($sessionStatus == false) {
	header("Location: ../index.php");
}

require_once("connection.php");

if (isset($_POST['id_barang'])) {
	$id_barang = $_POST['id_barang'];
}else{
	echo "ID Barang Tidak ditemukan! <a href='../index.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM barang WHERE id_barang = '{$id_barang}'";
$result = mysqli_query($mysqli, $query);

if (isset($_POST['id_barang'])) $id_barang = $_POST['id_barang'];

if (isset($_POST['name'])) $name = $_POST['name'];

if (isset($_POST['harga'])) $harga = $_POST['harga'];

foreach ($result as $siswa) {
	$foto = $siswa["foto"];
}

// FOto
$files = $_FILES['foto'];
$path = "../penyimpanan/";

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
	exit("Gagal Mengupload File. <a href='../index.php'>Kembali</a>");
}

$query = "UPDATE barang SET 
		nama_barang = '{$name}',
		harga = '{$harga}',
		foto = '{$filepath}'
	WHERE id_barang = '{$id_barang}' ";

$insert = mysqli_query($mysqli, $query);

if ($insert == false) {
	echo "Error dalam mengubah data. <a href='../index.php'>Kembali</a>";
}else{
	header("Location: ../index.php");
}


?>