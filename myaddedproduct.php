<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {


    $name = $_SESSION["fname"];

    $query = "SELECT * FROM `product2` WHERE fname='$name'";
   
    $final = array();
    $new = array();

    $out = mysqli_query($con, $query);

    if ((mysqli_num_rows($out) > 0)) {
        while (($row = mysqli_fetch_assoc($out))) {
            $final = $row;
        }
    }

    
    if(isset($_POST['submit']))
    {
        $tit = $_POST['title'];

        $q = "SELECT * FROM `product2` WHERE title='$tit'";

      $n = mysqli_query($con, $q);

      if ((mysqli_num_rows($n) > 0)) {
        while (($rw = mysqli_fetch_assoc($n))) {
            $new = $rw;
        }
    }
    if($new['txn']==1)
    { $_SESSION['pri'] = $_POST['price'];

      header('Location:send_sms.php');
    }
    else
    {
      echo '<script>alert("Product not sold yet ! ");</script>';
    }

  }
  
    if(isset($_POST['update']))
    {
      $title = $_POST['title'];
      $desc = $_POST['productdes'];
      $price = $_POST['price'];
      $weight = $_POST['weight'];
      $id = $_POST['id'];
    
      $que = "UPDATE `product2` set title='$title', productdes='$desc', price='$price', weight='$weight' WHERE id='$id'";
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
 
<html>
<head>
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
            xhttp.open("GET", "myproduct.php", true);


            xhttp.send();
          }
          reg();

          function render(out) {
            console.log(out)
            let str1 = ' <div class="row" style="margin-top:40px;"> <div class="products"><div class="inner"> <div class="col-md-3"> <a href="#"><img class="img-fluid" src="';
            let str9 ='" alt="here is th image" height="250" width="250"></a> </div>';
            let str2 = '</div></div><div class="col-md-8"><form method="POST"> Product Title:<input type="text" id="title" name="title" placeholder="Title" value="';
            let str3 = '"><br';
            let str4 = '"> Product Description : <input type="text" name="productdes" value="';
            let str5 = '"> Product Price:<input type="text" name="price" placeholder="Product price " value="';
            let str6 = '">Product Weight:<input type="text" name="weight" placeholder="Product weight " value="';
            let str7 = '">Product ID:<input type="text" name="id" placeholder="Product id " value="';
            let str8 = '" readonly><input type="submit"  name="submit" value="Redeem Product Value"><input type="submit" name="update" style="margin-left:20px; background: #ff9800;" value="Update"><input type="submit"  name="delete" style="margin-left:20px; background: #FF0000;" value="Delete"></form></div></div></div></div>';             


            for (var key in out) {
              
               let final = str1 + out[key].image + str9 + str2 + out[key].title + str3 + out[key].name + str4 + out[key].productdes + str5 + out[key].price + str6 + out[key].weight + str7 + out[key].id + str8;
            
             document.getElementById("myOutputDiv").innerHTML += final;
            }
          }
        </script>
      </div>
  </div>
  </section>

    </body>
</html> 