<?php
	include '../koneksi.php';

	if(isset($_POST['simpan'])){
		$nama		 = $_POST['nama'];
		$ttl		 = $_POST['ttl'];
		$telp		 = $_POST['telp'];
		$foto		 = $_POST['foto'];
		$id_jenis	 = $_POST['id_jenis'];
		$penyakit	 = $_POST['penyakit'];
		$aktivitas	 = $_POST['aktivitas'];
		$username	 = $_POST['username'];
		$pass		 = $_POST['pass'];
		$id_kategori = $_POST['id_kategori'];

		$sql = "UPDATE data_imigran SET nama='$nama', ttl='$ttl', telp='$telp', foto='$foto', id_jenis='$id_jenis', penyakit='$penyakit', aktivitas='$aktivitas', username='$username', pass='$pass', id_kategori='$id_kategori' WHERE id_imigran='$id_imigran'";
		$res = mysqli_query($koneksi,$sql);
		$count = mysqli_affected_rows($koneksi);

		if($res==1){
			echo "
				<script>
				alert('Data Berhasil Di edit !!!');
				document.location.href='index.php';
				</script>
			";
		}
	}else{
		header("location:edit.php");
	}
?>