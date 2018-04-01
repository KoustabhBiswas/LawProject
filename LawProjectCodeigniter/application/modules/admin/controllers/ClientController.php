<?php
/**
* 
*/
class ClientController extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Client','users');
		//$this->validateAdminUser();
	}
	function index(){
		 if($this->validateAdminUser()  ){
			$data['content'] = "admin/user";
				$users = $this->users->fetchUser();
				$data['clients'] = $users;
				$this->load->view('admin/master_layout',$data);
		 } 
		 
	}
	function addUser(){
		if($this->session->has_userdata('username')){
			if($this->session->userdata('role') === 'Admin'){
				$formdata = array(
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'emailid' =>     $this->input->post('email'),
					'phone' =>   $this->input->post('contact'),
					'address' =>    $this->input->post('address'),
					'role' => "User"
				);
				$addUser = $this->users->addUser($formdata);
				if($addUser){
					$this->session->set_flashdata('add_success',"User Added Successfully");
					$this->session->keep_flashdata('add_success');
					echo $this->session->flashdata('add_success');
				}else{
					return false;
				}
			}else{
				echo "403 Access Denied";
			}
		}else{
			return redirect('login');
		}
		
	}
	
	
}