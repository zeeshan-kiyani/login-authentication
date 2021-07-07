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
			border-color: #2b90df;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(43, 144, 223, 0.6);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(43, 144, 223, 0.6);
		}

		.asteriskField {
			color: red;
		}
		.sign-up {
			position: relative;
			margin-top: 8%;
		}
		.form-group{
			padding : 16px
		}
		.bg-body{
    background-color: #f8f9fa!important;
}
	</style>
</head>

<body class="bg-body">

	<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
	<span class="border border-dark">
		<div class="bootstrap-iso">
			<div class="container-fluid">
				<div class="row sign-up">
					<div class="col-md-4 col-sm-4 col-xs-12 offset-md-4">
						<form method="post" class='card p-3 '>
							<h2> Create Your account </h2>
							<div class="form-group ">
								<label class="control-label requiredField" for="name">
									Full Name
									<span class="asteriskField">
										*
									</span>
								</label>
								<input class="form-control" id="name" name="name" type="text" />
							</div>
							<div class="form-group ">
								<label class="control-label requiredField" for="email">
									Email
									<span class="asteriskField">
										*
									</span>
								</label>
								<input type="email" class="form-control" name="email" placeholder="Email" required/>
							</div>
							<div class="form-group ">
								<label class="control-label requiredField" for="name1">
									Password
									<span class="asteriskField">
										*
									</span>
								</label>
								<input type="password" class="form-control" name="password" placeholder="Password" minlength="8" required/>
                                <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers only.</small>
							</div>
							<div class="form-group ">
								<label class="control-label requiredField" for="name2">
									Confirm Password
									<span class="asteriskField">
										*
									</span>
								</label>
								<input type="password" class="form-control" name="confirmpassword" placeholder="Password" minlength="8" required/>
                                <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers only.</small>							</div>
							<div class="form-group ">
								<label class="control-label requiredField" for="gender">
									Gender
									<span class="asteriskField">
										*
									</span>
								</label>
								<select class="select form-control" id="gender" name="gender">
									<option value="Male">
										Male
									</option>
									<option value="Female">
										Female
									</option>
								</select>
							</div>
							<div class="form-group">
								<div>
								<input type="submit" name="save" class="btn btn-primary" value="Sign Up"/>
									<!-- <a class="btn btn-primary" name="save" href="<?php echo base_url() ?>index.php/Login/code_authentication">
										Sign Up
									</a> -->
								</div>
							</div>

						</form>
					</div>

				</div>
			</div>
		</div>



</body>

</html>