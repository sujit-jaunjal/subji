<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
if(isset($_POST['submit'])){

  $_SESSION["des"] = $_POST['productdes'];

  header("Location:placebid.php");
}
}

?>

<html>
  <head>
    //header
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

    <style>
      #colorstrip {
        width: 100%;
        height: 40px;
        background-color: forestgreen;
        text-align: left;
        margin-top: 10px;
        text-size-adjust: 10px;
        font-size: 18px;
        padding-top: 10px;
      }

      .pr {
        font-size: 18px;
        text-align: center;
      }

      .below {
        margin-top: 250px;
      }
    </style>
  </head>

  <body>
    <div id="header"></div>

    <div class="below" id="myOutputDiv"></div>

    <script language="javascript" type="text/javascript" src="asd.js"></script>

    <script>
      function reg() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            var out = JSON.parse(xhttp.responseText);

            render(out);
          }
        };
        xhttp.open("GET", "AuctionAllProduct.php", true);
        xhttp.send();
      }
      reg();

      function render(out) {
        console.log(out);
        let str1 =
          ' <div class="container-wrapper" style="margin-top:20px;"><div class="container"><div class="row"><br><div id="colorstrip"><span class="text-white">&nbsp;&nbsp Product&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Auction </span></div><div class="col-md-2"><div class="inner"><a href="#"><img class="img-fluid border-success rounded" src="';
        let str2 =
          '" alt="" width="100%" height="30%"></a></div></div><div class="col-md-8"><form method="POST"> Product Description : <input type="text" name="productdes" value="';
        let str3 =
          '"><br><input type="submit" style="margin-left:770px; margin-top:-20px; border:none;" name="submit" value="Place Bid"></form></div></div></div></div>';

        for (var key in out) {
          let final = str1 + out[key].image + str2 + out[key].productdes + str3;
          document.getElementById("myOutputDiv").innerHTML += final;
        }
      }

    </script>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>
