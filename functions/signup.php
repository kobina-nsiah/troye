<?php
	session_start();
	ob_start();

	include("../classes/user.php");
	$obj = new user();
	
	if(isset($_REQUEST['email'])){
		
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$name = $_REQUEST['name'];

		$row = $obj->add_user($email, $password, $name, "image");
		
		
			echo "dashboard.html";

		ob_end_flush();
	}	
?>