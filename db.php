<?php
    $class = $_POST['class'];
    $From = $_POST['From'];
    $To = $_POST['To'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $Adult_no = $_POST['Adult_no'];
    $children_no = $_POST['children_no'];

    //connecting the database to page
    $server = " localhost";
    $username = "root";
    $password = " ";
    $db = 'airline_r';

    $con = new mysqli_connect($server,$username,$password,$db);

    if(!$con){
        die("connection to this database ".mysqli_connect_error());
    }
    else{
        //$stmt = $this->airline_r->con
        $stmt = $con->prepare(" 
		INSERT INTO booking ( `Class`, `From`, `To`, `date1`, `date2`, `Adult_no`, `children_no`)
         VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->bind_param('sssiiii', $class, $From ,$To ,$date1 ,$date2 ,$Adult_no ,$children_no);
        $stmt->execute(); 
        echo "Connection is connected to DB";
    }
?>