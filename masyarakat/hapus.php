<?php
	include '../koneksi.php';

	$id_imigran = $_GET['id_imigran'];

	$query = mysqli_query($koneksi, "DELETE FROM data_imigran WHERE id_imigran=$id_imigran");
	var_dump($query);

	if($query>0){
		echo "
        <script>
        alert('Data berhasil dihapus, Yeay!');
        document.location.href = 'index.php';
        </script>
        "
        ;
	}
?>