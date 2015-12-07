<?php
	
	include("../classes/project_contributor.php");
	include("../classes/user.php");
	$obj = new project_contributor();
	$obj2 = new project_contributor();
	$obj3 = new user();
	
	
	if(isset($_REQUEST['contributor'])){
		
		$contributor = $_REQUEST['contributor'];
		
		$row = $obj->get_user_contributions($contributor);
		
		if ($row == null){
			echo " <br> <br> <br> <br> <br> <br> <br>
		  <h1>You have no group projects</h1>
		   <br> <br> <br> <br> <br> <br> <br>";
		}
		else{
			while ($row){
				$creator = $row['creator'];
				$project = $row['project_name'];
				$html = '<div class="col-lg-4" onclick = groupview("';
				
				
				$html.= $creator;
				$html.= '","';
				$html.= "'{$row['project_name']}'";
				
				$html.='")>';
			$html.= "<div class='panel panel-success'>
			  <div class='panel-heading'>
				<h3 class='panel-title'>{$row['project_name']}</h3>
			  </div>
			  <div class='panel-body'>
			  <div class = 'col-lg-6'>
			  <h3>Contributors:</h3>
				<img class='img-responsive' src='img/people.png' alt='troye' >
				</div>
				
				<div class = 'col-lg-6'>
				<br><br><br>";
				
				$row2 = $obj2->get_contributors($creator, $project);
				
				while ($row2){
					$email = $row2['contributor'];
					$row3 = $obj3->get_user_by_email($email);
				$html.= "{$row3['name']}<br>";
				$row2 = $obj2->fetch();
				}
		
				$html.= "</div>
				
			  </div>
			</div>
				</div>";
				
				echo utf8_encode($html);
		$row = $obj->fetch();
			}
			
		}
			
	}	
?>