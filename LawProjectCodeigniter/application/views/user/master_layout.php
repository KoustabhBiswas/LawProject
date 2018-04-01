<?php
 $this->load->helper('url');
?>
<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Stylesheet ahead -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/body.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/icon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/side-nav.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/top-nav.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/font/font.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Stylesheet ends -->
</head>
<body class="container-fluid">
<?php $this->load->view('user/shared/sidenav'); ?>	
 <?php $this->load->view('user/shared/topnav'); ?>
 <?php $this->load->view($content); ?>
</body>
</html>