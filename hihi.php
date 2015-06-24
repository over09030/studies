<?php 
	session_start();
	if (isset($_SESSION['public'])) {
		echo $_SESSION['public'] . "<br>";
	}
	if (isset($_SESSION['private'])) {
		echo $_SESSION['private']. "<br>";
	}
	unset($_SESSION['public']);
	if(isset($_SESSION['public'])) {
		echo $_SESSION['public'] ."<br>";
	}
	if(isset($_SESSION['private'])) {
		echo $_SESSION['private'] . "<br>";
	}
?>