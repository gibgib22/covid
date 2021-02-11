<?php
	session_start();
	if ($_SESSION) 
	{
		header("Location:http://localhost/covid/login/index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>form Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<center>
	<body>
		<div class="row">
		<div class="card col">
		<div class="card-title"></div>
	  	<div class="card-body">
	  </div>
	</div>
	<div class="container">
		<div class="row mt-4">
     		<div class="col-md">
        	</div>
    	</div>
	</div>
	<h1>Form Login</h1>
		<br/>
		<form action="proses-login.php" method="post">
			<table>
				<tr>
					<td><label for="">Username</label></td>
					<td><input type="text" name="username" id=""></td>
				</tr>
				<tr>
					<td><label for="">Password</label></td>
					<td><input type="password" name="pass" id=""></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Login" name="btnlogin" class="btn btn-primary mt-auto">
					</td>
				</tr>
			</table>
		</form>
</div>
	</body>
</center>
</html>