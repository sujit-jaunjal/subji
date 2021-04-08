<?php
include('config.php');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} else {

  $AuctionDate = mysqli_real_escape_string($con, $_POST['AuctionDate']);

  $sts0 = mysqli_real_escape_string($con, $_POST['sts0']);

  $title = mysqli_real_escape_string($con, $_POST['title']);

  $sts = mysqli_real_escape_string($con, $_POST['stt']);

  $state = mysqli_real_escape_string($con, $_POST['city']);

  $price = mysqli_real_escape_string($con, $_POST['price']);

  $weight = mysqli_real_escape_string($con, $_POST['weight']);

  $productdes = mysqli_real_escape_string($con, $_POST['productdes']);

  $check = getimagesize($_FILES["image"]["tmp_name"]);
  $img = '';
  
  if($check !== false) {
    $data = base64_encode(file_get_contents( $_FILES["image"]["tmp_name"] ));
    
    $img = "data:".$check["mime"].";base64,".$data;

  } else {
    echo "File is not an image.";
  }

  if($img != '') {
    $stmt = mysqli_stmt_init($con);
    if (mysqli_stmt_prepare($stmt, 'INSERT INTO `images`(`image`) VALUES (?);')) {
      mysqli_stmt_bind_param($stmt, "s", $img);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_bind_result($stmt, $district);
      echo $district;
      mysqli_stmt_fetch($stmt);
      mysqli_stmt_close($stmt);
    }
    $stmt2 = mysqli_stmt_init($con);
    if(mysqli_stmt_prepare($stmt2, 'INSERT INTO `addauction`(`type`, `name`, `state`, `city`, `price`, `weight`, `productdes` , `AuctionDate`) VALUES (?,?,?,?,?,?,?,?);')) {
      mysqli_stmt_bind_param($stmt2, "ssssssss", $sts0, $title, $sts, $state, $price, $weight, $productdes, $AuctionDate);
      mysqli_stmt_execute($stmt2);
      mysqli_stmt_close($stmt2);
    }

    // $query = "INSERT INTO `images`(`image`) VALUES ('$img');";
    // $query .= "INSERT INTO `AddAuction`(`type`, `name`, `state`, `city`, `price`, `weight`, `productdes` , `AuctionDate`) VALUES ('$sts0','$title','$sts','$state','$price','$weight','$productdes','$AuctionDate');";
    
    // // echo $query;
    // if(mysqli_ping($con)) {
    //   echo "Con is ok";
    // }

    // $result = mysqli_multi_query($con, $query);
    // echo $result;
    // if ($result) {
    //   do {
    //       // grab the result of the next query
    //       if (($result = mysqli_store_result($con)) === false && mysqli_error($con) != '') {
    //           echo "Query failed: " . mysqli_error($con);
    //       }
    //   } while (mysqli_more_results($con) && mysqli_next_result($con)); // while there are more results
    // } else {
    //     echo "First query failed..." . mysqli_error($con) . mysqli_errorno($con);
    // }

    echo $sts0;

  } else {
    echo false;
  }



}
