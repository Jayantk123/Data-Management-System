<!DOCTYPE html>
<html>
<head>
	<title>Client Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style>
  		body {
  			background-color: #6699ff;
  		}
  		.box {
  			margin-top: 200px;
  			margin-left: 600px;
  			margin-right: 200px; 
  			padding-top: 10px;
  			align-items: center;
  			justify-content: center;
  			width: 300px;
  			background-color: white;
  			border-radius: 20px;
  			box-shadow: 2px 2px #adacd3;
  		
  		}
  			.but
  		{
  			background-color: grey;
  		}
  	</style>
</head>
<body>
	<div class="box">
	<center><br><br>
		<h3>Client LogIn Page</h3><br><br>
		<form action="" method="post">
			Email ID: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input class="but" type="submit" name="submit" value="LogIn">
		</form><br>
	</div>
		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from students where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['email'] == $_POST['email'])
					{
						if($row['password'] == $_POST['password'])
						{
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: client_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
					else
					{
						?>
						<span>Wrong UserName !!</span>
						<?php
					}
				}
			}
		?>
	</center>
</body>
</html>