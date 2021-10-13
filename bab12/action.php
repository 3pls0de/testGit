<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$kodeBarang = $_POST['kodeBarang'];
	$hargaBarang = $_POST['hargaBarang'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Action PHP</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div id="profile">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col col-8">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama Barang</th>
							    <th scope="col">Harga Barang</th>
							    <th scope="col">Kode Barang</th>
							</tr>
							<tr>
							<th scope="row">1</th>
						    	<td><?=$name?></td>
						    	<td><?=$hargaBarang?></td>
						    	<td><?=$kodeBarang?></td>
						    </tr>
						    <th scope="row">1</th>
						    	<td><?=$name?></td>
						    	<td><?=$hargaBarang?></td>
						    	<td><?=$kodeBarang?></td>
						    </tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>