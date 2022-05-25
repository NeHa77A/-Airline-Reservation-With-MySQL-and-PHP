<?php
 $insert = false;
 if(isset($_POST['first_name'])){
	 // Set connection variables
	 $server = "localhost";
	 $username = "root";
	 $password = "Neha7777";
 
	 // Create a database connection
	 $con = mysqli_connect($server, $username, $password);
 
	 // Check for connection success
	 if(!$con){
		 die("connection to this database failed due to" . mysqli_connect_error());
	 }
	 // echo "Success connecting to the db";
 
	 // Collect post variables
	 //error_reporting(0);
	 $first_name = $_POST['first_name'];
	 $Last_name = $_POST['Last_name'];
	 $Number = $_POST['Number'];
	 $Email= $_POST['Email'];
	 $cname = $_POST['cname'];
	 $clname = $_POST['clname'];
	 $DOB = $_POST['DOB'];
	 $sql = "INSERT INTO  `db`.`booking2`(`first_name`, `Last_name`, `Number`, `Email`, `cname`, `clname`, `DOB`) VALUES ('$first_name','$Last_name','$Number','$Email',' $cname','$clname','$DOB ');";

	 // Execute the query
	 if($con->query($sql) == true){
		 // echo "Successfully inserted";
 
		 // Flag for successful insertion
		 $insert = true;
	 }
	 else{
		 echo "ERROR: $sql <br> $con->error";
	 }
 
	 // Close the database connection
	 $con->close();
 }


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Booking</title>
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
		label{
			color: white;
		}
	
	
	</style>
	<body>
				<nav class="navbar navbar-inverse" style="border-radius:0px !important; margin:0;border: 0">
					<div class="container-fluid">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>                       
						  </button>
						  <a class="navbar-brand" href="index.php">My-Airline</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li class="active"><a href="booking.php">Booking</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="contactus.php">Contact Us</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></a></li>
							</ul>
							
							<form class="navbar-form navbar-right">
							  <div class="input-group">
							    <input type="text" class="form-control" placeholder="Search">
							    <div class="input-group-btn">
							      <button class="btn btn-default" type="submit">
							        <i class="glyphicon glyphicon-search"></i>
							      </button>
							    </div>
							  </div>
							</form>
						</div>	
					</div>
				</nav>
				
				

				<div class="background-wrapper" style="background-image: url(images/airline/9.jpg);">
				
				<!--header-->

				<div class="container-fluid">
					<header>
						<h2></h2>
						
					</header>


					<!--panel-->
					<div class="col-sm-8 col-sm-offset-2">
						<div class="panel-group">
						  	<div class="panel panel-default panel-transparent">
						    	<div class="panel-heading">
						    		<legend style="text-align: center;">Passengers Information</legend>
						    	</div>						
								<?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the  trip</p>";
        }
       ?>

						    	<div class="panel-body">
						    		<header>
						    	<h2>Adults Details:</h2>
						    	<hr>
						    </header>
						    		<div class="input-group">
										<label for="class">Salutation</label>
										<select class="form-control trans-input-area">
										<option>Mr.</option>
										<option>Mrs.</option>
										<option>Ms.</option>
										</select>
									</div>
									<form class="form-inline">
										<br>
										<div>
											<div class="input-group">
												<label>First name</label>
												<input type="text" class="form-control trans-input-area" placeholder="First name" name= "first_name" required>
											</div>
											<div class="input-group">
												<label>Last name</label>
												<input type="text" class="form-control trans-input-area" placeholder="Last name" name="Last_name" required>
											</div>
										</div>
										<br>
										<div>
											<div class="input-group">
												<label>Phone</label>
												<select class="form-control trans-input-area">
												<option>Home</option>
												<option>Mobile</option>
												<option>Business</option>
												</select>
											</div>
											<div class="input-group">
												<label>Phone Country Code</label>
												<input type="number" class="form-control trans-input-area" placeholder="+00" required>
											</div>
											<div class="input-group">
												<label>Number</label>
												<input type="number" placeholder="123456789" class="form-control trans-input-area" name= "Number" required>
											</div>
										</div>
										<br>
										<div>
											<div class="input-group">
												<label>Email</label>
												<input type="email" placeholder="example@email.com" class="form-control trans-input-area" name= "Email"required>
											</div>
											
										</div>
										<br>
										<br>
										<hr>

									</form>
							    	<header>
									<option>
										<h2>Children Details:</h2>
							    	<hr>
							    </header>
									<form class="form-inline">
										<br>
										<div>
											<div class="input-group">
												<label>First name</label>
												<input type="text" class="form-control trans-input-area" placeholder="First name" name="cname"  required>
											</div>
											<div class="input-group">
												<label>Last name</label>
												<input type="text" class="form-control trans-input-area" placeholder="Last name" name="clname" required>
											</div>
										</div>
										<br>
										<div>
											<div class="input-group">
												<label>Date of Birth<small>(less than 12 years)</small></label>
												<input type="date" class="form-control trans-input-area" name="DOB" required>
											</div>
									</option>
							    	
											
										</div>
										<br>
										<br>
									<div class="input-group-btn">
									<button class="btn btn-primary trans-input-area" href="booking.php" style="width: 40%; float: left;"><a href="booking.php" style="color: white">back</a></button>
									<button class="btn btn-primary trans-input-area" href="payement.php" type="submit" style="width: 40%; float:right;" ><a href="itineary.php" style="color: white">Continue</a></button>

									</div>

									</form>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Footer -->
			<footer id="footer">
				<div class="container-fluid">
					<ul class="icons">
						<li><a href="#" class="fa fa-twitter" style="color: grey"></a></li>
						<li><a href="#" class="fa fa-facebook" style="color: grey"></a></li>
						<li><a href="#" class="fa fa-instagram" style="color: grey"></a></li>
						<li><a href="#" class="fa fa-envelope" style="color: grey"></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Airline-X. All rights reserved.
				</div>
			</footer>

	</body>
</html>


