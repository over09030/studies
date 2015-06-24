<?php
/*chu de : cho phep nguoi dung dang nhap vao he thong , kiem tra thanh vien , kiem tra quyen han va hien thi cac quyen han do
-tao form dang nhap
-tao cac lop xet duyet thong tin nguoi dung nhap
-tao ket noi va kiem tra quyen han , sau do khai bao session , hoac cookie tuy theo nguoi dung
*/
	session_start();
	class login
	{
		var $user;
		var $pass;
		function check_login($user="", $pass="", $save_user= "off")
		{
			$d_user ='duongnguyen';
			$d_pass =md5('123456');
			$d_type = '1';//1 admin ,2 mod ,3 user, 4 banned
			$flag =0 ;// 0 sai ca user lan pass, 1 sai user , 2 sai pass ,3 dung
			if ($user != "" and $pass != "") 
			{
				if($user == $d_user)
				{
					if(md5($pass) == $d_pass)
					{
						$this ->set_session('username',$user);
						$this ->set_session('password',$pass);
						$this ->set_session('type_user',$d_type);
						$flag =3;
						if ($save_user == "on")
						{
							$this ->set_cookie('user',$user,time()+3600);
							$this ->set_cookie('pass',$pass,time()+3600);
							$this ->set_cookie('type_user',$d_type,time()+3600);
						}
					}
					else
					{
						$flag =2;
					}
				}
				else
				{
					$flag =1;
				}
			}
			return $flag;
		}

		function set_cookie($name,$value,$time)
		{
			setcookie($name,$value,$time);
		}

		function set_session($name,$value)
		{
			$_SESSION[$name]= $value;
		}

	}
	$c_login =new login;
	if(isset($_COOKIE['user']) and isset ($_COOKIE['pass']) and isset($_COOKIE['type_user']))
	{
		$c_login -> set_session('user',$_COOKIE['user']);
		$c_login -> set_session('pass',$_COOKIE['pass']);
		$c_login -> set_session('type_user',$_COOKIE['type_user']);
		echo "Ban Da Dang Nhap Thanh Cong voi thong tin user :" . $_SESSION['user'] . "va pass :" .$_SESSION['pass'];
		echo "<br>Ban co quyen hang mang gia tri la: " . $_SESSION['type_user'];
	}
	elseif(isset($_POST['user']) and isset($_POST['pass']) )
	{
		$save_user= "off";
		if (isset($_POST['save_user']))
			$save_user = $_POST['save_user'];

		$c_login->rt_check = $c_login ->check_login($_POST['user'],$_POST['pass'], $save_user);
		switch ($c_login->rt_check) 
		{
			default :
				$vl_login= "<br> User va pass cua ban khong tim thay ";
				break;
			case '1':
				$vl_login= "<br> User khong ton tai trong he thong";
				break;
			case '2':
				$vl_login= "<br> Password khong dung voi thong tin trong he thong";
				break;
			case '3':
				$vl_login= "<br> Ban da dang nhap thanh cong";
				$vl_type ="<br>Ban co quyen hang mang gia tri la: " . $_SESSION['type_user'];
				break;
		}
		echo $vl_login;
		if (isset($vl_type))
			echo $vl_type;
	}
/*	$c_login ->set_cookie('user',$user,time()-3600);
	$c_login ->set_cookie('pass',$pass,time()-3600);
	$c_login ->set_cookie('type_user',$d_type,time()-3600);*/
	// var_dump($c_login);
?>