<?php
/**
* 
*/
class MY_Controller extends CI_Controller
{
	
	 /*function loadView($viewname){
	 	$data['content'] = '.'$viewname'.';
	 	$this->load->view('user/master_layout',$data);
	 }*/
	 function validateAdminUser(){
	 	if($this->session->has_userdata('username')){
	 		$currentUrl = explode("/",current_url());

	 		$flag = 0;
	 		$role = strtolower($this->session->userdata('role'));
	 		foreach($currentUrl as $url){	 			
	 			if($url === $role){
	 				$flag = 1;
	 			}
	 		}
	 		if($flag === 1){
	 			return true;
	 		}else{
	 			//echo "403 Access Denied";
	 			$this->load->view('errors/403-Access-Denied');
	 		}
	 	}else{
	 		return redirect('login');
	 	}
	 }
	}