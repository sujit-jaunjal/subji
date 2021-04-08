<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
if(isset($_POST['submit'])){

  $email = $_SESSION["email"];
  $sts = $_POST['sts'];
  $state = $_POST['state'];

  $query = "INSERT INTO `product1`(`type`,`name`,`email`,`txn`) VALUES ('$sts','$state','$email',0)";
            
  mysqli_query($con,$query);

  header("Location:product2.php");
}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="product.js"></script>
  <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"
    ></script>
    <script>
      $(function () {
        $("#header").load("header.php");
      });
    </script>
  </head>

  <body>
  <div id="header"></div>
   <div class="container_wapper">

    <div class="row">

      <div class="col-md-4"  style="margin-top: 200px; margin-left: 30px;">
      <form method="POST">
          <h2>Select Product :</h2>
          <div>
            <select
              onchange="print_city('state', this.selectedIndex);"
              id="sts"
              name="sts"
              class="form-control"
              required
            ></select>
            <select id="state" name="state" class="form-control" required></select>
            <script language="javascript">
              print_state("sts");
            </script>
        
    
    </br>
    </br>
    <input type="submit" name="submit" />
  </form>
        </div>
        </div>
        <div>
        </div>
    </div>
  </body>
</html>
