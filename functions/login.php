<?php
	session_start();
	ob_start();

	include("../classes/user.php");
	$obj = new user();
	
	if(isset($_REQUEST['email'])){
		
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];

		$row = $obj->get_user($email, $password);
		
		if($row == null){
			echo "";
			exit();
		}
		
		if (strcmp($row['password'],$password) != 0){
			echo "";
			exit();
		}
		else {
			//set session variables
					$_SESSION["user"] = $row['name'];
					$_SESSION["mail"] = $row['email'];
			echo "dashboard.html";
			//redirect_to index.ph
					//header("Location: http://cs.ashesi.edu.gh/~csashesi/class2016/obed-nsiah/mobileweb/pos/desktop/inventory.html");
				//	exit;
		}
		
		//$obj->closeLink
		ob_end_flush();
	}	
?>