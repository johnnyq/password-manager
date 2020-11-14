<?php

	session_start();
	
	if(!$_SESSION['logged']){
	    header("Location: logout.php");
	    die;
	}

	$session_user_id = $_SESSION['user_id'];
	$session_username = $_SESSION['username'];
	$session_password = $_SESSION['password'];

?>