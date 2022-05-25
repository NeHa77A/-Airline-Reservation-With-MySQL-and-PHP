
<?php
include 'connection.php';
?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>Itineary</title>
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
                <nav class="navbar navbar-inverse" style="border-radius:0px !important; margin:0;border: 0">
                    <div class="container-fluid">
                        <div href="index.php" style="text-align: center;color: white">
                          <h2>My-Airline</h2>
                        </div>
                    </div>
                </nav>
                


                <div class="background-wrapper" style="background-image: url(images/airline/ii.jpg);">
                


                <div class="container-fluid">
                <header>
                    <h2>Flight Itineary</h2>
                    <hr>
                </header>
                <div class="col-sm-12 col-sm-offset-0">
                    <div class="panel-group">
                        <div class="panel panel-default panel-transparent">
                            <div class="panel-heading">
                                <legend style="text-align: center;color: black">Departure Information</legend>
                            </div>

                            <div class="panel-body">
                                <table class="table table-hover" style="color: black; font-size: 20px">
                                    <thead>
                                        <tr>
                                            <th>Passengers</th>
                                            <th>Flight#</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Neha</td>
                                            <td>7777</td>
                                            <td>India</td>
                                            <td>United states</td>
                                            <td>September, 15</td>
                                            <td>04:30 pm</td>
                                        </tr>
                                        <tr>
                                            <td>sdf</td>
                                            <td>4055</td>
                                            <td>India</td>
                                            <td>England</td>
                                            <td>April ,30</td>
                                            <td>2:30 pm</td>
                                        </tr>
                                        <tr>
                                            <td>Vaishnavi</td>
                                            <td>4056</td>
                                            <td>India</td>
                                            <td>united states</td>
                                            <td>may ,3</td>
                                            <td>5:30 pm</td>
                                       
                                        </tr>
                                    </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>



                <div class="col-sm-12 col-sm-offset-0">
                    <div class="panel-group">
                        <div class="panel panel-default panel-transparent">
                            <div class="panel-heading">
                                <legend style="text-align: center; color: black">Return Information</legend>
                            </div>

                            <div class="panel-body">
                                <table class="table table-hover"  style="color: black; font-size: 20px">
                                    <thead>
                                        <tr>
                                            <th>Passengers</th>
                                            <th>Flight#</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Neha</td>
                                            <td>7777</td>
                                            <td>India</td>
                                            <td>United states</td>
                                            <td>September, 15</td>
                                            <td>04:30 pm</td>
                                        </tr>
                                        <tr>
                                            <td>sdf</td>
                                            <td>4055</td>
                                            <td>India</td>
                                            <td>England</td>
                                            <td>April ,30</td>
                                            <td>2:30 pm</td>
                                    
                                        </tr>
                                        <tr>
                                            <td>Vaishnavi</td>
                                            <td>4056</td>
                                            <td>India</td>
                                            <td>united states</td>
                                            <td>may ,3</td>
                                            <td>5:30 pm</td>
                                       
                                        </tr>
                                    </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <dir class="col-sm-12 col-sm-offset-0">
                    <div class=" trans-input-area well" style=" width: 100%; padding: 1rem  ;text-align:center;"><h2>Total Cost:2,00,000 Rs.</h2></div>

                </dir>
                
                <br>
                <br>

                <div class="col-sm-12 col-sm-offset-0">
                <button class="btn btn-primary btn-block trans-input-area" href="payement.php" type="submit"  style="height: 7rem; ;text-align: center;"  ><a href="payement.html" style="color:white"><h4>Proceed to Payment</h4></a></button>
                </div>
            <br>
            <br>
            </div>

            <br>
            <br>
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










