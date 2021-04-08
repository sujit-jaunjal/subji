
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!--[if IE
      ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"
    /><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- 
    Dragonfruit Template 
    http://www.templatemo.com/preview/templatemo_411_dragonfruit 
    -->
  <title>Add Product2</title>

  <script src="cities.js"></script>

  <meta name="description" content="" />
  <!-- templatemo 411 dragonfruit -->
  <meta name="author" content="templatemo" />
  <!-- Font Awesome -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Bootstrap -->

  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- Camera -->
  <link href="css/camera.css" rel="stylesheet" />
  <!-- Template  -->
  <link href="css/templatemo_style.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    * {
      box-sizing: border-box;
    }

    #myInput {
      background-position: 10px 12px;
      background-repeat: no-repeat;
      width: 100%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
    }

    #myUL {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    #myUL li a {
      border: 1px solid #ddd;
      margin-top: -1px;
      /* Prevent double borders */
      background-color: #f6f6f6;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      color: black;
      display: block;
    }

    #myUL li a:hover:not(.header) {
      background-color: #eee;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      overflow: scroll;
    }

    * {
      box-sizing: border-box;
    }

    input[type="text"],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type="submit"] {
      background-color: #4caf50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
  </style>
</head>

<body>
  <div class="container_wapper">
    <div id="templatemo_banner_menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-4 templatemo_logo">
            <a href="#">
              <img src="images/templatemo_logo.jfif" id="logo_img" alt="dragonfruit website template" title="Dragonfruit Template" />
              <h1 id="logo_text">Sub<span>जी</span></h1>
            </a>
          </div>
          <script>
            function myFunction() {
              var input, filter, ul, li, a, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              ul = document.getElementById("myUL");
              li = ul.getElementsByTagName("li");
              for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  li[i].style.display = "";
                } else {
                  li[i].style.display = "none";
                }
              }
            }

            function index() {
              window.location.href = "index.html";
            }

            function register() {

              window.location.href = "regPage.html";
            }

            function login() {
              window.location.href = "login.html";
            }

            function product1() {
              window.location.href = "product1.html";
            }

            function about() {
              window.location.href = "about.html";
            }

            function layout() {
              window.location.href = "layout.html";
            }
          </script>
          <div class="col-sm-5"></div>
          <div class="col-sm-3 hidden-xs">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for products..." title="Type in a name" />
          </div>
          <div class="col-xs-8 visible-xs">
            <a href="#" id="mobile_menu"><span class="glyphicon glyphicon-th-list"></span></a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 hidden-xs">
            <ul class="nav nav-justified">
              <li onclick="index()"><a href="#templatemo_banner_slide">Home</a></li>
              <li onclick="register()"><a href="regPage.html">Register</a></li onclick="register()">
              <li onclick="login()"><a href="">Login</a></li>
              <li onclick="product1()"><a href="">Sell Product</a></li>
              <li onclick="about()"><a href="#templatemo_about">About</a></li>
              <li onclick="layout()"><a href="">All Products</a></li>
              <li><a href="#templatemo_contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="templatemo_about" class="container_wapper container" style="margin-top: 150px;">
    <form>
      <h3>Enter Title :</h3>
      <input type="text" id="title" name="title" placeholder="Title for product.." />
      <h3>Images :</h3>

<?php

include("index2.php");

?>

  <!--<input type="file" name="pic" accept="image/*" />
-->
<br />
      <br />
      <h3>State :</h3>
      <select onchange="print_city('state', this.selectedIndex);" id="sts" name="stt" class="form:control" required></select>
      <select id="state" class="form-control" required></select>
      <script language="javascript">
        print_state("sts");
      </script>
      <br />
      <br />
      <h3>Enter Product price in Rs(rupees) :</h3>
      <input type="text" id="price" name="price" placeholder="Enter Price.." />
      <br />
      <br />
      <h3>Enter Product weight in Kgs(Kilograms) :</h3>
      <input type="text" id="weight" name="weight" placeholder="Enter weight.." />
      <br />
      <br />
      <h3>Product Description :</h3>
      <textarea id="productdes"></textarea>
      <br />
      <br />
      <input type="submit" onclick="next()" />
    </form>
  </div>

  <script>
    function next() {

      var productdes = document.getElementById("productdes").value;

      var title = document.getElementById("title").value;

      var sts = document.getElementById("sts").value;

      var state = document.getElementById("state").value;

      var price = document.getElementById("price").value;

      var weight = document.getElementById("weight").value;

      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          alert(this.responseText);
        }
      };

      xhttp.open("POST", "product21.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("title=" + title + "&sts=" + sts + "&state=" + state + "&price=" + price + "&weight=" + weight + "&productdes=" + productdes);


      window.location.href = "index.html";
    }
  </script>
  <!-- </div> -->
</body>

</html>