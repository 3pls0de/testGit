<?php

require_once("action/connection.php");

$query = "SELECT * FROM barang";
$result = mysqli_query($mysqli, $query);

require_once("action/session_check.php");

?>


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
						<a href="index.php" class="nav-link" aria-current="page">Daftar Barang</a>
					</li>
					<?php

					if ($sessionStatus == false) {

					?>

					<li class="nav-item">
						<a href="login.php" class="nav-link" aria-current="page">Login Petugas</a>
					</li>

					<?php } else { ?>

					<li class="nav-item">
						<a href="action/logout.php" class="nav-link" aria-current="page">LogOut <?=$sessionName?></a>
					</li>

					<?php } ?>

				</ul>
			</div>
		</div>
	</nav>