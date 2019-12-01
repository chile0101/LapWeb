<?php
	include "action.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<title>Your Website</title>
	<link rel="stylesheet" href="" type="text/css" />
	<script type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Enter Medicine Deatails</div>
						<div class="panel-body">
						<form method="post" action="action.php">
							<table class="table table-hover">
								<tr>
									<td>Name</td>
									<td><input type="text" class="form-control" name="name" placeholder="Enter name"></td>
								</tr>
								<tr>
									<td>Year</td>
									<td><input type="text" class="form-control" name="year" placeholder="Enter Year"></td>
								</tr>
								<tr>
									<td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit" value="Store"></td>
								</tr>
							</table>
						</form>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>
	</div>


</body>
</html>