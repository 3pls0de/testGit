<div id="student-list">
	<div class="container">

		<?php if ($sessionStatus) { ?>

		<div class="rom mb-4">
			<div class="col">
				<h2>DAFTAR BARANG</h2>
			</div>
			<div class="col text-end">
				<a href="form_barang.php" class="btn btn-primary" role="button">Tambah Barang</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Foto</th>
							<th scope="col">ID Barang</th>
							<th scope="col">Nama Barang</th>
							<th scope="col">Kode Barang</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($result as $barang) {

							if ($barang['foto'] == null || empty($barang["foto"])) {
								$barang["foto"] = 'penyimpanan/default.jpeg';
							}

							echo '<tr>
								<th scope="row">' . $i++ . '</th>
								<td><img src="' . $barang["foto"] . '"/></td>
								<td>' . $barang["id_barang"] . '</td>
								<td>' . $barang["nama_barang"] . '</td>
								<td>' . $barang["harga"] . '</td>
								<td>
									<a href="form_edit.php?id_barang='. $barang["id_barang"] .'">Edit</a>
									|
									<a href="action/action_delete.php?id_barang=' . $barang["id_barang"] . '" onclick="return confirm_delete()">Delete</a>
								</td>
							</tr>';
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	<?php } else echo "<h2>Login Terlebih Dahulu!</h2>"; ?>
	</div>
</div>