<?php
	
	include("../classes/project.php");
	include("../classes/project_contributor.php");
	$obj = new project();
	$objC = new project_contributor();
	$name = $_REQUEST['name'];	
	
	if(isset($_REQUEST['name'])){
		
		$creator = $_REQUEST['creator'];


		
		$html = "<h1>".$name."</h1>";
		$html.=
'		
		
		<div class = "container">
	<div class = "row">
		  <div class="col-lg-12 col-lg">
		  
		  <form class="form-horizontal">
		<fieldset>
		<legend>Add Contributors</legend>
		<div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Contributor 1</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="input1" placeholder="">
      </div>
    </div>
	
	
		<div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Contributor 2</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="input2" placeholder="">
      </div>
    </div>
	
	
		
		<div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Contributor 3</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="input3" placeholder="">
      </div>
    </div>
	
		  
	
		<div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Contributor 4</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="input4" placeholder="">
      </div>
    </div>
		  
		 
		<div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Contributor 5</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="input5" placeholder="">
      </div>
    </div>
	
	
		  
		 
		<div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Contributor 6</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="input6" placeholder="">
      </div>
    </div>
		
	
		<div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Contributor 7</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="input7" placeholder="">
		<input type="text" class="form-control" id="creator" placeholder="" value="'.$creator.'" hidden>
		<input type="text" class="form-control" id="name" placeholder="" value="'.$name.'" hidden>
      </div>
    </div>
		
		
	
		</fieldset>
		</form></div> <div class="col-lg-12 col-lg-offset-1">
			<a href="#" class="btn btn-primary" onclick = "add()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Submit contributors</a>
			<br><br>
		</div>';
			echo utf8_encode($html);
	}	
?>