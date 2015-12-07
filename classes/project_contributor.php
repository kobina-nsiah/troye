<?php

/**
 * author: Obed Kobina Nsiah
 * date: September 17, 2015
 */
	
include_once("includedb.php");
	
class project_contributor extends adb
{
	//Constructor method
	function project_contributor() {
		
	}
	
	function add_contributor($creator, $name, $email) {
		$str_query = "insert into mw_troye_project_contributor set creator = '$creator', project_name = '$name', contributor = '$email'";
			
		return $this->query($str_query);
	}
	
	
	function get_contributors($creator, $name) {
		$str_query = "select * from mw_troye_project_contributor where creator = '$creator' AND project_name = '$name'";
						
		
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
	
	function get_user_contributions($creator) {
		$str_query = "select * from mw_troye_project_contributor where contributor = '$creator'";
						
		
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
}
?>