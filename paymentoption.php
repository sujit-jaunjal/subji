<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
if(isset($_POST['submit'])){
  header("Location:pgRedirect.php");
}
if(isset($_POST['cod'])){
  echo '<script>alert("Product Bought !!")</script>'; 
  header("Location:trans_success.php");
}
}
?>

<html>
<style>
.button {
  border-radius: 4px; 
  background: #2196F3;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 14px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button2 {
  border-radius: 4px; 
  background: #ff9800;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 14px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button3 {
  border-radius: 4px; 
  background: #4CAF50;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 14px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button2:hover span {
  padding-right: 25px;
}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}

.button3 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button3 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button3:hover span {
  padding-right: 25px;
}

.button3:hover span:after {
  opacity: 1;
  right: 0;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            $("#header").load("header.php");

        });

        function cod()
        {
          if (confirm('Are you sure you want to buy this Product ?')) {
  alert('Product bought Successfully !');
  window.location.href='trans_success.php';
} else {
  console.log('Purchase Cancelled..');
}
        }
    </script>
    <body>
    <div id="header"></div>
<div class="container_wrapper" style="margin-top: 180px;">
    <div class="row">
    <div class="col-md-3">
    
    </div>
    <div class="col-md-6" style="background-color: #dce2dc;">
    <h3><b><i>Payment Options : </i></b></h3><br><br><br><br>
    <form method="POST" style="margin-left:100px; height:300px;">
    
    <button class="button" name="submit"><span>Paytm </span></button><br>
    <button class="button2" name="submit"><span>Credit/Debit Cards </span></button><br>
    <button class="button3" name="cod"><span>Cash On Delivery </span></button><br>
    </form>
    </div>
    <div class="col-md-3">
    </div>

    </div>
    </div>
      </body>
    </html>