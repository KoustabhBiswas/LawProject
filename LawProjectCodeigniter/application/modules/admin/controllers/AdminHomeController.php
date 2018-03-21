<?php
/**
* 
*/
class AdminHomeController extends MY_Controller
{
	
	 function index(){
	 	$data['content'] = 'admin/home';
	 	$this->load->view('admin/master_layout',$data);
	 }
}