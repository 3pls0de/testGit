<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Petugas</title>

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

					<form method="POST" action="action/action_login.php">
						<div class="form-group mb-2">
							<label for="email">E-Mail</label>
							<input type="email" id="email" name="email" class="form-control" placeholder="Masukkan E-Mail..." required>
						</div>

						<div class="form-group mb-2">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="password" placeholder="Password..." required>
						</div>

						<input type="submit" value="Masuk" name="submit" class="btn btn-primary">

					</form>

				</div>

			</div>

		</div>

	</div>
</body>
</html>