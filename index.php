<?php
include 'connection.php'; 
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>My-Airline</title>
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
	
	<body>
				<nav  style="border-radius:0px !important; margin:0;border: 0">
					<div class="container-fluid">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>                       
						  </button>
						  <a class="navbar-brand" href="index.php">My-Airline</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="booking.php">Booking</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="contactus.php">Contact Us</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
				

				<!--carousal-->
				
					<div id="myCarousel" class="carousel slide" data-ride="carousel" >
						<!-- Indicators -->
						<ol class="carousel-indicators">
							  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							  <li data-target="#myCarousel" data-slide-to="1"></li>
							  <li data-target="#myCarousel" data-slide-to="2"></li>
							  <li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner img-responsive" style="max-height: 620px" >
							<div class="item active">
								<img src="images/airline/b.jpg">
								<div class="carousel-caption">
									<p>Welcome to</p>
									<hr style="width:40%">
									<h2>My-Airline</h2>
								</div>
							</div>

							  <div class="item">
								<img src="images/airline/3.jpg">
								<div class="carousel-caption">
									<p>Come fly with us!</p>
									<hr style="width:40%">
									<h2>Book your flight</h2>
								</div>
							  </div>
							
							  <div class="item">
								<img src="images/airline/6.jpg">
								<div class="carousel-caption">
									<p>Why choose us!</p>
									<hr style="width:40%">
									<h2>Luxurious & Safest</h2>
								</div>
							  </div>
							  
							  <div class="item">
								<img src="images/airline/New folder (2)/gg.jpg">
								<div class="carousel-caption">
									<p>Have any question?</p>
									<hr style="width:40%">
									<h2>Contact Us</h2>
								</div>
							  </div>
						</div>
					</div>	
				</nav>



				<!--3tabs-->

				<div class="row" style="padding: 5rem ;margin: 0; text-align: center;">
			    	<div class="col-sm-4">
			       		<div class="thumbnail" href="booking.php">
				          		<img src="images/airline/New folder/1.jpg" style="width:100%">
			      		</div>
			      	</div>
			    	<div class="col-md-4">
			      		<div class="thumbnail" href="contactus.php">
				          		<img src="images/airline/d.jpg" style="width:100%">
				          		
			      		</div>
			    	</div>
			    	<div class="col-md-4">
			      		<div class="thumbnail" href="aboutus.php">
				          		<img src="images/airline/a1.jpg" style="width:100%;height: 23.5rem">
				            	
			      		</div>
			    	</div>
				</div>


			<!--background slide image-->
				<div class="background-wrapper" style="background-image: url(images/airline/b.jpg);">
			  		<div style="text-align: center; padding: 10rem; color:white">
			      		<h3>come fly with us to desired places & we'll take care of your comfort and safety</h3>
			      		<hr width="30%" align="center">
			      		<h1>Welcome to My-Airline</h1>
			    	</div>
				</div>


			<!-- Footer -->
			<footer id="footer">
				<div class="container-fluid">
					<ul class="icons">
						<li><a href="https://twitter.com/Nehav07" class="fa fa-twitter" style="color: grey"></a></li>
						<li><a href="https://www.facebook.com/profile.php?id=100060071497477" class="fa fa-facebook" style="color: grey"></a></li>
						<li><a href="https://www.instagram.com/neha_v07" class="fa fa-instagram" style="color: grey"></a></li>
						<!-- <li><a href="" class="fa fa-envelope" style="color: grey"></a></li> -->
					</ul>
				</div>
				<div class="copyright">
					&copy; My-Airline. All rights reserved.
				</div>
			</footer>







			  <!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog" style="padding: 10rem">
			    <div class="modal-dialog">
			    
				      <!-- Modal content-->
				    <div class="modal-content trans-input-area">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title" style="text-align:center;">Log In</h4>
				        </div>

				        <div class="modal-body form-group trans-input-area">
				        	<label><b>Email</b></label>
				      		<input type="text" class="form-control" placeholder="example@gmail.com" name="uname" required>
				      		<br>
				      		<label><b>Password</b></label>
				      		<input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
				        	<br>
				      		<button class="btn btn-block form-control" type="submit" style="background-color: grey; color: white"><a href="home.html"><b>Login</b></a></button>
				        </div>

				        <div class="modal-footer">
				         	 <button type="button" class="btn btn-block" data-dismiss="modal" style="background-color: grey;"><b>Cancel</b></button>
				        </div>
				    </div>
			      
			    </div>
			</div>
		<!--INSERT INTO `booking` (`Sr_no`, `Class`, `From_place`, `To_place`, `D_date`, `R_date`, `Adult_no`, `children_no`, `dt`) VALUES ('1', 'Business', 'India', 'United States', '2022-05-02', '2022-05-04', '1', '0', current_timestamp());-->

	</body>
</html>