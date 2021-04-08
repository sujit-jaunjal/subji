<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {

    $email =  $_SESSION["email"];

    $query = "SELECT * FROM `addauction` WHERE seller='$email' && txn_suc='0'";

    $final = array();
    
    $out = mysqli_query($con, $query);

    if ((mysqli_num_rows($out) > 0)) {
        while (($row = mysqli_fetch_assoc($out))) {
            $final[] = $row;
        }
    }
    // echo '<pre>'; print_r($final); echo '</pre>';
    //echo $umsg;

   $json = json_encode($final);
    echo $json;
}
?>