<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-iso.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<style type="text/css">
		.btn {
			width: 100%;
		}

		.bootstrap-iso .formden_header h2,
		.bootstrap-iso .formden_header p,
		.bootstrap-iso form {
			font-family: Arial, Helvetica, sans-serif;
			color: black
		}

		.bootstrap-iso form button,
		.bootstrap-iso form button:hover {
			color: white !important;
		}

		.bootstrap-iso .form-control:focus {
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(43, 144, 223, 0.6);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(43, 144, 223, 0.6);
		}

		.asteriskField {
			color: red;
		}

		.sign-in {
			position: relative;
			margin-top: 10%;
		}
		.create-account {
			text-align: right;
		}

		#pic {
			height: 120px;
			width: 120px
		}
		.form-group{
			padding : 16px
		}
		body{
			background-color: #f8f9fa!important;
		}
		h3{
			font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;
		}

	</style>
</head>

<body>
	<div class="bootstrap-iso">
		<div class="container-fluid">
			<div class="row sign-in">
				<div class="col-md-4 offset-md-4">
					<div class="row">
						<div class="col-md-10 offset-md-1 ">
							<form method="post" class='card p-3 '>
								<center>
									<img id="pic" src="<?php echo base_url() ?>/assets/img/profile.png" />
									<h3>Login In</h3>
									<h5>Login here using your username and password</h5>
								</center>
								<div class="form-group ">
									<label class="control-label requiredField" for="email">
										Email
										<span class="asteriskField">
											*
										</span>
									</label>
									<input class="form-control" id="email" name="email" type="text" />
								</div>
								<div class="form-group ">
									<label class="control-label requiredField" for="name1">
										Password
										<span class="asteriskField">
											*
										</span>
									</label>
									<input class="form-control" id="name1" name="name1" type="text" />
								</div>
								<div class="row"></div>
								<div class="form-group">
									<div>
										<button class="btn btn-primary " name="submit" type="submit">
											Sign in
										</button>
									</div>
								</div>
								<div class="create-account">
									<a href="<?php echo base_url() ?>index.php/Login/register_user">Create account?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>