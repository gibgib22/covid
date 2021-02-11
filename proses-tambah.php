<?php
 include 'koneksi.php';

 if(isset($_POST['simpan'])){
 	$id_imigran = $_POST['id_imigran'];
 	$pertanyaan1 = $_POST['pertanyaan1'];
 	$pertanyaan2 = $_POST['pertanyaan2'];
 	$pertanyaan3 = $_POST['pertanyaan3'];

 	$sql = "INSERT INTO pertanyaan(pertanyaan1, pertanyaan2, pertanyaan3, id_imigran) VALUES ('$pertanyaan1', '$pertanyaan2', '$pertanyaan3', '$id_imigran')";
 	$res = mysqli_query($koneksi, $sql);
 	$divaa = $pertanyaan1 + $pertanyaan3 + $pertanyaan2;

 	if ($divaa<5) {
 	 	header("Location:positiv.php");
 	 }else{
 	 	header("Location:negativ.php");
 	 } 
 }
?>