<?php
	if($_POST['user'] == "")
		echo "Vui long nhap Username";
	else
		$u=$_POST['user'];
	if($_POST['pass'] == "")
		echo "Vui long nhap Password";
	else
		$p=$_POST['pass'];
	if($u and $p)
	{
		$conn = mysql_connect("localhost","root") or die ("Khong the ket noi den CSDL");
		mysql_select_db("project",$conn);
		$sql ="select * from user where username='$u' and password ='$p'";
		echo "<br>" . $sql . "<br>";
		$query =mysql_query($sql);
		if (mysql_num_rows($query) == 0)
			echo "Username va Password khong chinh xac . Vui long nhap lai";
		else
		{
			$row=mysql_fetch_array($query);
			echo $row['username'] . " - " . $row['password'];
			session_start();
			$_SESSION['user'] = $u;
			$_SESSION['pass'] = $p;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="login.php" method = "post">
	Username: <input type="text" name="user" size="25"> <br>
	Password: <input type="password" name="pass" size="25"> <br>
	<input type="submit" value="Dang Nhap"> 
</form>
</body>
</html>