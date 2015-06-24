<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_COOKIE['user']) and $_COOKIE['pass'] and $_COOKIE['type_user'] )
	{
		header('Location: script.php');
	}
	else
	{
	?>
	<form name="login" action="script.php" method="post">
		Username : <input type="text" name="user"> <br><br>
		Password : <input type="password" name="pass"> <br>
		Save user : <input type="checkbox" name="save_user"> <br>
		<input type="submit" value="Dang nhap">
	</form>
	<?php
	}
	?>
</body>
</html>