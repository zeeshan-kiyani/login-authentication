<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<style type="text/css">

		.btn{
			width : 100%;
		}
		.bootstrap-iso
		.formden_header h2,
		.bootstrap-iso
		.formden_header p,
		.bootstrap-iso
		form{font-family: Arial, Helvetica, sans-serif; color: black}
		.bootstrap-iso form button, .bootstrap-iso
		form button:hover{color: white !important;}.bootstrap-iso .form-control:focus { border-color: #2b90df;-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(43, 144, 223, 0.6); box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(43, 144, 223, 0.6);} .asteriskField{color: red;}
		.sign-in{
			position: relative;
			margin-top: 15%;
		}
		.create-account{
			text-align : right;
		}
	</style>
</head>
<body>
<div class="bootstrap-iso">
	<div class="container-fluid">
		<div class="row sign-in">
			<div class="col-md-3 col-sm-3 col-xs-12 offset-md-4 ">
				<form method="post" class = 'card p-3 bg-light'>
					<center><h2 > Sign In </h2></center>
					<div class="form-group ">
						<label class="control-label requiredField" for="email">
							Email
							<span class="asteriskField">
							*
						</span>
						</label>
						<input class="form-control" id="email" name="email" type="text"/>
					</div>
					<div class="form-group ">
						<label class="control-label requiredField" for="name1">
							Password
							<span class="asteriskField">
        *
       </span>
						</label>
						<input class="form-control" id="name1" name="name1" type="text"/>
					</div>
					<div class="form-group">
						<div>
							<button class="btn btn-primary " name="submit" type="submit">
								Sign in
							</button>
						</div>
					</div>
					<div class="create-account">
						<a href ="www.google.com">Create account?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>

