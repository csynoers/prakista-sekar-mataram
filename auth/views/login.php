<!DOCTYPE html>
<html>
<head>
	<title>Login Panel</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></head>
<body>
<div class="container">
	<div class="col-sm-6" style="left: 25%;margin-top: 100px;">
		<form class="form-signin" action="<?php echo base_url('login/aksi-login'); ?>" method="post">
			<h2 class="form-signin-heading">Login Admin</h2>
			<div class="form-group">
				<label>Username</label>
				<input class="form-control" type="text" placeholder="Username" name="username" required="" autocomplete="off">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input id="inputPassword" class="form-control" placeholder="Password" type="password" name="password" required=""></td>
			</div>		
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>
</div>


</body>