<?php

require_once("session_check.php");

if ($sessionStatus == false) {
	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Input Form</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<!-- Navbar-brand -->
			<a href="#" class="navbar-brand">
				<img src="http://jongkreatif.id/_nuxt/img/logo.825423d.png"/>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navbar Collapse -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a href="index.php" class="nav-link" aria-current="page">Daftar Siswa</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="form" class="pt-5">

		<div class="container">

			<div class="row d-flex justify-content-center">

				<div class="col col-8 p-4 bg-light">

					<form method="POST" action="action.php">
						<div class="form-group mb-2">
							<label for="nis">NIS</label>
							<input type="number" id="nis" name="nis" class="form-control" placeholder="Ex: 2001" required>
						</div>

						<div class="form-group mb-2">
							<label for="name">Nama Lengkap</label>
							<input type="text" id="name" class="form-control" name="name" placeholder="Nama Lengkap..." required>
						</div>

						<div class="form-group mb-2">
							<label>Jenis Kelamin</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="male" value="L" name="gender" required>
								<label class="form-check-label" for="male">Laki-laki</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender"  id="female" value="P" name="gender" required>
								<label class="form-check-label" for="female">Perempuan</label>
							</div>
						</div>

						<div class="form-group mb-2">
							<label for="address">Alamat</label>
							<textarea class="form-control" id="address"  name="address" rows="3"  required></textarea>
						</div>

						<div class="form-group mb-2">
							<label for="tmp_lahir">Tempat Lahir</label>
							<input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" placeholder="Tempat Lahir..." required>
						</div>

						<div class="form-group mb-2">
							<label for="tgl_lahir">Tanggal Lahir</label>
							<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
						</div>

						<div class="form-group mb-2">
							<label for="nohp">Nomor Telepon</label>
							<input type="number" id="nohp" name="nohp" class="form-control" placeholder="Nomor Telepon/Handphone Anda..." required>
						</div>

						<div class="form-group mb-2">
							<label for="jurusan">Pilih Jurusan</label>
							<select class="form-control" id="jurusan"  name="jurusan" required>
								<option value="">- Pilih Jurusan -</option>
								<option value="1">Informatika</option>
								<option value="2">Desain</option>
							</select>
						</div>

						<input type="submit" value="kirim" name="submit" class="btn btn-primary">

					</form>

				</div>

			</div>

		</div>

	</div>
</body>
</html>