<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {

    $email =  $_SESSION["email"];

    $query = "SELECT * FROM `product2` WHERE buyer='$email'";
    $query1 = "SELECT name FROM `product1`";
   

    $final = array();
    

    $out = mysqli_query($con, $query);
    $out1 = mysqli_query($con,$query1);


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