<?php

require_once("session_check.php");

if ($sessionStatus == false) {
	header("Location: index.php");
}

require_once("connection.php");

if (isset($_GET['nis'])) {
	$nis = $_GET['nis'];
}else{
	echo "NIS Tidak ditemukan! <a href='index.php'>Kembali</a>";
	exit();
}

$query = "DELETE FROM siswa WHERE nis = '{$nis}'";
$result = mysqli_query($mysqli, $query);

if (!result) {
	exit("Gagal menghapus data!");
}
header("Location: index.php");

?>