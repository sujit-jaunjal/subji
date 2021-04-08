<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{

    $ses = $_SESSION["des"];
    $final = array();

    $query = "SELECT * FROM `addauction` WHERE productdes='$ses'";
  $out = mysqli_query($con,$query);

  if ((mysqli_num_rows($out) > 0)) {
    while (($row = mysqli_fetch_assoc($out))) {
        $final = $row;
    }
}
    $date = $final['AuctionDate'];
    $date = explode('-', $date);
        $year = $date[0];
        $month   = $date[1];
        $day  = $date[2];
//echo '<pre>'; print_r($final); echo '</pre>';

if(isset($_POST['submit']))
{
    $bid = $_POST['bid'];

    $bidder = $_SESSION['email'];

    $query1 = "SELECT * FROM `addauction` WHERE productdes='$ses'";    

    $stmt = mysqli_query($con,$query1);

    $fin = array();

    if ((mysqli_num_rows($stmt) > 0)) {
        while ($row1 = mysqli_fetch_assoc($stmt)) {
            $fin = $row1;

            if($bid > $fin['bid_val'])
            {
                $qe = "UPDATE `addauction` set bid_val='$bid' WHERE productdes='$ses'";

                     mysqli_query($con, $qe);

                $qr = "UPDATE `addauction` set bidder='$bidder' WHERE productdes='$ses'";

                     mysqli_query($con, $qr);

                echo '<script>alert("Bid Updated Successfully !")</script>'; 
            }else
            {
                echo '<script>alert("Enter Higher Bid Amount...")</script>';    
            }
        }
    }

}

        //    $name = $final['name'];
        // echo $name;
           //echo '<pre>'; print_r($final); echo '</pre>';
 // header("Location:index.php");

}

?>
 
<!DOCTYPE html>
<html>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            $("#header").load("header.php");

        });
    </script>

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

<body>

    <h1>Auction</h1>
    <div id="header"></div>
    <div class="container-wrapper" style="margin-top: 120px;">
        <div class="container">
            <div class="row">
                <div class="products">
                    <div class="col-md-4">
                        <div class="border border-success">
                            <h3 class="text-success">
                                <center><?php echo $final['name'];?><br></h3>
                            </center>
                            <hr>
                            <div class="inner">
                                <a href="#"><img class="img-fluid border-success rounded" src="<?php echo $final['image']; ?>" alt="" height="100%" width="100%"></a>
                            </div>
                            <div class="text py-3 pb-4 px-3 text-left">
                                <div>
                                    <table align="center">
                                        <b>
                                        <tr class="info">
                                            <td id="day"></td>
                                            <td id="hour"></td>
                                            <td id="minute"></td>
                                            <td id="second"></td>
                                        
                                        </tr>
                                        </b>
                                        <tr>
                                            <td>Days &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                                            <td>Hours &nbsp; &nbsp; &nbsp; &nbsp; </td>
                                            <td>Minutes &nbsp; &nbsp; &nbsp; &nbsp; </td>
                                            <td>Seconds &nbsp; &nbsp; &nbsp; &nbsp; </td>
                                        </tr>

                                        <p id="demo"></p>
                                    </table>
                                </div>
                                </hr>
                                </br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>
                            
                            <p class="text-success"><h4>Product Type :<b class="text-muted"><?php echo $final['type'];?></b> </h4></p><br>
                            <p class="text-success"><h4>Product Name : <b class="text-muted"><?php echo $final['name'];?></b></h4></p><br>
                            <p class="text-success"><h4>Product Weight : <b class="text-muted"><?php echo $final['weight'];?></b></h4></p>
                            </br>
                        </h4>
                        <div class="box1">
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text-muted">Current bid : </span><b>&nbsp;&nbsp; Rs <?php echo $final['bid_val'];?></b></br>
                            </br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <span><form method="POST"><input type="text" placeholder="Enter your bid " name="bid"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="submit" value="Place Bid" style="background-color: #45a049;"></form>
                            </span>
                            </br>
                            </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="text-muted">Enter bid more than Rs <?php echo $final['bid_val'];?> </span></br>
                            </br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
// Set the date we're counting down to
var year = <?php echo $year; ?>;
    var month = <?php echo $month; ?>;
    var day = <?php echo $day; ?>;
    var hour = 24;
    var min = 59;
    var sec = 59;
    var milli = 59;
var countDownDate = new Date(year, month-1, day+1, hour, min, sec, milli).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    <?php $que = "UPDATE `addauction` set txn_bid='1' WHERE productdes='$ses'";
           mysqli_query($con, $que);
     ?>
    document.getElementById("demo").innerHTML = "EXPIRED";
    // window.location.href="auctionall.php";
  }
}, 1000);
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>  