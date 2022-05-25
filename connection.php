<?php

$username="root";
$password="Neha7777";
$server='localhost';
$db = 'db';

$con = mysqli_connect($server,$username,$password,$db);

if($con){



  ?>
  <script>
      alert=('connection Successful');
      </script>

      <?php

}
else{
    die("no connection ". mysqli_connect_error());

}
?>