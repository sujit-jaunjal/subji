<?php
 $sender = $_REQUEST["sender"];
 $content = $_REQUEST["content"];
 
include('config.php');

 // Example: Writing to a file //
 // File format: sender, content //
 //$fp = fopen('data.csv', 'a');
 //fwrite($fp, ".$sender.", ".$content."\r\n"");
 //fclose($fp);
 
 // Example: Writing to a database //
 if (mysqli_connect_error()) { die('Connect Error: '.mysqli_connect_errno().' - '.mysqli_connect_error()); };
 $sql = "INSERT INTO url_message (sender, message) values(";
 $sql .= "'".mysqli_real_escape_string($con, $sender)."', ";
 $sql .= "'".mysqli_real_escape_string($con, $content)."')";
  echo $sql ;
//  mysqli_query($con,$sql);
 
?>