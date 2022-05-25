<?php
include 'connection.php';


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>New Flight</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="myjs.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Poppins">

		<link rel="stylesheet" href="mycss.css">
		
	</head>
	
	<style type="text/css">
		.affix{
			top:5rem;
		}
		
		body{
position: relative;
		};

		label{
			color: white;
		}
		
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

			<!--background slide image-->
				<div class="background-wrapper" style="background-image: url(images/airline/b.jpg); width: 80%; height: 100%;  float: right;">
				
				<div id="#myscroll" class="container" style="margin-left: 0;margin-top: 5rem; float: right; width:100%; padding: 0 5rem 5rem 5rem">
					<header>
					<h1>Admin Name</h1>
			  		<hr>
			  		</header>
					<div style="width: 100%">
						<div class="panel-group">
						  	<div class="panel panel-default panel-transparent">
						    	<div class="panel-heading">
						    		<legend style="text-align: center; width: 100%">Profile Information</legend>
						    	</div>
						    	<div class="panel-body" style="width: 100%">
						    		<header>
						    		<br>
						    		<h3>SSID :</h2>
						    		<br>
						    		<h2>Date of Birth :</h2>
						    		<br>
						    		<h2>Phone :</h2>
						    		<br>
						    		<h2>Email :</h2>
						    		<br>
						    		<h2>Address :</h2>
						    		<br>
						    		</header>
								</div>
							</div>
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

		</script>s