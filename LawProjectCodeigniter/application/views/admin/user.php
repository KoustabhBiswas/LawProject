<div class="container-fluid main-body" id="main-body" style="margin-left: 135px;">
	
	<div class="row" >
		<!-- Content Starts -->
		<div class="col-md-10 col-sm-10 col-xs-10 table_div_user" style="border: 0px solid; margin-left:50px" >
			<!-- User Table Start -->
			<table class="table table-responsive " id="table">
				<?php if($this->session->flashdata('add_success')){
					echo $this->session->flashdata('add_success');
				} ?>
				<button href="" class="btn  add_btn" id="add_btn" onclick="return toggleTableAddFormUser();"><b>Add User +</b></button>
				
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th >Contact Number</th>
						<th>Address</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>


					<?php foreach($clients as $users){ ?>
					<tr>
						<td><?php echo $users['firstname']." ".$users['lastname']; ?> </td>
						<td><?php echo $users['emailid']; ?> </td>
						<td><?php echo $users['phone'];?> </td>
						<td><?php echo $users['address'];?></td>
						<td><a href="" class="edit_link_cms btn" onclick="edit_form(<?php echo $users['id']; ?>)"><i class="fa fa-pencil" style="color: white;"></i></a>
							<a href="" class="delete_link_cms btn"><i class="fa fa-trash-o" style="color: white;"></i></a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<!-- User Table Ends -->
				<!-- User Add Form Starts -->
				<div class="col-md-6 col-sm-6 col-xs-6 add_form" id="add_form" style="display: none;">
					<h1>Add User</h1>

					<div class="form-group">
						<label>First Name:</label>
						<input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname">
					</div>
					<div class="form-group">
						<label>Last Name:</label>
						<input type="text" name="lastname" class="form-control" id="lastname" placeholder="Ente Lastname">
					</div>
					<div class="form-group">
						<label>Email ID:</label>
						<input type="text" name="email" class="form-control" id="email" placeholder="Enter EmailId">
					</div>
					<div class="form-group">
						<label>Contact Number:</label>
						<input type="text" name="contact" class="form-control" id="contact" placeholder="Enter Phone Number">
					</div>
					<div class="form-group">
						<label>Address:</label>
						<input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
					</div>
					<div class="form-group col-md-12">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<input type="submit" name="" class="form-control add_submit_btn" value="Add " onclick="addUser()">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<input type="button" name="" class="form-control cancel_btn" value="Cancel" id="cancel" onclick="openTableUser()">
						</div>

					</div>
				</div>
				<!-- User Add Form Ends -->
			</div>
			<!-- Content Ends -->
		</div>

	</div>

	<script type="text/javascript">
		function addUser(){
			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var email = $('#email').val();
			var contact = $('#contact').val();
			var address  = $('#address').val();
			$.ajax({
				type: "POST",
				url:"<?php  echo base_url(); ?>admin/users/addUser",
				data: {firstname:firstname, lastname:lastname , email:email, contact:contact, address:address},
				success:function(response){
			//alert(response);
			
			//alert(response);
			window.location.('<?php echo base_url();  ?>admin/users');
		},
		error:function(xhr){

		}
	});
		}
		function edit_form(id){
			$.ajax({
				type:'GET',
				url: '<?php echo base_url(); ?>admin/editUser',
				data: {id:id},
				success:function(response){
					//
				},
				error:function(xhr){
					//
				}
			});
		}

	</script>
	

