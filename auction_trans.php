<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
  
  if(isset($_POST['submit']))
  {
    $email = $_SESSION["email"];

    $query = "SELECT * FROM `addauction` WHERE seller='$email'";
   
    $final = array();
    
    $out = mysqli_query($con, $query);
  
    if ((mysqli_num_rows($out) > 0)) {
        while (($row = mysqli_fetch_assoc($out))) {
            $final = $row;
        }
    }

    if($final['txn_suc']==0)
    { $_SESSION['bidval'] = $_POST['price'];

      header('Location:send_auc.php');
    }
    else
    {
      echo '<script>alert("Already Sent Message ! ");</script>';
    }
}
if(isset($_POST['update']))
{
  $name = $_POST['name'];
  $desc = $_POST['productdes'];
  $type = $_POST['type'];
  $weight = $_POST['weight'];
  $id = $_POST['id'];

  $que = "UPDATE `addauction` set name='$name', productdes='$desc', bid_val='$price', weight='$weight' WHERE id='$id'";
  mysqli_query($con, $que);
  
echo "<script>alert('Product Updated Successfully !');</script>";
}

if(isset($_POST['delete']))
{
  $_SESSION["tit"] = $_POST['title'];

  $title = $_SESSION["tit"];

  $qui = "DELETE FROM `product2`WHERE title='$title'";
  mysqli_query($con, $qui);
  
echo "<script>alert('Product Deleted Successfully !');</script>";
}
}
?>
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

<html>
<body>
<div id="header"></div>
<div class="container_wrapper" style="margin-top:200px">
    <section>
      <div class="container">
        <div id="myOutputDiv">
        </div>
        <script language="javascript" type="text/javascript" src="asd.js"></script>

        <script>
          function reg() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {


              if (this.readyState == 4 && this.status == 200) {
                var out = JSON.parse(xhttp.responseText);
                render(out);
              }
            }
            xhttp.open("GET", "myauction.php", true);

            xhttp.send();
          }
          reg();

          function render(out) {
            console.log(out)
            let str1 = ' <div class="row" style="margin-top:40px;"> <div class="products"><div class="inner"> <div class="col-md-3"> <a href="#"><img class="img-fluid" src="';
            let str9 = '" alt="" height="250" width="250"></a> </div>';
            let str2 = '</div></div><div class="col-md-8"><form method="POST"> Product Title:<input type="text" id="title" name="name" placeholder="Title" value="';
            let str3 = '"><br>Product :<input type="text" name="type" placeholder="Product Type " value="';
            let str4 = '"> Product Description : <input type="text" name="productdes" value="';
            let str5 = '"> Current Bid :<input type="text" name="price" placeholder="Product price " value="';
            let str6 = '"readonly>Product Quantity :<input type="text" name="weight" placeholder="Product weight " value="';
            let str7 = '">Product ID :<input type="text" name="id" placeholder="Product ID " value="';
            let str8 = '"readonly><br><input type="submit" name="submit" value="Contact to Bidder"><input type="submit" name="update" style="margin-left:20px; background: #ff9800;" value="Update"><input type="submit"  name="delete" style="margin-left:20px; background: #FF0000;" value="Delete"></form></div></div></div></div>';             

            for (var key in out) {
              
               let final = str1 + out[key].image + str9 + str2 + out[key].name + str3 + out[key].type + str4 + out[key].productdes + str5 + out[key].bid_val + str6 + out[key].weight + str7 + out[key].id + str8;
            
              document.getElementById("myOutputDiv").innerHTML += final;
            }
          }
        </script>
      </div>
  </div>
  </section>
</body>
</html>