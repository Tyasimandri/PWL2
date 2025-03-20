<html>
	<head>
		<title>Native MVC Example</title>
		<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Data Mahasiswa</h3>
					<table class="table table-responsive table-bordered table-striped">
						<tr>
							<td>No</td>
							<td>NIM</td>
							<td>Nama</td>
							<th>Created At</th> <!-- Tambahkan kolom baru -->
							<th>Aksi</th> <!-- Tambahkan kolom untuk delete -->
						</tr>
						<?php 

							foreach ($rs as $mahasiswa => $list)
							{
								echo '<tr>';
								echo '<td><a href="?act=tampil-data&i='.$list['id'].'">'.$list['id'].'</a></td>';
								echo '<td>'.$list['nim'].'</td>';
								echo '<td>'.$list['nama'].'</td>';
								echo '<td>'.$list['created_at'].'</td>'; // Perbaikan sintaks
								echo '<td><a href="?act=hapus-tampilan&id='.$list['id'].'" class="btn btn-danger">Hapus Data</a></td>';
								echo '</tr>';
							}

						?>
					</table>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>
