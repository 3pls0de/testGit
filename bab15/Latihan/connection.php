<?php

$mysqli = new mysqli("localhost", "root", "", "coba_sekolah");

// Check Connection
if ($mysqli->connect_errno) {
	echo "Gagal menyambungkan ke MYSQL" . $mysqli->connect_errno;
	exit();
}

?>