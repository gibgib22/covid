<?php
 session_start();	
 include '../koneksi.php';

 if(isset($_POST['btnlogin'])){	
 	$username = $_POST['username'];
 	$pass = $_POST['pass'];

 	$result = mysqli_query($koneksi, "SELECT * FROM data_imigran WHERE username='$username' AND pass='$pass'");
 	$cek = mysqli_num_rows($result);
 	var_dump($result);

 	if ($cek>0) {
 		$data =mysqli_fetch_assoc($result);

 		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['status'] = "sudah_login";
		$_SESSION['id_login'] = $data['id_imigran'];

		header("Location:http://localhost/covid/index.php");
 	}else{
 		header("Location:http://localhost/covid/login/index.php");
 	}
  }
?>