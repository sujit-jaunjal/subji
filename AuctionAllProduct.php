
<?php


include('config.php');

    $query = "SELECT * FROM `AddAuction` WHERE txn_suc='0'";
    
    $final = array();

    $out = mysqli_query($con, $query);
    


    if ((mysqli_num_rows($out) > 0)) {
        while (($row = mysqli_fetch_assoc($out))) {
            $final[] = array_merge($row);
        }
    }
    
    $json = json_encode($final);
    echo $json;

?>