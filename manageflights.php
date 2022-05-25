<?php
include 'connection.php';


?>
<!doctype html>
<html>

	<head>
		<title>Manage Flights</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Poppins">

        <link rel="stylesheet" href="mycss.css">
        <script type="text/javascript" src="myjs.js"></script>
    </head>

	<style type="text/css">
		.affix{
			top:5rem;
		}
		
		body{
position: relative;
		};
		
	</style>
	<body data-spy="scroll" data-target="#myscroll">
				<nav class="navbar navbar-inverse" data-spy="affix"  style="border-radius:0px !important; margin:0;border: 0 ; width: 100%;top:0;z-index: 9999 !important">
					<div class="navbar-header">
						  <a class="navbar-brand" href="index.php">My-Airline</a>
						</div>
						<div class="nav navbar-nav navbar-right">
						<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
									<span class="caret"></span></a>
								<ul class="dropdown-menu" style="padding: 1rem 2rem 1rem 2rem; text-align: center;" >
									<li><a href="#"><b>Admin Name</b></a></li>
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
<!--container strat-->

		<div class="container" data-spy="affix" style="margin: 0;bottom: 0;float: left;top:5rem;width: 20%;height:100%; background-color: #222222">

		  <ul class="nav nav-pills nav-stacked" style="border-radius: 0">
		    <li>
		    	<a href="#" id="m1">Dashboard</a>
		    	<ul id="sub1" style="padding: 0 0 0 0">
		    		<div class="list-group">
					  <li><a href="home.php" class="list-group-item">Home</a></li>
					  <li><a href="user.php" class="list-group-item">Users</a></li>
					</div>
				</ul>
		    </li>
		    <li>
		    	<a href="#" id="m2">Flight Schedule</a>
			    <ul id="sub2" style="padding: 0 0 0 0; display: none;">
			    	<div class="list-group" >
					  <a href="newflight.php" class="list-group-item">Add new Flight</a>
					  <a href="manageflights.php" class="list-group-item">Manage flights</a>
					</div>
			    </ul>
			</li>
			
			<li>
				<a href="#" id="m3">Airbus</a>
			    <ul id="sub3" style="padding: 0 0 0 0; display: none;">
			    	<div class="list-group" >
					  	<a href="newAirbus.php" class="list-group-item">Add new airbus</a>
					  	<a href="newAirbus.php" class="list-group-item">Manage Airbus</a>
					</div>
			    </ul>
			</li>
		    <li>
		    	<a href="#" id="m4">Accounts</a>
		    	<ul id="sub4" style="padding: 0 0 0 0; display: none;">
		 			<div class="list-group">
					  	<a href="accounts.php" class="list-group-item">Create new account</a>
					  	<a href="accounts.php" class="list-group-item">Password Reset</a>
					</div>
		    	</ul>
		    </li>
		  </ul>
		</div>


<!--scrooll container start-->

			<div id="#myscroll" class="container" style="margin-left: 0;margin-top: 5rem; float: right; width:80%; padding: 0 5rem 0 5rem">
			<h2>Manage Flights</h2>
			 <hr>
				<div>
					<button class="btn btn-primary"><a href="newflight.php" style="color: white"><i class="fa fa-plus"></i> New Flight</a></button>
				</div>
				<br>
			  	<table class="table table-striped table-hover">
				    <thead>
					    <tr>
					    	<th>#</th>
					        <th>FlightNo</th>
					        <th>From</th>
					        <th>To</th>
					        <th>Departure Date</th>
					        <th>Time</th>
					        <th>Capacity</th>
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
					        <td>200</td>
					        <td>
						  	<a href=""><i class="fa fa-pencil"></i></a>
						  	<a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
					  		</td>
					    </tr>
					    <tr>
					    	<td>2</td>
					    	<td>1023</td>
					        <td>Lahore</td>
					        <td>London</td>
					        <td>20/10/2017</td>
					        <td>04:50 pm</td>
					        <td>300</td>
					        <td>
						  	<a href=""><i class="fa fa-pencil"></i></a>
						  	<a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
					  		</td>
					    </tr>
					    <tr>
					    	<td>3</td>
					    	<td>1955</td>
					        <td>Lahore</td>
					        <td>Canada</td>
					        <td>20/10/2017</td>
					        <td>10:30 pm</td>
					        <td>150</td>
					        <td>
						  	<a href=""><i class="fa fa-pencil"></i></a>
						  	<a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
					  		</td>
					    </tr>
				    </tbody>
			  </table>

				  <ul class="pagination">
					  <li ><a href="#">&laquo;</a></li>
					  <li class="active"><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					  <li><a href="#">&raquo;</a></li>
					</ul>
			</div>

				<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3 id="myModalLabel">Delete Confirmation</h3>
						</div>
						<div class="modal-body">
							<p class="error-text"><i class="fa fa-warning modal-icon"></i> Are you sure you want to delete the Flight?<br>This cannot be undone.</p>
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










<script type="text/javascript">
			$("#m1").click({param1:"#sub1",param2:"#sub2",param3:"#sub3",param4:"#sub4"},navbar_movment);
	$("#m2").click({param1:"#sub2",param2:"#sub1",param3:"#sub3",param4:"#sub4"},navbar_movment);
	$("#m3").click({param1:"#sub3",param2:"#sub1",param3:"#sub2",param4:"#sub4"},navbar_movment);
	$("#m4").click({param1:"#sub4",param2:"#sub1",param3:"#sub2",param4:"#sub3"},navbar_movment);

		</script>