<?php
session_start();

session_destroy();

header("Location:http://localhost/covid/login/index.php?pesan=anda berhasil logout");//header setelah location : tiboleh ada spasi
exit;
?>