<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} else {

  if (isset($_POST['log'])) {

    header("Location:login.php");
  }

  if (isset($_POST['submit'])) {

    $wel = "Registered Successfully !!";

    $err = "Already Registered ";

    $fname = $_POST['fname'];

    $lname = $_POST['lname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $txtEmpPhone = $_POST['txtEmpPhone'];

    $toggleswitch = $_POST['toggleswitch'];


    $validate = "SELECT fname FROM `regpage` WHERE email='$email'";

    if ($validate == null) {
      echo "<script type='text/javascript'>alert('$wel');</script>";
    } else {
      $query = "INSERT INTO `regpage`(`fname`, `lname`, `email`, `password`, `txtEmpPhone`, `toggle`) VALUES ('$fname','$lname','$email','$password','$txtEmpPhone','$toggleswitch')";
      // $query = "INSERT INTO `regpage`(`fname`, `lname`, `email`, `password`, `txtEmpPhone`, `toggle`) VALUES ('$fname','$lname','$email','$password','$txtEmpPhone',1)";
      mysqli_query($con, $query);

      echo "<script type='text/javascript'>alert('$err');</script>";
      header("Location:index.php");
    }
  }
}
?>

<html>

<head>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

  <link rel="stylesheet" type="text/css" href="custom.css" />
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="cities.js"></script>

  <style>
    body {
      background-repeat: no-repeat;
    }
  </style>
</head>

<!------ Include the above in your HEAD tag ---------->

<body background="reg-back.jpg">
  <form method="POST">
    <div class="bg">
      <div class="container register">
        <div class="row">
          <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />

            <h3>Welcome</h3>

            <p>Buy, Sell or Advertise fruits & vegetables, Agri produce!</p>
            <input type="submit" name="log" value="Login" /><br />
            <br />
          </div>

          <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h1 class="register-heading">Register</h1>

                <div class="row register-form">
                  <div class="col-md-6">
                    <div class="form-group">
                      <form method="POST">
                        <input type="text" id="fname" name="fname" class="form-control" placeholder="First Name *" value="" required />
                    </div>

                    <div class="form-group">
                      <input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name *" value="" required />
                    </div>

                    <div class="form-group">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password *" value="" required />
                    </div>

                    <div class="form-group">
                      <input type="password" id="conformpassword" class="form-control" placeholder="Confirm Password *" value="" required />
                    </div>

                    <div class="form-group">
                      <div class="maxl">
                        <label class="radio inline">
                          <input type="radio" name="gender" value="male" checked />

                          <span> Male </span>
                        </label>

                        <label class="radio inline">
                          <input type="radio" name="gender" value="female" />

                          <span>Female </span>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" id="email" name="email" class="form-control" placeholder="Your Email *" value="" required />
                    </div>

                    <div class="form-group">
                      <input type="number" minlength="10" maxlength="10" id="txtEmpPhone" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" required />
                    </div>

                    <label for="toggleswitch">Who are you ?</label>
                    <select id="toggleswitch" name="toggleswitch">
                      <option value="0">Farmer</option>
                      <option value="1">Buyer</option>
                    </select>

                    <div class="form-group">
                      <h6>Address :</h6>
                      <input type="text" id="address" name="address" class="form-control" placeholder="Adress.. *" value="" required />
                    </div>

                    <input type="submit" name="submit" class="btnRegister" value="Register" onclick="validate()"/>
  </form>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </form>
  <script>
    function validate()
    {
      var nameValue0 = document.getElementById("password").value;
      // alert(nameValue0);
      var nameValue1 = document.getElementById("conformpassword").value;
      // alert(nameValue1);
      if(nameValue0!=nameValue1)
      {
        alert("Enter the same password in conform password");
      }
    }
    </script>
</body>

</html>