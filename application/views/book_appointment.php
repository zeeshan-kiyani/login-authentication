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
			margin-top: 10%;
		}
        .bg-body{
			background-color: #f8f9fa!important;
		}
	</style>
</head>

<body class="bg-body">
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Book Appointment</a>
  <form class="form-inline my-2 my-lg-0">
      <ul>
          <li>
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      </ul>
        Dropdown
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">Action</button>
        <button class="dropdown-item" type="button">Another action</button>
        <button class="dropdown-item" type="button">Something else here</button>
    </div>
    </div>
          </li>
  <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>   
      </ul>
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form>
</nav>
	<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
	<span class="border border-dark">
		<div class="bootstrap-iso bg-body">
			<div class="container-fluid">
				<div class="row sign-up">
					<div class="col-md-4 col-sm-4 col-xs-12 offset-md-4">
						<form method="post" class='card p-3'>

							<h2> Book Appointment </h2>
							<div class="form-group ">
								<label class="control-label requiredField" for="name">
									Select Doctor
									<span class="asteriskField">
										*
									</span>
								</label>
								<input class="form-control" id="name" name="name" type="text" />
							</div>
							<div class="form-group ">
                                <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label requiredField" for="name1">
                                        Age
                                        <span class="asteriskField">
                                            *
                                        </span>
                                    </label>
                                    <input class="form-control" id="name1" name="name1" type="text" />
                                </div>
                                <div class="col-md-6">
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
                                </div>
							</div>
							<div class="form-group ">
								
								
							</div>
                            <div class="form-group"> 
                                <input class="form-control" id="name1" name="name1" type="Date" />
                            </div>
							<div class="form-group">
								<div>
									<a class="btn btn-primary" href="<?php echo base_url() ?>index.php/Login/code_authentication">
										Sign Up
									</a>
								</div>
							</div>

						</form>
					</div>

				</div>
			</div>
		</div>



</body>

</html>