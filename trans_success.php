<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{

    $buyer = $_SESSION["email"];
    $ses = $_SESSION["tit"];
    $final = array();

    $query = "SELECT * FROM `product2` WHERE title='$ses'";
  
    $out = mysqli_query($con,$query);

  if ((mysqli_num_rows($out) > 0)) {
    while (($row = mysqli_fetch_assoc($out))) {
        $final = $row;
    }
}
if(isset($_POST['home'])){

    $ins = "UPDATE `product2` set txn='1' where title='$ses'";

    mysqli_query($con,$ins);

    $ins1 = "UPDATE `product2` set buyer='$buyer' where title='$ses'";

    mysqli_query($con,$ins1);
 

    header("Location:index.php");
  }
  if(isset($_POST['more'])){ 
    $ins = "UPDATE `product2` set txn='1' where title='$ses'";

    mysqli_query($con,$ins);

    $ins1 = "UPDATE `product2` set buyer='$buyer' where title='$ses'";

    mysqli_query($con,$ins1);
 
    header("Location:allproduct.php");
  }
//echo '<pre>'; print_r($final); echo '</pre>';
}
?>

<style>
    .sp {
        background-color: whitesmoke;
    }
    
    .info {
        font-size: 20px;
    }
    
    .box1 {
        background-color: whitesmoke;
    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            $("#header").load("header.php");

        });
    </script>
    <body>
    <div id="header"></div>
    <div id="header"></div>
    <div class="container-wrapper" style="margin-top: 200px;">
    <h1>Product Bought Successfully !!</h1>
        <div class="container">
            <div class="row">
                <div class="products">
                    <div class="col-md-4">
                        <div class="border border-success">
                            <h3 class="text-success">
                                <center><?php echo $final['title'];?><br></h3>
                            </center>
                            <hr>
                            <div class="inner">
                                <a href="#"><img class="img-fluid border-success rounded" src="<?php echo $final['image']; ?>" alt="" height="300px;" width="100%"></a>
                            </div>
                            <div class="text py-3 pb-4 px-3 text-left">
                                <div>
                                </div>
                                </hr>
                                </br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>
                            
                            <p class="text-success"><h4>Product Type :  <b class="text-muted"><?php echo $final['title'];?></b> </h4></p><br>
                            <p class="text-success"><h4>Product Name :  <b class="text-muted"><?php echo $final['sts'];?></b></h4></p><br>
                            <p class="text-success"><h4>Product Weight :  <b class="text-muted"><?php echo $final['weight'];?></b></h4></p><br>
                            <p class="text-success"><h4>Product Description :  <b class="text-muted"><?php echo $final['productdes'];?></b></h4></p><br>
                            <p class="text-success"><h4>Address :  <b class="text-muted"><?php echo $final['sts'];?>, <?php echo $final['state'];?></b></h4></p>
                            </br>
                        </h4>
                        <form method="POST">
                            <input type="submit" name="more" value="Buy More..." style="background-color: #45a049;">
                            <input type="submit" name="home" value="Go to Home Page" style="background-color: #45a049; margin-left:50px;">
                            </form>
                            </span>
                            </br>
                            </br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>