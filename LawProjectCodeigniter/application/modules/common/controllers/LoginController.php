<?php
/**
* 
*/
class LoginController extends MY_Controller
{

	
	function index(){
	 	//$data['content'] = 'user/login' ;
		$this->load->view('user/login');
	}

	function register(){	 	 
		$this->load->database();
		$this->load->model('Login','login');
	 	//$form_data = $this->input->post();
		$this->form_validation->set_rules('firstname','First Name ', 'required');
		$this->form_validation->set_rules('lastname','Last Name','required');
		$this->form_validation->set_rules('emailid','Email','required|is_unique[users.emailid]|valid_email');
		$this->form_validation->set_rules('pass','Password','required|min_length[6]|max_length[32]');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('address','Address','required');
		$form_data  = array(
			'firstname' => $this->input->post('firstname') ,
			'lastname' => $this->input->post('lastname'),
			'emailid' => $this->input->post('emailid'),
			'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
			'phone' => $this->input->post('phone'),
			'address' => $this->input->post('address'),
			'role' => "User"
		);
		if($this->form_validation->run()){
			$ins = $this->login->register($form_data);
			if($ins){
				$this->session->set_flashdata('reg_success', 'Successfully registered');
				$this->session->keep_flashdata('reg_success');
				return redirect('/login');	 		 
			}else{
				echo 'Failes';
			}
		}else{
			$this->load->view('user/login');

		}
	}

	function login(){
		$this->load->library('bcrypt');
		$userId = $this->input->post('emailid');
		$password  = $this->input->post('pass');
		$b_pass = password_hash($password, PASSWORD_DEFAULT);
		$this->load->model('Login','login');
		$validate = $this->login->validateUserByUserId($userId);

		if(count($validate) === 1){
			if(password_verify($password,$validate->password)){
				/* Validation By User Role */
				if($validate->role === 'User'){
					$this->session->set_userdata('username',$validate->firstname.$validate->lastname);
					return redirect('/');
				}else{
					$this->session->set_userdata('username',$validate->firstname.$validate->lastname);
					return redirect('/admin');
				}
				/* Validation By User Role */
			}
		}else{
			$this->session->set_flashdata('invalid_username', 'Invalid Username and Password');
			$this->load->view('user/login');
		}
	}
	function logout(){
		$this->session->unset_userdata('username');
		return redirect('/');
	}

	function test(){
		if($this->session->userdata('username') != NULL){
			//$this->load->view('user/login');
			echo "HIHI";
		}else{
			echo "hhaaaa";
		}
	}
}