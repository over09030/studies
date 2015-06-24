<?php
	session_start();

	if(isset($_POST['public']) and $_POST['public'] != "")
	{
		$_SESSION['public']= $_POST['public'];
	}	
	if(isset($_POST['private']) and $_POST['private'] != "")
	{
		$_SESSION['private'] = $_POST['private'];
	}
	

	// echo "session name : " . $_SESSION['public'] . "<br>";
?>
<!DOCOTYPE html>
<html>
	<head>
		<title> Learning PHP </title>
	</head>
	<body>
		<?php
			function check_email($email)
			{
				$a =explode("@",$email);
				$temp =count ($a);
				if ($temp ==2 && strlen($a[0]) >5 )
				{
					$b = explode(".",$a[1]);
					$temp =count ($b);
					if($temp ==1 )
					{
						return "FALSE";
					}
					else
					{
						for($i =1 ;$i<=$temp; $i++)
						{
							if (strlen($b[$i-1]) <2 )
							{
								return "FALSE";
							}
						}
					}
					return "TRUE";
				}
				else
					return "FALSE";
			};
		?>
		<form name="hihi" action="hello.php" method="post">
			Public <input name="public" value="" type="text"><br>
			Private <input name="private" value="" type="text"> <br>
			<input type="submit" value="Nhap Gia Tri">
		</form>
		<a href="hihi.php"> Hihi</a>
	</body>
</html>