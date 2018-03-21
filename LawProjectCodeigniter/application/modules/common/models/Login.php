<?php
/**
* 
*/
class Login extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	 function register($user){
	 	//$this->load->database();
	 	$this->db->insert('users',$user);
	 	return true;

	 }
	 function validateUserByUserId($userId){
	 	$this->load->database();
	    $this->db->select('*')
	 			 ->from('users')
	 			 ->where('emailid',$userId);
	    $user = $this->db->get();
	 			 
	 
	 	return $user->row();
	 			 
	 }

	 function getByUserId($userId){
	 	
	 }
}