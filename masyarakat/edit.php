<?php
	include '../koneksi.php';
	include '../asset/header.php';

	$id_imigran = $_GET['id_imigran'];
	$sql = mysqli_query($koneksi, "SELECT * FROM data_imigran WHERE id_imigran=$id_imigran");
	$query1 = mysqli_query($koneksi, "SELECT * FROM kategori");
	$query2 = mysqli_query($koneksi, "SELECT * FROM jenis_kelamin");
	// var_dump($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-user-plus"></i>Edit Data</h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses_edit.php">
							<table class="table">
								<?php
									while($data = mysqli_fetch_assoc($sql)):
										// menggunakan titik dua jangan titik koma
								?>
								<tr>
									<input type="hidden" name="id_imigran"
									value="<?php echo $data['id_imigran'];?>">
								</tr>
								<tr>
									<td>Nama Lengkap</td>
									<td><input type="text" name="nama" value="<?php echo $data['nama'];?>" ></td>
								</tr>
								<tr>
									<td>TTL</td>
									<td><input type="date" name="ttl" value="<?php echo $data['ttl'];?>"></td>
								</tr>
								<tr>
									<td>No Telp</td>
									<td><input type="text" name="telp" value="<?php echo $data['telp'];?>" ></td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td>
										<select style="width: 500px" name="id_jenis">
                                			<option value="">-- Pilih Jenis Kelamin --</option>
                                				<?php  
                                            		while ($jenis = mysqli_fetch_assoc($query2)):
                                        		?>
                                        <option value="<?php echo $jenis['id_jenis']; ?>"><?php echo $jenis['jenis_kelamin']; ?></option>
                                        		<?php  
                                            		endwhile;
                                        		?>
                            			</select>
									</td>
								</tr>
								<tr>
									<td>Foto Kartu Identitas</td>
									<td><input type="file" name="foto" value="<?php echo $data['foto'];?>" required>
										<img src="<?php echo $data['foto'];?>" style="width: 25%">
									</td>
								</tr>
								<tr>
									<td>Riwayat Penyakit</td>
									<td><input type="text" name="penyakit" value="<?php echo $data['penyakit'];?>" ></td>
								</tr>
								<tr>
									<td>Aktivitas Selama 1 Minggu</td>
									<td><textarea name="aktivitas" value="<?php echo $data['aktivitas'];?>" ></textarea></td>
								</tr>
								<tr>
									<td>Username</td>
									<td><input type="text" name="username" value="<?php echo $data['username'];?>" ></td>
								</tr>
								<tr>
									<td>Password</td>
									<td><input type="password" name="pass" value="<?php echo $data['pass'];?>" ></td>
								</tr>
								<tr>
									<td>Kategori</td>
									<td>
										<select style="width: 200px" name="id_kategori">
                                			<option value="">-- Pilih Kategori --</option>
                                				<?php  
                                            		while ($kategori = mysqli_fetch_assoc($query1)):
                                        		?>
                                        <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
		                                        <?php  
		                                            endwhile;
		                                        ?>
                            			</select>
									</td>
								</tr>
								<?php
								 endwhile;
								?>
							</table>
							<button type="submit" class="btn btn-primary" name="simpan" style="background-color: #00cec9;">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>