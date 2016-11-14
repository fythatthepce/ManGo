<!DOCTYPE html>
<html>
<head>
	<title>Bank Verify</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="mangog.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		@import "global-order2.css";

		button a {
			color:white;
			text-decoration: none;
		}
		button a:hover {
			color:white;
			text-decoration: none;
		}
		button a:visited {
			color:white;
			text-decoration: none;
		}
		button a:active {
			color:white;
			text-decoration: none;
		}
		img {
			border:10px solid #40CCFF;
		}
		body {
			text-align: center;
		}
		h1 {
			font-family: tahoma;
		}
	</style>

</head>
<body>

<?php include "top.php"; ?>

<br><br><br>

<h1><b>&nbsp;&nbsp;เช็คยอดบัญชี</b></h1>

<br><br><br>

<div class="container">
	<div class="col-md-2"></div>
	<div class="col-md-3 text-center">
		<img src="/imgBank/TheRealBank.png" style="width:300px;height:260px"><br><br><br>
		<button type="button" class="btn btn-primary btn-lg"><a href ="bank1.php">The Real Bank</a></button>
	</div>
	<div class="col-md-2"></div>
	<div class="col-md-3 text-center">
		<img src="/imgBank/CeSeBank.png" style="width:auto;height:auto;"><br><br><br>
		<form action="http://161.246.70.75:8080/cesebank/user_login.php" method="post">
		<?php
		$username = 'username=Mango';
		$password = 'password=mango';
		?>
		<button type="submit" class="btn btn-primary btn-lg">CESE Bank</button></form>
	</div>
	<div class="col-md-2"></div>
</div>

</body>
</html>