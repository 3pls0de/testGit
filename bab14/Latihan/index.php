<?php

require_once("connection.php");

$query = "SELECT * FROM siswa";
$result = mysqli_query($mysqli, $query);

require_once("session_check.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bootstrap</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="styles.css">

	<script type="text/javascript">
		function confirm_delete() {
			return confirm("Anda Yakin?");
		}
	</script>
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
						<a href="#" class="nav-link" aria-current="page">Daftar Siswa</a>
					</li>

					<?php

					if ($sessionStatus == false) {

					?>

					<li class="nav-item">
						<a href="login.php" class="nav-link" aria-current="page">Login Petugas</a>
					</li>

				<?php } else { ?>

					<li class="nav-item">
						<a href="logout.php" class="nav-link" aria-current="page">LogOut <?=$sessionName?></a>
					</li>

				<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
	<div id="student-list">
		<div class="container">

			<?php if ($sessionStatus) { ?>

			<div class="rom mb-4">
				<div class="col">
					<h2>DAFTAR SISWA</h2>
				</div>
				<div class="col text-end">
					<a href="form_siswa.php" class="btn btn-primary" role="button">Tambah Siswa</a>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama</th>
								<th scope="col">Jenis Kelamin</th>
								<th scope="col">Alamat</th>
								<th scope="col">Usia</th>
								<th scope="col">Telepon</th>
								<th scope="col">Jurusan</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach ($result as $siswa) {
								$tglLahir = explode("-", $siswa["tgl_lahir"]);
								$tahunSekarang = date("Y");

								$selisihTahun = $tahunSekarang - $tglLahir[0];
								echo '<tr>
									<th scope="row">' . $i++ . '</th>
									<td>' . $siswa["nama"] . '</td>
									<td>' . $siswa["jk"] . '</td>
									<td>' . $siswa["alamat"] . '</td>
									<td>' . $selisihTahun . '</td>
									<td>' . $siswa["telepon"] . '</td>
									<td>';
									if ($siswa["id_jurusan"] == 1) echo "Informatika";
									else echo "Desain";
								echo '</td>
									<td>
										<a href="form_edit.php?nis='. $siswa["nis"] .'">Edit</a>
										|
										<a href="delete.php?nis=' . $siswa["nis"] . '" onclick="return confirm_delete()">Delete</a>
									</td>
								</tr>';
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		<?php } echo "<h2>Login Terlebih Dahulu!</h2>"; ?>
		</div>
	</div>
</body>
</html>