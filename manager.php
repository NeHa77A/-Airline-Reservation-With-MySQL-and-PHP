<?php
include 'connection.php';


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Manager</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="myjs.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Poppins">

		<link rel="stylesheet" href="mycss.css">
		<script type="text/javascript" src="myjs.js"></script>
	</head>

	<body>

				<nav class="navbar navbar-inverse" style="border-radius:0px">
					<div class="navbar-header">
						  <a class="navbar-brand" href="index.php">My-Airline</a>
						</div>
						<div class="nav navbar-nav navbar-right">
						<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
									<span class="caret"></span></a>
								<ul class="dropdown-menu" style="padding: 1rem 2rem 1rem 2rem; text-align: center;" >
									<li><a href="#"><b>Manager Name</b></a></li>
									<hr>
									<li><a href="#">View Profile</a></li>
									<li><a href="#">Settings</a></li>
									<hr>
									<li><a href="#">Logout</a></li>
								</ul>
						</li>
						<ul class="nav navbar-nav navbar-right" style="padding: 0 3rem 0 0">
								<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</div>
					</div>
				</nav>
			<div class="container-fluid" style="width: 100%">
			<h2>Flights</h2>
		  	<hr>
			  	<table class="table table-striped table-hover">
				    <thead>
					    <tr>
					    	<th>#</th>
					        <th>FlightNo</th>
					        <th>From</th>
					        <th>To</th>
					        <th>Departure Date</th>
					        <th>Time</th>
					        <th>Class</th>
					        <th>Capacity</th>
					        <th>Fare</th>
					    </tr>
				    </thead>
				    <tbody>
					    <tr>
					    	<td>1</td>
					    	<td>4091</td>
					        <td>Lahore</td>
					        <td>Karachi</td>
					        <td>20/10/2017</td>
					        <td>04:30 pm</td>
					        <td>First<br>Business<br>Economy</td>
					        <td>200<br>200<br>200</td>
					        <td>4000<br>3000<br>2000</td>
					        
					        <td>
						  	<div class="btn-group-vertical">
								<button class="btn btn-primary">Approve</button>
								<button class="btn btn-primary">Reject</button>
							</div>
					  		</td>
					    </tr>
					    <tr>
					    	<td>2</td>
					    	<td>1023</td>
					        <td>Lahore</td>
					        <td>London</td>
					        <td>20/10/2017</td>
					        <td>04:50 pm</td>
					        <td>First<br>Business<br>Economy</td>
					        <td>200<br>200<br>200</td>
					        <td>4000<br>3000<br>2000</td>
					        <td>
						  	<div class="btn-group-vertical">
								<button class="btn btn-primary">Approve</button>
								<button class="btn btn-primary">Reject</button>
							</div>
					  		</td>
					    </tr>
					    <tr>
					    	<td>3</td>
					    	<td>1955</td>
					        <td>Lahore</td>
					        <td>Canada</td>
					        <td>20/10/2017</td>
					        <td>10:30 pm</td>
					        <td>First<br>Business<br>Economy</td>
					        <td>200<br>200<br>200</td>
					        <td>4000<br>3000<br>2000</td>
					        <td>
						  	<div class="btn-group-vertical">
								<button class="btn btn-primary">Approve</button>
								<button class="btn btn-primary">Reject</button>
							</div>
					  		</td>
					    </tr>
				    </tbody>
			  </table>

				  <ul class="pagination">
					  <li><a href="#">&laquo;</a></li>
					  <li><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					  <li><a href="#">&raquo;</a></li>
					</ul>
				</div>
			</div>

				<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3 id="myModalLabel">Delete Confirmation</h3>
						</div>
						<div class="modal-body">
							<p class="error-text"><i class="fa fa-warning modal-icon"></i> Are you sure you want to delete the user?<br>This cannot be undone.</p>
						</div>
						<div class="modal-footer">
							<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
							<button class="btn btn-danger" data-dismiss="modal">Delete</button>
						</div>
					  </div>
					</div>
				</div>
	  
	</body>
</html>