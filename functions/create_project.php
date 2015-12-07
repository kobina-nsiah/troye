<?php
	
	include("../classes/project.php");
	include("../classes/project_contributor.php");
	$obj = new project();
	$objC = new project_contributor();
	$name = $_REQUEST['name'];	
	
	if(isset($_REQUEST['name']) && strcmp($name,"") != 0){
		
		$creator = $_REQUEST['creator'];
		
		$start = $_REQUEST['start'];
		$end = $_REQUEST['end'];

		$row = $obj->add_project($creator, $name, $start, $end, "Ongoing");
		$rowC = $objC->add_contributor($creator, $name, $creator);
		echo "dashboard.html";
			
	}	
?>