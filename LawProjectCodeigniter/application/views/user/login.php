<?php $this->load->helper('url'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/bootstrap/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/bootstrap/bootstrap-theme.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/body.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/icon.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/side-nav.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/top-nav.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/font/font.css'); ?>">
	<link  href="<?php echo base_url() ?>/assets/css/login.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<!-- login form starts -->
			<?php 
				//$this->load->library('session');
				if ($this->session->flashdata('reg_success')) {
					# code...
					echo $this->session->flashdata('reg_success');
				}  ?>
			<div class="col-md-6 col-sm-6 col-xs-6 login-body" >

				<div class="row dlf">
					<h3>Dhiman's Law Firm</h3>
				</div>

				<form action="<?php echo base_url(); ?>loginsubmit" method="POST">
					<span style="color: red;"><?php if ($this->session->flashdata('invalid_username')) {
						# code...
						echo $this->session->flashdata('invalid_username');
					} ?></span>
					<div class="form-group">
						<label>Email Id:</label>
						<input type="text" name="emailid" placeholder="Enter Your Email" class="form-control input">

				    </div>
				    <div class="form-group">
						<label>Password:</label>
						<input type="password" name="pass" placeholder="Enter Your Password" class="form-control">
				    </div>
				    <div class="form-group">
				    	<input type="submit" name="LogIn" class="btn form-control login-btn" value="LogIn">
				    </div>
				    
				    <div class="form-group">
				    	<span>Not registered?</span>
				    	 <a href="#register" class="register"  >Register Here</a>
				    </div>
				</form>
			</div>
			<!-- Login form ends -->
			<!-- Registration form starts -->
			 <div class="col-md-6 col-sm-6 col-xs-6 login-body" id="register">
				<div class="row dlf">
					<h3>Dhiman's Law Firm</h3>
				</div>
				<form action="<?php echo base_url(); ?>register" method="POST">
					
					<div class="form-group">
						<label>First Name:</label>
						<input type="text" name="firstname" class="form-control" placeholder="Enter your firstname">
						<span style="color: red;"><?php echo form_error('firstname'); ?></span>
				    </div>
				    <div class="form-group">
						<label>Last name:</label>
						<input type="text" name="lastname" class="form-control" placeholder="Enter your lastname">
						<span style="color: red;"><?php echo form_error('lastname'); ?></span>
				    </div>
				    <div class="form-group">
						<label>Email Id:</label>
						<input type="text" name="emailid" class="form-control">
						<span style="color: red;"><?php echo form_error('emailid'); ?></span>
				    </div>

				    <div class="form-group">
						<label>Password:</label>
						<input type="password" name="pass" class="form-control">
						<span style="color: red;"><?php echo form_error('pass'); ?></span>
				    </div>
				    <div class="form-group">
						<label>Phone Number:</label>
						<input type="text" name="phone" class="form-control">
						<span style="color: red;"><?php echo form_error('phone'); ?></span>
				    </div>
				    <div class="form-group">
						<label>Address:</label>
						<input type="text" name="address" class="form-control">
						<span style="color: red;"><?php echo form_error('address'); ?></span>
				    </div>
				    <div class="form-group">
				    	<input type="submit"  class="btn form-control login-btn" value="Register">
				    	<a href="<?php echo base_url() ?>" class="btn form-control login-btn">Go Back To Home</a>
				    </div>
				    <!-- <div class="form-group">
				    	<a href="" class="btn form-control login-btn">Go Back To Home</a>
				    </div> -->
				    <div class="form-group">
				    	<span>Not registered?</span>
				    	 <a href="" class="register">Register Here</a>
				    </div>
				</form>
			</div>
			<!-- Registration form ends -->
            
        </div>
         
      
	 	
</div>
</div>

</body>
</html>