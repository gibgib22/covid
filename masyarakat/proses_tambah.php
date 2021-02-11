<?php
	include '../koneksi.php';

	if(isset($_POST['simpan'])){
		$nama = $_POST['nama'];
		$ttl = $_POST['ttl'];
		$telp = $_POST['telp'];
		$foto = $_POST['foto'];
		$id_jenis = $_POST['id_jenis'];
		$penyakit = $_POST['penyakit'];
		$aktivitas = $_POST['aktivitas'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$id_kategori = $_POST['id_kategori'];

		$sql = "INSERT INTO data_imigran(nama, ttl, telp, foto, id_jenis, penyakit, aktivitas, username, pass, id_kategori) VALUES ('$nama','$ttl','$telp', '$foto','$id_jenis','$penyakit','$aktivitas','$username','$pass','$id_kategori')";
		$res = mysqli_query($koneksi,$sql);
		$count = mysqli_affected_rows($koneksi);

		if($count>0){
			echo "
				<script>
				alert('Data Berhasil Di Tambahkan !!!');
				document.location.href='index.php';
				</script>
			";
		}
	}else{
		header("Location:tambah.php");
	}
?>