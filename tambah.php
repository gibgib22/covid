<?php
	include 'koneksi.php';
	include 'asset/header.php';

	$query = mysqli_query($koneksi, "SELECT * FROM per1");
	$query1 = mysqli_query($koneksi, "SELECT * FROM data_imigran");
	$query2 = mysqli_query($koneksi, "SELECT * FROM per2");
	$query3 = mysqli_query($koneksi, "SELECT * FROM per3");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cek Kesehatan Diri</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-7">
				<h2> Cek Kesehatan Diri Anda</h2>
				<hr class="bg-ligth">
				<form action="proses-tambah.php" method="post">
					<div class="form-group">
                        <label for="imigran">Nama Lengkap</label>
                        <select class="form-control" style="width: 500px" name="id_imigran">
                            <option value="">-- Pilih Nama Anda --</option>
                            <?php  
                                while ($nama = mysqli_fetch_assoc($query1)):
                            ?>
                            <option value="<?php echo $nama['id_imigran']; ?>"><?php echo $nama['nama']; ?></option>
                            <?php  
                                endwhile;
                            ?>
                        </select>
                    </div>
					<div class="form-group">
                        <label for="imigran">
                        	<strong>1. Apakah anda mengalami salah satu dari berikut<br/></strong>
                        	-Kesulitan bernafas yang parah<br/> 
                        	-Nyeri pada dada yang parah<br/>
                        	-Sulit untuk bangun<br/>
                        	-Merasa kebingungan<br/>
                        	-Penurunan Kesadaran<br/>
                    	</label>
                        <select class="form-control" style="width: 500px" name="pertanyaan1">
                            <option value="">-- Pilih Jawaban Anda --</option>
                            <?php  
                                while ($per = mysqli_fetch_assoc($query)):
                            ?>
                            <option value="<?php echo $per['id_pertanyaan']; ?>"><?php echo $per['j_per1']; ?></option>
                            <?php  
                                endwhile;
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="imigran">
                        	<strong>2. Apakah anda mengalami salah satu dari berikut<br/></strong>
                        	-Nafas yang pendek saat istirahat<br/>
                        	-Ketidakmampuan untuk berbaring karena kesulitan bernafas<br/>
                        	-kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernafas<br/>
                        </label>
                        <select class="form-control" style="width: 500px" name="pertanyaan2">
                            <option value="">-- Pilih Jawaban Anda --</option>
                            <?php  
                                        while ($per2 = mysqli_fetch_assoc($query2)):
                                    ?>
                                    <option value="<?php echo $per2['id_per2']; ?>"><?php echo $per2['j_per2']; ?></option>
                                    <?php  
                                        endwhile;
                                    ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="imigran">
                        	<strong>2. Apakah anda mengalami salah satu dari berikut<br/></strong>
                        	-Demam <br/>
                        	-Batuk <br/>
                        	-Bersin <br/>
                        	-Sakit Tenggorokan <br/>
                        	-Sulit Untuk Bernafas <br/>
                        </label>
                        <select class="form-control" style="width: 500px" name="pertanyaan3">
                            <option value="">-- Pilih Jawaban Anda --</option>
                            <?php  
                                        while ($per3 = mysqli_fetch_assoc($query3)):
                                    ?>
                                    <option value="<?php echo $per3['id_per3']; ?>"><?php echo $per3['j_per3']; ?></option>
                                    <?php  
                                        endwhile;
                                    ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark" name="simpan">Cek Sekarang</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>