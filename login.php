<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style>
  		body {
  			background-color: #7FDBFF;
  		}
  		.box {
  			
  			
  			margin: 100px;
  			width: auto;
  			height: 500px;
  			border-radius: 20px;
  			border-color: black;
  			background-color: #E4E4E4;

  		}
  		.butt {
  			width: auto;
  			text-align: center;
  			background-color: grey;
  		}
  	</style>
</head>
<body>
	<div class="box">
	<center><br><br>
	<h1>IT Solutions Data Management System</h1><br>
	<form action="" method="POST">
		<input class="butt"type="submit" name="admin_login" value="Admin Login" required>
		<input class="butt"type="submit" name="client_login" value="Client Login" required>
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['client_login'])){
			header("Location: client_login.php");
		}
	?>
	</center>
</div>
</body>
</html>