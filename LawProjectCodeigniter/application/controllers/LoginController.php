<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class LoginController extends MY_Controller
{
	
	 
	function index(){
		$data['content'] = 'user/login';
		$this->load->view('user/login');
	}
}