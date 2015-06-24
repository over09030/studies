<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
	<?php 
	if(isset($_COOKIE['user']) and $_COOKIE['user'] != "")
	{
		header("Location: cookie2.php");
	}
	else
	{
	?>
	<form action="cookie2.php" method="post">
		Username: <input type="text" name="user"> <br>
		Password: <input type="password" name="pass"> <br>
		Save username: <input type="checkbox" name="ck_rt"> <br>
		<input type="submit" value="Dang Nhap">
	</form>
	<?php
	}
	?>
</body>
</html>