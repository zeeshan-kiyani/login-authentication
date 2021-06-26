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
	</style>
</head>
<body>
<div class="bootstrap-iso">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 offset-md-3">
				<form method="post" class = 'card p-3 bg-light'>
					<div class="form-group" id="div_ckbox">
						<label class="control-label requiredField" for="ckbox">
							Select the pattren
							<span class="asteriskField">
        *
       </span>
						</label>
						<div class=" ">
							<label class="checkbox-inline">
								<input name="ckbox" type="checkbox" value="Red"/>
								Red
							</label>
							<label class="checkbox-inline">
								<input name="ckbox" type="checkbox" value="Blue"/>
								Blue
							</label>
							<label class="checkbox-inline">
								<input name="ckbox" type="checkbox" value="Green"/>
								Green
							</label>
						</div>
					</div>
					<div class="form-group ">
						<label class="control-label requiredField" for="pattren_code">
							Color Pattern Code
							<span class="asteriskField">
        *
       </span>
						</label>
						<input class="form-control" id="pattren_code" name="pattren_code" type="text"/>
					</div>
					<div class="form-group">
						<div>
							<button class="btn btn-primary " name="submit" type="submit">
								Submit
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>

