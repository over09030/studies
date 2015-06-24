<?php 
	if(isset($_POST['user']) and $_POST['user'] != "")
	{
		$user = $_POST['user'];
	}
	if(isset($_POST['pass']) and $_POST['pass'] != "")
	{
		$pass = $_POST['pass'];
	}
	if(isset($_POST['ck_rt']) and $_POST['ck_rt'] == "on")
	{
		setcookie("user",$user,time()+3600);
		setcookie("pass",$pass,time()+3600);
	}
	if (isset($user) and isset($pass))  {
		echo "Cam on ban : " . $user . " da dang nhap vao vao he thong .Voi password la: " . $pass ."<br>";
	}
	elseif (isset($_COOKIE['user']) and isset($_COOKIE['pass'])) {
		echo "Cam on ban : " . $_COOKIE['user'] . " da dang nhap vao he thong . Voi password la: " . $_COOKIE['pass'] . " Thong tin duoc lay tu cookie" . "<br>";
	}
/*	setcookie("user",$user,time()-3600);
	setcookie("pass",$pass,time()-3600);*/
 ?>