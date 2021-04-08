<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {


    $name = $_SESSION["fname"];
    $email =  $_SESSION["email"];
  

    $query = "SELECT * FROM `product2` WHERE fname='$name' && txn_succ!='1'";
    $query1 = "SELECT name FROM `product1` WHERE email='$email'";
    
    
   

    $final = array();
    

    $out = mysqli_query($con, $query);
    $out1 = mysqli_query($con,$query1);
    

    $final0 = array();

    if ((mysqli_num_rows($out) > 0) && (mysqli_num_rows($out1) > 0)) {
        while (($row = mysqli_fetch_assoc($out)) && ($row1 = mysqli_fetch_assoc($out1))) {
            $final[] = array_merge($row,$row1);
        }
    }
    // echo '<pre>'; print_r($final); echo '</pre>';
    //echo $umsg;

   $json = json_encode($final);
    echo $json;
}
?>