

<?php
$insert = false;
if(isset($_POST['class'])){
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
    $class = $_POST['class'];
    $From_place = $_POST['From_place'];
    $To_place = $_POST['To_place'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $Adult_no = $_POST['Adult_no'];
    $children_no = $_POST['children_no'];
	$sql = "INSERT INTO  `db`.`booking1`(`class`, `From_place`, `To_place`, `date1`, `date2`, `Adult_no`, `children_no`) VALUES ('$class','$From_place','$To_place','$date1','$date2','$Adult_no','$children_no');";

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
								<li class="active"><a href="booking2.php">Booking</a></li>
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
				
				

				<div class="background-wrapper" style="background-image: url(images/airline/aa.jpg);">
				
				<!--header-->

				<div class="container-fluid">
					<header>
						<h2>Book Your Flight</h2>
						<hr>
					</header>


					<!--panel-->
					<div class="col-sm-8 col-sm-offset-2">
						<div class="panel-group">
						  	<div class="panel panel-default panel-transparent">
						    	<div class="panel-heading">
						    		<legend style="text-align: center;">Flight Information</legend>
						    	</div>
								<?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the  trip</p>";
        }
       ?>
						    	<div class="panel-body">
								<form action ="" method="post"> 
						    		<div class="input-group">
										<label for="class">Class</label>
										<select class="form-control trans-input-area" id="class" name ="class">
									    <input type = " text" class = "form-control" id = "class" name = "class">
										<option>Economy</option>
										<option>Business</option>
										<option>First</option>
										</select>
										<a href="#"></a>
									</div>
									<form class="form-inline">
										<br>
										<div>
											<div class="input-group">
												<label for="from">From</label>
												<input type="text" class="form-control trans-input-area" placeholder="Origin" name="From_place"  id="from" required >
											</div>
											<div class="input-group">
												<label for="to">To</label>
												<input type="text" class="form-control trans-input-area" placeholder="Destination" name="To_place" id="to" required name ="To">
											</div>
										</div>
										<br>
										<div>
											<div class="input-group">
												<label for="Departure">Departure Date</label>
												<input type="date" class="form-control trans-input-area" name="date1" required>
											</div>
											<div class="input-group">
												<label>Return Date</label>
												<input type="date" class="form-control trans-input-area" name="date2" id="Return" >
											</div>
										</div>
										<br>
										<div>
											<div class="input-group">
												<label for="Adults">Adults</label>
												<input type="number" class="form-control trans-input-area" id="Adults" value="1" name="Adult_no" min="1" required>
											</div>
											<div class="input-group">
												<label>children_no</label>
												<input type="number" class="form-control trans-input-area" id="children_no" value="0" name="children_no" min="0">
											</div>
										</div>
										<br>
										<div class="input-group-btn" style="text-align: right !important; ">
										<!-- <input name="Submit" type="submit" value="continue" class="Button3"  onClick="location:/booking2.php"> -->
										<button id="submit" class="btn btn-primary trans-input-area" type="submit" style="width: 30%"> <a href="booking2.php">Booking</a> </button>
									</form>
										<br>
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
					&copy; My-Airline. All rights reserved.
				</div>
			</footer>

	</body>
</html>