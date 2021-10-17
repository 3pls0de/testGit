<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrasi Petugas</title>

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

					<form method="POST" action="action/action_register.php">
						<div class="form-group mb-2">
							<label for="email">E-Mail</label>
							<input type="email" id="email" name="email" class="form-control" placeholder="Masukkan E-Mail..." required>
						</div>

						<div class="form-group mb-2">
							<label for="name">Nama Lengkap</label>
							<input type="text" id="name" class="form-control" name="name" placeholder="Nama Lengkap..." required>
						</div>

						<div class="form-group mb-2">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="password" placeholder="Password..." required>
						</div>

						<div class="form-group mb-2">
							<label for="re-password">Konfirmasi Password</label>
							<input type="password" id="re-password" class="form-control" name="re-password" placeholder="Password..." required>
						</div>

						<input type="submit" value="kirim" name="submit" class="btn btn-primary">

					</form>

				</div>

			</div>

		</div>

	</div>
</body>
</html>