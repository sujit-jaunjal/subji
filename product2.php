<?php
include('config.php');

session_start();

if (isset($_POST['but_upload'])) {

  $name = $_FILES['file']['name'];


  $imageFileType = strtolower(pathinfo($name, PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg", "jpeg", "png", "gif");

  // Check extension
  if (in_array($imageFileType, $extensions_arr)) {

    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
    $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
    // Insert record
    // echo $image;
    // $query = "insert into productimage(image) values('" . $image . "')";
    // mysqli_query($con, $query);

    // Upload file
    //move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

    $title = $_POST['title'];
      $sts = $_POST['sts'];
      $state = $_POST['state'];
      $price = $_POST['price'];
      $weight = $_POST['weight'];
      $productdes = $_POST['productdes'];
      $fname = $_SESSION["fname"];
      $seller = $_SESSION['email'];
    
            
      $query1 = "INSERT INTO `product2`(`title`, `sts`, `state`, `price`, `weight`, `productdes`, `fname`, `txn`, `buyer`, `txn_succ`, `image`, `seller`) VALUES ('$title','$sts','$state','$price','$weight','$productdes','$fname',0,'',0,'" . $image . "','$seller')";
      mysqli_query($con,$query1);

       header("Location:index.php");
  }
}
?>


<html>

<head>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script>
    $(function() {
      $("#header").load("header.php");
    });

    function next() {

      alert("Product added Successfully !");
    }
  </script>
  <script src="cities.js"></script>
</head>

<body>
    <div id="header"></div> 

  <div id="templatemo_about" class="container_wapper container" style="margin-top: 180px;margin-left:50px;">

    <div class="row" id="product_page">


      <div class="col-md-8">

        <div style="background-color :rgb(226, 225, 225);" id="templatemo_about" class="container_wapper container">
          <form method="post" action="" enctype='multipart/form-data'>
            
            
            <h3>Enter Title :</h3>
            <input type="text" id="title" name="title" placeholder="Text only...." class="form-control" required />
            <br />

            <br />

            <h3>State :</h3>
            <select onchange="print_city('state', this.selectedIndex);" id="sts" name="sts" class="form:control" required></select>
            <select id="state" name="state" class="form-control" required></select>
            <script language="javascript">
              print_state("sts");
            </script>
            <br />
            <br />
            <label>Product image :</label>
            <input type='file' name='file' class="form-control" required />

            <h3>Enter Product price in Rs(rupees) :</h3>
            <input type="number" min="0" oninput="validity.valid||(value='');" id="price" name="price" placeholder="Numbers only..." class="form-control" required/>
            <br />
            <br />
            <h3>Enter Product weight in Kgs(Kilograms) :</h3>
            <input type="number" min="0" oninput="validity.valid||(value='');" id="weight" name="weight" placeholder="Numbers only..."  class="form-control" required/>
            <br />
            <br />
            <h3>Product Description :</h3>
            <textarea id="productdes" name="productdes" class="form-control" required></textarea>
            <br />
            
            <br />
            <br />
            <input type='submit' value='Save name' name='but_upload'>
          </form>
          
        </div>

</body>

</html>