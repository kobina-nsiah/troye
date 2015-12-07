<?php

/**
 * author: Obed Kobina Nsiah
 * date: September 17, 2015
 */
	
include_once("includedb.php");
	
class user extends adb
{
	//Constructor method
	function user() {
		
	}
	
	function add_user($email, $password, $name, $picture) {
		$str_query = "insert into mw_troye_user set email = '$email', password = '$password', name = '$name', picture = '$picture'";
			
		return $this->query($str_query);
	}
	
	
	function get_user($email, $password) {
		$str_query = "select * from mw_troye_user where email = '$email' AND password = '$password'";
						
		
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
	
	function get_user_by_email($email) {
		$str_query = "select * from mw_troye_user where email = '$email'";
						
		
		if(!$this->query($str_query)) {
			return false;
		}
			
		return $this->fetch();
	}
}
?>