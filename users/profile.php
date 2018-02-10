<?php  
	include_once '../includes/header.php';
	//check if the user is logged in else redirect the user to the login page
	if (!is_logged_in()) {
		login_error_redirect();
	}
	include_once '../includes/header-x.php';
?>

<div class="row faq">
	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 profile-image">
		<a href="#"><img src="../images/1.jpg"></a>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
		<table class="table table-striped">
			<h1>User Profile</h1>
			<thead>
				<th></th>
				<th></th>
			</thead>

			<tbody>
				<tr>
					<td>Name</td>
					<td><?php echo $user_data['full_name']; ?></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><?php echo $user_data['phone_number']; ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $user_data['email']; ?></td>
				</tr>
				<tr>
					<td>BVN</td>
					<td><?php echo $user_data['bvn']; ?></td>
				</tr>
			</tbody>
		</table>
		<a href="edit.php" class="btn btn-primary profile-btn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> | Edit Profile</a>
		<a href="change_password.php" class="btn btn-warning profile-btn"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> | Change Password</a>
		<a href="logout.php" class="btn btn-danger profile-btn"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> | Logout</a>
	</div>	
</div>

<?php  
	include_once '../includes/footer.php';
?>