<!DOCTYPE html>
<html lang="en">

<?php

session_start();
?>
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 
    Dragonfruit Template 
    http://www.templatemo.com/preview/templatemo_411_dragonfruit 
    -->
    <title>Subji</title>
    <meta name="description" content="" />
    <!-- templatemo 411 dragonfruit -->
    <meta name="author" content="templatemo">
    <!-- Favicon-->
    <link rel="shortcut icon" href="./favicon.png" />
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />


    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Camera -->
    <link href="css/camera.css" rel="stylesheet">
    <!-- Template  -->
    <link href="css/templatemo_style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * {
            box-sizing: border-box;
        }
        
        #myInput {
            background-position: 10px 12px;
            background-image: url('‪searchicon.png');
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
            display: block
        }
        
        #myUL li a:hover:not(.header) {
            background-color: #eee;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        * {
            box-sizing: border-box;
        }
        
        h1 {
            color: #45a049
        }
        
        input[type=text],
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
        
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #45a049;
        }
        
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        .overlay {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #ffffff;
            background-color: #ffffff;
            overflow-x: hidden;
            transition: 0.5s;
        }
        
        .overlay-content {
            position: relative;
            top: 7%;
            width: 100%;
            text-align: center;
            margin-top: 20px;
            background-color: #ffffff;
        }
        
        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 22px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }
        
        .overlay a:hover,
        .overlay a:focus {
            color: #f1f1f1;
        }
        
        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 50px;
        }
        
        #span.block1 {
            display: inline-block;
            width: 100px;
            background-color: #3ed13e;
            height: 100px;
            padding: 5px;
        }
        
        #myNav {
            font-family: "Lato", sans-serif;
        }
        
        @media screen and (max-height: 450px) {
            .overlay a {
                font-size: 20px;
            }
            .overlay .closebtn {
                font-size: 30px;
                top: 15px;
                right: 40px;
            }
        }
        
        #Copy_right {
            margin-top:-20px;
            margin-left: 1000px;
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
                    <div class="col-md-3"></div>

                    <div class="col-sm-2" id="google_translate_element">

                    </div>
                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en'
                            }, 'google_translate_element');
                        }
                    </script>
                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


                    <div class="col-sm-3 hidden-xs">
                        <!-- <ul class="nav nav-justified">
                        <li><a href="#templatemo_banner_slide">Home</a></li>
                        <li><a href="#templatemo_about">About</a></li>
                        <li><a href="#templatemo_events">Events</a></li>
                        <li><a href="#templatemo_timeline">Timeline</a></li>
                        <li><a rel="nofollow" href="http://www.google.com" class="external-link">External</a></li>
                        <li><a href="#templatemo_contact">Contact</a></li>
                    </ul> -->
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for products..." title="Type in a name">

                    </div>
                    <div class="col-xs-8 visible-xs">
                        <a href="#" id="mobile_menu"><span class="glyphicon glyphicon-th-list"></span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div id="myNav" class="overlay">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a
                        >
                        <div class="overlay-content">
                          <h4>Account Details</h4>
                          <hr />
                          <a href="myacc.php">My Profile</a>
                          <?php
                          if(sizeof($_SESSION)>0) {
                        $toggle = $_SESSION["toggle"];
                             if($toggle == 0)
                                {
                                ?>
                            <a href="myaddedproduct.php">My Added Products</a>
                            <a href="auction_trans.php">My Auction Products</a>
                            <a href="myorder.php">My Orders</a>
                    <?php 
                            }
                            }
                    ?>
                            <br />
                            <h4>Subji Plus Zone</h4>
                            <hr />
                            <a href="https://graintechindia.com/">Grain Tech Fest 2020</a>
                            <a href="https://dindoripranit.org/event/world-krushi-exhibition/">World Krushi exhibition</a>
                            <a href="https://maha-tech.com/">MAHATECH</a>
                            <a href="https://conferencealert.com/conf-detail.php?ev_id=302965">ICAG</a>
                            </br>
                            <h4>Help Center</h4>
                            <hr />
                            <a href="about.php">About Us</a>
                        </div>
                    </div>

                    <span style="font-size:30px;cursor:pointer; margin-left: 0px;" onclick="openNav()">&#9776;</span
                      >                  
                </div>
                <div class="col-md-9">
                    <ul class="nav nav-justified">
                        <li onclick="index()" style="left: 0px;"><a href="#templatemo_banner_slide">Home</a></li>
                        <?php

if(sizeof($_SESSION)>0) {
  $toggle = $_SESSION["toggle"];
  if($toggle == 0)
  {
     ?>
 
<li onclick='product1()'><a href="">Sell Product</a></li>
<?php 
}
}
?> 
<li onclick="about()"><a href="#templatemo_about">Services</a></li>
<li onclick="layout()"><a href="">All Products</a></li>
<li onclick="Auction()"><a href="">Auction</a></li>
<!---->   <li onclick="register()" style="left: 800px"><a href="regPage.html">Register</a></li onclick="register()">   
<li style="left: 800px"><a href="">Login</a></li>               


</ul>

</div>
<div class="col-md-2" id="block1">

<?php

if(!sizeof($_SESSION)>0) {
        ?>

<span class="block1"><button style="background-color: #3ed13e; height: 60px; width: 100px;" onclick="register()">Signup</button></span>

<span class="block1"><button data-target="#mymodel" data-toggle="modal" style="background-color: #3ed13e; height: 60px; width: 100px;">Login</button></span>
<?php 
}
else{
?>
WELCOME </br><h5><?php echo $_SESSION["email"]; ?></h5>
<span class="block1"><button data-target="#mymodel" data-toggle="modal" style="background-color: #3ed13e; height: 60px; width: 100px; margin-left:180px; margin-top:-160px;" onclick="sess_destroy()">Log out</button></span>
<?php
}
?> 

                    <div class="modal" id="mymodel">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                                <div class="limiter">

                                    <div class="wrap-login60 p-l-55 p-r-55 p-t-65 p-b-54">
                                        <form class="login100-form validate-form">
                                            <span class="login100-form-title p-b-49">
                                  Login
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    
                                </span>

                                            <div class="wrap-input80 validate-input m-b-45" data-validate="Username is required">
                                                <span class="label-input100">Username</span>
                                                <input class="input100" name="username" placeholder="Type your username" id="email" />
                                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                                            </div>

                                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                                <span class="label-input100">Password</span>
                                                <input class="input100" type="password" name="pass" placeholder="Type your password" id="password" />
                                                <span class="focus-input100" data-symbol="&#xf190;"> </span>
                                            </div>

                                            <div class="text-right p-t-8 p-b-31"></div>

                                            <div class="container-login100-form-btn">
                                                <div class="wrap-login100-form-btn">
                                                    <div class="login100-form-bgbtn"></div>
                                                    <button class="login100-form-btn" onclick="login()" type="submit">
                                      Login
                                    </button>

                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

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

        function openNav() {
            document.getElementById("myNav").style.width = "20%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }

        function index() {
            window.location.href = "index.php";
        }

        function register() {

            window.location.href = "regPage.php";
        }

        function sess_destroy()
{
  window.location.href="logout.php"
}

        function login() {
           
            var email = document.getElementById("email").value;

var password = document.getElementById("password").value;

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    //  alert(this.responseText);
    window.location.href = "index.php";
  }
};

xhttp.open("POST", "  login.php", true);
xhttp.setRequestHeader(
  "Content-type",
  "application/x-www-form-urlencoded"
);
xhttp.send("email=" + email + "&password=" + password);

        }

        function product1() {
            window.location.href = "product1.php";
        }

        function about() {
            window.location.href = "about.php";
        }

        function layout() {
            window.location.href = "allproduct.php";
        }

        function Auction() {
            window.location.href = "Auction.html"
        }
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/unslider.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="js/templatemo_script.js"></script>
</body>

</html>