<?php
	
	include("../classes/project.php");
	include("../classes/project_contributor.php");
	$obj = new project();
	$objC = new project_contributor();
	$con1 = $_REQUEST['input1'];
$con1 = $_REQUEST['input1'];
$con2 = $_REQUEST['input2'];
$con3 = $_REQUEST['input3'];	
$con4 = $_REQUEST['input4'];	
$con5 = $_REQUEST['input5'];	
$con6 = $_REQUEST['input6'];	
$con7 = $_REQUEST['input7'];	
	$creator = $_REQUEST['creator'];
	$name = $_REQUEST['name'];
	
	if(isset($_REQUEST['input1']) && strcmp($con1,"") != 0){
		
		if (strcmp($con1,"") != 0){
			
			$rowC = $objC->add_contributor($creator, $name, $con1);
		}
		
			if (strcmp($con2,"") != 0){
			
			$rowC = $objC->add_contributor($creator, $name, $con2);
		}
			if (strcmp($con3,"") != 0){
			
			$rowC = $objC->add_contributor($creator, $name, $con3);
		}
		
			if (strcmp($con4,"") != 0){
			
			$rowC = $objC->add_contributor($creator, $name, $con4);
		}
			if (strcmp($con5,"") != 0){
			
			$rowC = $objC->add_contributor($creator, $name, $con5);
		}
			if (strcmp($con6,"") != 0){
			
			$rowC = $objC->add_contributor($creator, $name, $con6);
		}
			if (strcmp($con7,"") != 0){
			
			$rowC = $objC->add_contributor($creator, $name, $con7);
		}
		
		
		
		echo "dashboard.html";
			
	}	
?>