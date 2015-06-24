<?php 
	if(isset($_GET['fullname']) and $_GET['fullname'] != "" )
		echo "Fullname: ". $_GET['fullname']. "<br>";
	if(isset($_GET['gender']) and $_GET['gender'] != "")
		echo "Gender: ". $_GET['gender']. "<br>";
	echo "<pre>";
	var_dump($_GET);
	echo "</pre>";
 ?>


	