<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$cities = $_POST['cities'];
	$gender = $_POST['gender'];
	if ($gender== "male") {
		$genderText = "Laki-laki";
	}else{
		$genderText = "Perempuan";
	}

	if (isset($_POST['swabStatus'])) {
		$swabCondition = "Hasil Swab Negatif";
	}else{
		$swabCondition = "Belum di-Swab";
	}
	if (isset($_POST['vaccineStatus'])) {
		$vaccineCondition = "Sudah divaksin COVID-19";
	}else{
		$vaccineCondition = "Belum divaksin COVID-19";
	}
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
					<h4>Nama = <?=$name?></h4>
					<h4>Jenis Kelamin = <?=$genderText?></h4>
					<h4>E-Mail = <?=$email?></h4>
					<h4>Umur = <?=$age?></h4>
					<h4>Alamat = <?=$address?></h4>
					<h4>Kota = <?=$cities?></h4>
					<h4>Hasil Swab = <?=$swabCondition?></h4>
					<h4>Vaksinasi = <?=$vaccineCondition?></h4>
				</div>
			</div>
		</div>
	</div>

</body>
</html>