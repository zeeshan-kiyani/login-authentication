<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<style type="text/css">
		.red {
			width: 90%;
			border: 1px solid black;
			margin-right: 10px;
			height: 6rem;
			background-color: red;
		}

		.blue {
			border: 1px solid black;
			margin-right: 10px;
			width: 90%;
			height: 6rem;
			background-color: blue;
		}

		.green {
			border: 1px solid black;
			margin-right: 10px;
			width: 3rem;
			height: 6rem;
			background-color: green;
		}

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

		.color-pattern {
			position: relative;
			margin-top: 15%;
		}

		.bg-body {
			background-color: #f8f9fa !important;
		}
	</style>
</head>

<body class="bg-body">
	<div class="bootstrap-iso bg-body">
		<div class="container-fluid">
			<div class="row color-pattern">
				<div class="col-md-6 col-sm-6 col-xs-12 offset-md-3">
					<form method="post" class='card p-3'>
						<div class="form-group" id="div_ckbox">
							<h2>Step 2...</h2>
							<h2> Create Your account </h2>
							<label class="control-label requiredField" for="ckbox">
								Select the pattren
								<span class="asteriskField">
									*
								</span>
							</label>
						</div>
						<div class="row">
							<div onclick="inputPattern('red')" class="red col-md-2 offset-md-3"></div>
							<div onclick="inputPattern('green')" class="green col-md-2"></div>
							<div onclick="inputPattern('blue')" class="blue col-md-2"></div>
						</div>
						<div class="form-group ">
							<label class="control-label requiredField" for="pattren_code">
								Color Pattern Code
								<span class="asteriskField">
									*
								</span>
							</label>
							<input class="form-control" id="pattren_code" name="pattern_code" type="password" required />
						</div>
						<div class="form-group">
							<div>
							<input type="submit" name="save" class="btn btn-primary" value="Save Question"/>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script type='text/javascript'>
function inputPattern(val){
	if(val == 'red'){
		document.getElementById("pattren_code").value += "red123";
	}
	else if(val == 'blue'){
		document.getElementById("pattren_code").value += "blue123";

	}
	else if(val == 'green'){
		document.getElementById("pattren_code").value += "green123";

	}
}
</script>

</html>