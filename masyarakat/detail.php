<?php
	include '../asset/header.php';
	include '../koneksi.php';

	$id_imigran = $_GET['id_imigran'];

	$sql = " SELECT * FROM data_imigran WHERE id_imigran = $id_imigran";

	$res = mysqli_query($koneksi, $sql);

	$detail = mysqli_fetch_assoc($res);

	// var_dump($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-7">
				<h2> Detail Data</h2>
				<hr class="bg-ligth">
				<table class="table table-bordered">
					<tr>
						<td><strong>Nama Lengkap</strong></td>
						<td><?=$detail['nama'];?></td>
					</tr>
					<tr>
						<td><strong>TTL</strong></td>
						<td><?=$detail['ttl'];?></td>
					</tr>
					<tr>
						<td><strong>No Telp</strong></td>
						<td><?=$detail['telp'];?></td>
					</tr>
					<tr>
						<td><strong>Foto</strong></td>
						<td><img src="<?=$detail['foto'];?>" style="width: 25%"></td>
					</tr>
					<tr>
						<td><strong>Jenis Kelamin</strong></td>
						<td><?=$detail['id_jenis'];?></td>
					</tr>
					<tr>
						<td><strong>Riwayat Penyakit</strong></td>
						<td><?=$detail['penyakit'];?></td>
					</tr>
					<tr>
						<td><strong>Aktivitas Selama 1 Minggu</strong></td>
						<td><?=$detail['aktivitas'];?></td>
					</tr>
					<tr>
						<td><strong>Username</strong></td>
						<td><?=$detail['username'];?></td>
					</tr>
					<tr>
						<td><strong>Password</strong></td>
						<td><?=$detail['pass'];?></td>
					</tr>

					<tr>
						<td><strong>Kategori</strong></td>
						<td><?=$detail['id_kategori'];?></td>
					</tr>
					<tr>
						<td class="text-rigth" colspan="2">
							<a href="index.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>
						</td>
					</tr>
				</table>
			</div>			
		</div>
	</div>
</body>
</html>