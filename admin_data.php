<?php
session_start();
$msg = "";
if($_POST) {
 	$login = $_POST['pwd'];
	//$pw = $_POST['pwd'];
	if(($login != "admin")) {
		$msg = 'Password ไม่ถูกต้อง';
	}
	else {
		$_SESSION['admin'] = "admin";
		header("location: product.php");
		exit;
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ManGo Admin</title>
<link rel="shortcut icon" href="mangog.png">
<style>
	@imports "global.css";

	body {
		margin-top: 20px;
		text-align: center;
	}
	div.warn {
		color: red;
		font-size: 18px;
		margin: 10px;
	}
	img {
		height: 300px;
	}
</style>
</head>

<body>
<img src="images/admin.png"><br>
<div class="warn"><?php echo $msg; ?></div>
<form method="post">
<input type="password" name="pwd" placeholder="Password" required>

<button type="submit">เข้าสู่ระบบ</button>
</form>
</body>
</html>
