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
	<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
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
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Appointment Management</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
	<a class="navbar-brand" href="#">Appointment  Management</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="d-flex">
		<a class="btn btn-primary btn-outline-light" href="<?php echo base_url()?>index.php/login/logout" data-auth-modal-tab="logout" data-mdb-dismiss="modal">Logout</a>
	</div>
</nav>
<div class="container" style="background-color: white;">
<h2>Appointment Listing</h2>
<table class="table table-hover" id="dataTables-example" width="100%">
	<thead class="thead-dark">
	<tr>
		<th>Id</th>
		<th>Doctor Name</th>
		<th>Patient Name</th>
		<th>Date</th>
		<th>Age</th>
		<th>Gender</th>	
	</tr>
	</thead>
	<tbody>
		<?php   $i=1;
		foreach($appoinments as $row)
		{
			echo"<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".'Yousha'."</td>";
			echo "<td>".$row->patient_id."</td>";
			echo "<td>".$row->appointment_date."</td>";
			echo "<td>".$row->age."</td>";
			echo "<td>".$row->gender."</td>";
			echo "</tr>";
			$i++;
		}
		?> 
	</tbody>
</table>
</div>


</body>

</html>
<!-- <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> -->
<script>
	$(document).ready( function () {
    $('#dataTables-example').DataTable();
} );
	// $(document).ready( function () {
	// 	$('#dataTables-example').DataTable();
	// } );
</script>
