
<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {

    $email = mysqli_real_escape_string($con,$_POST['email']);

    $password = mysqli_real_escape_string($con,$_POST['password']);


    $query = "SELECT fname,email,password,toggle,txtEmpPhone FROM `regpage` WHERE email='$email'";



    $out = mysqli_query($con, $query);


    $final = array();
    

    if ((mysqli_num_rows($out) > 0)) {
        while (($row = mysqli_fetch_assoc($out))) {
            $final = $row;
        }
    }

   

 //   echo $final;


    if($final['password'] == $password)
    {
        $_SESSION["email"] = $_POST['email'];
        $_SESSION["toggle"] = $final['toggle'];
        $_SESSION["txtEmpPhone"] = $final['txtEmpPhone'];
        $_SESSION["fname"] = $final['fname'];
    } 
    else{

        echo "Login Error !";
    }

    //  echo '<pre>'; print_r( $_SESSION["email"]); echo '</pre>';
    //echo $umsg;



//    $json = json_encode($final);
//     echo $json;
}
?>