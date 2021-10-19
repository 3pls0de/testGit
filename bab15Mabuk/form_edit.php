<?php

require_once("action/session_check.php");

if ($sessionStatus == false) {
	header("Location: index.php");
}

require_once("action/connection.php");

$error = 0;

if (isset($_GET['id_barang'])) {
	$id_barang = $_GET['id_barang'];
}else{
	echo "Barang Tidak ditemukan! <a href='index.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM barang WHERE id_barang = '{$id_barang}'";
$result = mysqli_query($mysqli, $query);

foreach ($result as $barang) {
	$foto = $barang["foto"];
	$id_barang = $barang["id_barang"];
	$name = $barang["nama_barang"];
	$harga = $barang["harga"];
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit barang</title>

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

					<form method="POST" action="action/action_edit.php" enctype="multipart/form-data">

						<?php if (!is_null($foto) && !empty($foto)) {  ?>
						<div class="form-group mb-2">
							<img src="<?=$foto?>" class="preview">
							<a href="action/hapus_foto.php?id_barang=<?=$id_barang?>">Hapus Foto</a>
						</div>
					<?php } ?>

						<div class="form-group mb-2">
							<label for="foto">Foto</label>
							<input type="file" id="foto" name="foto" class="form-control">
						</div>

						<div class="form-group mb-2">
							<label for="id_barang">ID Barang</label>
							<input type="text" id="id_barang" name="id_barang" value="<?=$id_barang?>" class="form-control" readonly>
						</div>

						<div class="form-group mb-2">
							<label for="name">Nama Barang</label>
							<input type="text" id="name" class="form-control" name="name" value="<?=$name?>" placeholder="Nama Barang..." required>
						</div>
						<div class="form-group mb-2">
							<label for="harga">Harga Barang</label>
							<input type="number" id="harga" name="harga" value="<?=$harga?>" class="form-control" placeholder="Harga Barang Sebelumya: <?=$harga?>" required>
						</div>
						<input type="submit" value="kirim" name="submit" class="btn btn-primary">

					</form>

				</div>

			</div>

		</div>

	</div>
</body>
</html>