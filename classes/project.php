<?php

/**
 * author: Obed Kobina Nsiah
 * date: September 17, 2015
 */
	
include_once("includedb.php");
	
class project extends adb
{
	//Constructor method
	function project() {
		
	}
	
	function add_project($creator, $name, $start, $end, $status) {
		$str_query = "insert into mw_troye_project set creator = '$creator', name = '$name', start_date = '$start', end_date = '$end',  status = '$status'";
			
		return $this->query($str_query);
	}
	
	
	/*function get_project($email, $password) {
		$str_query = "select * from mw_troye_user where email = '$email' AND password = '$password'";
						
		
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}*/
}
?>