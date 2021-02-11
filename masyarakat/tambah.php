<?php
    include '../koneksi.php';
	include '../asset/header.php';

    $query = mysqli_query($koneksi, "SELECT * FROM kategori");
    $query1 = mysqli_query($koneksi, "SELECT * FROM jenis_kelamin");

?>
	<div class="container">
		<div class="roe-mt4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header"><h2>Tambah Data</h2></div>
					<div class="card-body">
						<form method="post" action="proses_tambah.php">
                        <div class="form-group">
                            <label for="imigran">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="imigran" placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="imigran">TTL</label>
                            <input type="date" class="form-control" name="ttl" id="ttl" placeholder="Masukkan TTL">
                        </div>
                        <div class="form-group">
                            <label for="imigran">No TELP</label>
                            <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukkan nomor telepon">
                            <small class="form-text text-muted">Contoh: 111-222-3333</small>
                        </div>
                        <div class="form-group">
                            <label for="imigran">Jenis Kelamin</label>
                            <select class="form-control" style="width: 500px" name="id_jenis">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <?php  
                                            while ($jenis = mysqli_fetch_assoc($query1)):
                                        ?>
                                        <option value="<?php echo $jenis['id_jenis']; ?>"><?php echo $jenis['jenis_kelamin']; ?></option>
                                        <?php  
                                            endwhile;
                                        ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="imigran">Foto Kartu Identitas</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="form-group">
                            <label for="imigran">Riwayat Penyakit</label>
                            <input type="text" class="form-control" name="penyakit" id="penyakit" placeholder="Masukkan Riwayat Penyakit Anda">
                        </div>
                        <div class="form-group">
                            <label for="imigran">Aktivitas Anda Selama 1 Minggu</label>
                            <textarea name="aktivitas" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imigran">Username</label>
                            <input type="text" class="form-control" name="username" id="penyakit" placeholder="Masukkan Username Anda">
                        </div>
                        <div class="form-group">
                            <label for="imigran">Password</label>
                            <input type="text" class="form-control" name="pass" id="penyakit" placeholder="Masukkan Password Anda">
                        </div>
                        <div class="form-group">
                            <label for="imigran">Kategori</label>
                            <select class="form-control" style="width: 200px" name="id_kategori">
                                <option value="">-- Pilih Kategori --</option>
                                <?php  
                                            while ($kategori = mysqli_fetch_assoc($query)):
                                        ?>
                                        <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                                        <?php  
                                            endwhile;
                                        ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="simpan" style="background-color: #00cec9;">Simpan</button>
                    </form>
					</div>
				</div>
			</div>	
		</div>
	</div>
<?php 
	include '../asset/footer.php';
?>