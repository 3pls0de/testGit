<?php

$artikel = array(
	(object) array (
		"judul" => "Attack on Titan-Jujutsu Kaisen Kuasai Dunia Maya Paruh 2021",
		"text" => "Attack on Titan-Jujutsu Kaisen emang mantep sih jadi gak heran",
		"image" => "https://akcdn.detik.net.id/visual/2020/12/10/attack-on-titan-1_169.png?w=650"
	),
	(object) array (
		"judul" => "Demon Slayer Mugen Train Dinobatkan Film Asia Terlaris 2020",
		"text" => "ceritanya lumayan, walaupun agak mengherankan kadang-kadang (lucunya tuh gak masuk).",
		"image" => "https://akcdn.detik.net.id/visual/2020/11/16/demon-slayer-mugen-train-3_169.png?w=650"
	),
	(object) array (
		"judul" => "Attack on Titan Season 4 Bagian 2 Tayang Januari 2022",
		"text" => "Mangtaf, gsabar",
		"image" => "https://akcdn.detik.net.id/visual/2020/12/10/attack-on-titan-1_169.png?w=650"
	),
	(object) array (
		"judul" => "Sejarah Anime: Sejak 1907 hingga Mewabah ke Indonesia",
		"text" => "heuheuheuheu",
		"image" => "https://akcdn.detik.net.id/visual/2020/06/26/astro-boy-1_169.png?w=650"
	),
	(object) array (
		"judul" => "Puas dan Terima Kasih Fan untuk Akhir Manga Haikyuu!!",
		"text" => "mangtaf, seru animenya, ntah kalo manganya eheh",
		"image" => "https://akcdn.detik.net.id/visual/2020/07/09/haikyuu_169.png?w=650"
	),
	(object) array (
		"judul" => "Rekomendasi Anime Thriller Terbaik, Tegang dan Penuh Misteri",
		"text" => "ada Death Note!!!!",
		"image" => "https://akcdn.detik.net.id/visual/2020/01/29/aae86181-c5a0-4895-96fb-1499d414a929_169.png?w=650"
	)
);
$carousel = array(
	(object) array (
		"judul" => "Jujutsu Kaisen",
		"text" => "Manisnya ALur Cerita Jujutsu Kaisen",
		"image" => "https://i.imgur.com/MjiniDz.png"
	),
	(object) array (
		"judul" => "Jujutsu Kaisen",
		"text" => "Itadori Yuuji dan Junpei Yoshino",
		"image" => "https://animehunch.com/wp-content/uploads/2020/12/Itadori-and-Junpei-Jujutsu-Kaisen-e1608572638887.jpg"
	),
	(object) array (
		"judul" => "Jujutsu Kaisen",
		"text" => "Itadori Yuuji Marah!",
		"image" => "https://animehunch.com/wp-content/uploads/2020/12/itadori-wylin-fr-fr-1024x576.png"
	)
);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bootstrap</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
						<a href="#" class="nav-link" aria-current="page">Home</a>
					</li>
					<li class="nav-item">
						<a href="about.html" class="nav-link">About</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a href="#" class="dropdown-item">Login</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a href="#" class="dropdown-item">Register</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Carousel Indicator -->
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<!-- Carousel Indicator -->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>

		<!-- Carousel Inner -->
		<div class="carousel-inner">
		<?php 
			$i = 0;
			foreach ($carousel as $slide) {
				if ($i == 0) {
					$i++; ?>
			<div class="carousel-item active">
				<?php }
				else { ?>
			<div class="carousel-item">
				<?php } ?>
				<img src="<?=$slide->image ?>" class="d-block w-100" alt="jalan bareng kawan">
				<div class="carousel-caption d-none d-md-block">
					<h5><?=$slide->judul ?></h5>
					<p><?=$slide->text ?></p>
				</div>
			</div> <!-- Penutup carousel-item -->
		<?php } ?>
		</div>
		<!-- Carousel Navigation -->
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>

		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div id="features" class="py-5">
		<div class="container">
			<div class="row">
				<div class="col col-4">
					<div class="card text-center py-3">
						<div class="card-body">
							<div class="icon mb-4">
								<i class="bi bi-alarm"></i>
							</div>
							<h5 class="card-title">Ketelitian dan Kedisiplinan</h5>
							<p class="card-text">Belajar ngoding harus teliti dan disiplin</p>
						</div>
					</div>
				</div>
				<div class="col col-4">
					<div class="card text-center py-3">
						<div class="card-body">
							<div class="icon mb-4">
								<i class="bi bi-book"></i>
							</div>
							<h5 class="card-title">Katanya Mau Pinter</h5>
							<p class="card-text">Ya belajar yang banyak dan berusaha untuk paham</p>
						</div>
					</div>
				</div>
				<div class="col col-4">
					<div class="card text-center py-3">
						<div class="card-body">
							<div class="icon mb-4">
								<i class="bi bi-cash"></i>
							</div>
							<h5 class="card-title">Ayo berusaha</h5>
							<p class="card-text">tebak karakter kartun</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="blog" class="py-5">
		<div class="container">
			<div class="row">
				<?php foreach ($artikel as $data) { ?>

				<div class="col col-6">
					<div class="card mb-3">
						<img src="<?=$data->image ?>" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title"><?=$data->judul ?></h5>
							<p class="card-text"><?=$data->text ?>.</p>
							<p class="card-text"><small class="text-muted">Last Updated 3 mins ago</small></p>
						</div>
					</div>
				</div>

				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>