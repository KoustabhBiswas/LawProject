<!-- Top nav bar starts -->


<div class="row top-nav" id="topnav" style="border:0px solid;">
	<div class="col-md-12 col-sm-12 col-xs-12 top-nav-body" style="" >
		<div class="col-md-8 col-sm-8 col-xs-8 top-nav-elements" >
			<i class="fa fa-align-justify" style="font-size: 25px;" 
			onclick="sidenav()"></i>
		</div>

		<div class="col-md-4 col-sm-4 col-xs-4 top-nav-login">

			<p>
				<?php if ($this->session->userdata('username')) {?>
				
				<a href="<?php echo base_url() ?>logout"><?php echo 'Welcome '.$this->session->userdata('username');?></a>

				<?php }else{ ?>
				<a href="<?php echo base_url('login') ?>" class="top-nav-link">
					LogIn
				</a>
				<?php } ?>
			</p>

		</div>



	</div> 

</div>

	 <!-- Top nav bar ends -->