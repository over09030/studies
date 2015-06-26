<?php
	$conn=mysql_connect("localhost", "root") or die("can't connect database");
	mysql_select_db("demo_mysql",$conn);
	$sql="select * from user";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) == 0)
	{
		echo "Chua co du lieu";
	}
	else
	{
		while($row=mysql_fetch_array($query))
		{
			echo $row['id'] ." - " . $row['username'] ." - ".$row['password']."<br />";
		}
	}
	mysql_close($conn);
?>