<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
 if(isset($_POST['submit'])){

   $_SESSION["tit"] = $_POST['title'];

   if( !isset($_SESSION["email"]) ){
    header("location:regPage.php");
    exit();
}

   header("Location:finalcart.php");
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
  <div class="container_wrapper" style="margin-top:170px">

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
            xhttp.open("GET", "all.php", true);
            xhttp.send();
          }
          reg();


          function render(out) {
            console.log(out)
            let str1 = ' <div class="row" style="margin-top:40px;"> <div class="products"><div class="inner"> <div class="col-md-3"> <a href="#"><img class="img-fluid" src="';
            let str8 = '" alt="Here we have the product image added throught unsophisticated phone" height="250" width="250"></a><h3> Seller :</h3> <h3><p>';
            let str2 = '</p></h3></div></div><div class="col-md-8"><form method="POST"> <h4> Product Title:<input type="text" id="title" name="title" placeholder="Title" value="';
            let str3 = '" readonly></h4><br><h4>Product &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp ';
            let str4 = '</h4><br><h4>Description &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
            let str5 = '</h4><br><h4>Product Price &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp  ';
            let str6 = '</h4><br><h4>Product Weight &nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
            let str7 = '</h4><br><input type="submit"  name="submit" value="Buy Now"></form></div></div></div></div><br><br><hr></hr><br>';
          
          // function render(out) {
          //   console.log(out)
          //   let str1 = '<div class="row" style="margin-top:40px;"> <div class="products"> <div class="inner"> <div class="col-md-3"> <a href="#"><img class="img-fluid" src="images/product-1.jpg" alt="" height="250" width="250"></a> </div><div class="col-md-4">Product :<input type="text" placeholder="Product Type " value="';
          //   let str6 = '"> <form method="POST"> Product Title:<input type="text" id="title" name="title" placeholder="Title" value="';
          //   let str2 = '"> Description:<textarea class="span6" rows="3" placeholder="Description">';
          //   let str7 = '</textarea> </div><div class="col-md-4"> Product Price:<input type="text" placeholder="Product price " value="';
          //   let str3 = '"> Product Weight:<input type="text" placeholder="Product Weight" value="';
          //   let str4 = '"> State:<input type="text" placeholder="State" value="';
          //   let str5 = '"> <input type="submit" name="click" value="Buy Now" onclick="fun()"></form></div></div></div></div>';

          for (var key in out) {
              let final = str1 + out[key].image + str8 + out[key].seller + str2 + out[key].title + str3 + out[key].name + str4 + out[key].productdes + str5 + out[key].price + str6 + out[key].weight + str7;
              document.getElementById("myOutputDiv").innerHTML += final;

            }
          
            // for (var key in out) {
            //   let final = str1 + out[key].name + str6 + out[key].title + str2 + out[key].productdes + str7 + out[key].price + str3 + out[key].weight + str4 + out[key].state + out[key].sts + str5;
            //   document.getElementById("myOutputDiv").innerHTML += final;

            // }

          }
      </script>
      </div>
  </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </div>
</body>

</html>