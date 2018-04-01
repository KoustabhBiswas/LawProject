<?php
/**
* 
*/
class Client extends MY_Model
{
	function fetchUser(){
		$users = $this->db->select('*')
				 ->from('users')
				 ->get();
		return $users->result_array();
	}
	function addUser($users){
		$this->db->insert('users',$users);
		return true;
	}
	
	 
}