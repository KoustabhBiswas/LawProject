 
<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Stylesheet ahead -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/body.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/icon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/side-nav.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/top-nav.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/font/font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/admin/cms-user.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Stylesheet ends -->
</head>
<body class="container-fluid">
	<?php $this->load->view('admin/shared/side-nav'); ?>	
	<?php $this->load->view('admin/shared/top-nav'); ?>
	<?php $this->load->view($content); ?>

	<!-- Javascript Files Ahead -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/admin/cms-user.js"></script>
	<!-- Javascript Files End -->
</body>
</html>