<?php

include('config.php');


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  else
  {

    $email = mysqli_real_escape_string($con,$_POST['email']);
          
    $password = mysqli_real_escape_string($con,$_POST['password']);
    

    $query = "SELECT `email`, `password` FROM `regpage` WHERE email='$email' AND password='$password'";
    
    $result = mysqli_query($con,$query);

            if( mysqli_num_rows($result) > 0 )
            {
             echo "succes";
            }
            else
            {
                echo "not";
            }


  
  }
?>