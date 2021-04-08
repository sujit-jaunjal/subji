
<?php

include('config.php');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {



    $query = "SELECT * FROM `product2` ORDER BY id DESC";
    $query1 = "SELECT name FROM `product1` ORDER BY id DESC";


    $urlmsg = "SELECT * FROM `url_message` ORDER BY id DESC";

    $final = array();
    $product = array();

    $out = mysqli_query($con, $query);
    $out1 = mysqli_query($con,$query1);
    $urmsg = mysqli_query($con, $urlmsg);


    if ((mysqli_num_rows($out) > 0) && (mysqli_num_rows($out1) > 0)) {
        while (($row = mysqli_fetch_assoc($out)) && ($row1 = mysqli_fetch_assoc($out1))) {
            $final[] = array_merge($row,$row1);
        }
    }

    if ((mysqli_num_rows($urmsg) > 0)) {
        while (($row = mysqli_fetch_assoc($urmsg))) {
            $umsg = $row['message'];
            $msg = explode(" ",$umsg);
                
            $product['title']=$msg[2];
            $product['sts']='';
            $product['state']='';
            $product['price']=$msg[8];
            $product['weight']=$msg[6];
            $product['productdes']='';
            $product['id']='';
            $product['name']=$msg[4];

            array_push($final, $product);

        }
    }

    $result= array_slice($final,-4,4);

   $json = json_encode($result);
     echo $json;
}
?>