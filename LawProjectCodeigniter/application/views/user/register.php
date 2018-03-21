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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/login.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
	<!-- registration part starts  -->
		<div class="row"  >
			<div class="col-md-4 col-sm-4 col-xs-4 login-body" style="">
				<div class="row dlf">
					<h3>Dhiman's Law Firm</h3>
				</div>
				<form>
					
					<div class="form-group">
						<label>First Name:</label>
						<input type="text" name="" class="form-control">
				    </div>
				    <div class="form-group">
						<label>Last name:</label>
						<input type="text" name="" class="form-control">
				    </div>
				    <div class="form-group">
						<label>Email Id:</label>
						<input type="text" name="" class="form-control">
				    </div>

				    <div class="form-group">
						<label>Password:</label>
						<input type="password" name="" class="form-control">
				    </div>
				    <div class="form-group">
						<label>Phone Number:</label>
						<input type="text" name="" class="form-control">
				    </div>
				    <div class="form-group">
						<label>Address:</label>
						<input type="text" name="" class="form-control">
				    </div>
				    <div class="form-group">
				    	<input type="submit" name="LogIn" class="btn form-control login-btn" value="LogIn">
				    	<a href="" class="btn form-control login-btn">Go Back To Home</a>
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
		</div>	
		<!-- registration part ends  -->
</div>

</body>
</html>