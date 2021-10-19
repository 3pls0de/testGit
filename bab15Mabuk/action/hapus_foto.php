<?php

require_once("connection.php");

if (isset($_GET['id_barang'])) $id_barang = $_GET['id_barang'];
else{
	echo "ID Barang Tidak ditemukan! <a href='../index.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM barang WHERE id_barang = '{$id_barang}'";

$result = mysqli_query($mysqli, $query);

foreach ($result as $barang) {
	$foto = $barang["foto"];
}

if (!is_null($foto) && !empty($foto)) {
	$remove = unlink($foto);

	if ($remove) {
		$query = "UPDATE barang SET foto = NULL WHERE id_barang = '{$id_barang}'";
		$insert = mysqli_query($mysqli, $query);
	}
}

header("Location: ../form_edit.php?id_barang={$id_barang}");

?>