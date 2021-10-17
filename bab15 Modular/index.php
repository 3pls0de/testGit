<?php

require_once("action/connection.php");

$query = "SELECT * FROM barang";
$result = mysqli_query($mysqli, $query);

require_once("action/session_check.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bootstrap</title>

	<?php require_once("assets/bootstrap/bootstrap.php"); ?>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<?php require_once("assets/js/javascript.php"); ?>

</head>
<body>
	
	<?php require_once("header/header.php"); ?>

	<?php require_once("konten/student_list.php"); ?>

	
</body>
</html>