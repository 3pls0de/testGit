<?php

require_once("action/session_check.php");

if ($sessionStatus == false) {
	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Input Form</title>

	<?php require_once("assets/bootstrap/bootstrap.php"); ?>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<?php require_once("assets/js/javascript.php"); ?>

</head>
<body>
	
	<?php require_once("header/header.php"); ?>

	<div id="form" class="pt-5">

		<div class="container">

			<div class="row d-flex justify-content-center">

				<div class="col col-8 p-4 bg-light">

					<form method="POST" action="action/action_add.php" enctype="multipart/form-data">
						
						<div class="form-group mb-2">
							<label for="foto">Foto</label>
							<input type="file" id="foto" name="foto" class="form-control">
						</div>

						<div class="form-group mb-2">
							<label for="kode_barang">Kode Barang</label>
							<input type="text" id="kode_barang" name="kode_barang" class="form-control" placeholder="Ex: B121" required>
						</div>

						<div class="form-group mb-2">
							<label for="name">Nama Barang</label>
							<input type="text" id="name" class="form-control" name="name" placeholder="Nama Barang..." required>
						</div>

						<div class="form-group mb-2">
							<label for="harga">Harga Barang</label>
							<input type="number" id="harga" name="harga" class="form-control" placeholder="Contoh Harga: 5000" required>
						</div>

						<input type="submit" value="kirim" name="submit" class="btn btn-primary">

					</form>

				</div>

			</div>

		</div>

	</div>
</body>
</html>