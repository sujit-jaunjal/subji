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
        // $query = "INSERT into images(image) VALUES('" . $image . "')";
        // mysqli_query($con, $query);
    }

    $seller = $_SESSION["email"];

    $AuctionDate =  $_POST['AuctionDate'];

    $sts0 = $_POST['sts0'];

    $title = $_POST['title'];

    $sts = $_POST['sts'];

    $state = $_POST['state'];

    $price = $_POST['price'];

    $weight = $_POST['weight'];

    $bidder = "";

    $productdes = $_POST['productdes'];

    // $stmt = $con->prepare("INSERT INTO AddAuction (type, name, state, city, price, weight, productdes , AuctionDate, bid_val, bidder, txn_bid) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    // $stmt->bind_param("ssssiissisi", $sts0,$title,$sts,$state,$price,$weight,$productdes,$AuctionDate,0,$bidder,0);
    // $stmt->execute();

    $query1 = "INSERT INTO `addauction`(`type`, `name`, `state`, `city`, `price`, `weight`, `productdes` , `AuctionDate`, `bid_val`, `bidder`, `txn_bid`,`seller`,`image`,`txn_suc`) VALUES ('$sts0','$title','$sts','$state','$price','$weight','$productdes','$AuctionDate','0','$bidder','0','$seller','" . $image . "',0)";

    mysqli_query($con, $query1);

    $ins = "UPDATE `addauction` set seller='$seller'";
    mysqli_query($con, $ins);


    echo "<script>alert('Product Added to Auction !');</script>";
    header("Location: AddAuctionBoardView.php");    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="cities.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            $("#header").load("header.php");

        });
    </script>

    <style>
        .class11 {
            left: 90px;
        }

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
            margin-left: 1000px;
        }

        #product_page {
            width: 1300px;
            height: 600px;
            margin: 40px;
        }

        .classNoOne {
            margin-left: 200px;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="header"></div>

    <div class="classNoOne">
        <div class="container_wapper" style="margin-top: 250px">
            <div class="row" id="product_page">
                <div class="col-md-8">
                    <div style="background-color :rgb(226, 225, 225);" id="templatemo_about" class="container_wapper container">
                        <form method="POST" action="" enctype='multipart/form-data'>

                            <h3>Product type :</h3>

                            <select id="sts0" name="sts0">
                                <option value="Fruit">Fruits</option>
                                <option value="Vegetable">Vegetable</option>
                                <option value="FoodGrains">FoodGrains</option>
                            </select>


                            <h3>Product Name :</h3>
                            <input type="text" id="title" name="title" placeholder="Title for product.." class="form-control" required/>

                            <h3>State :</h3>
                            <select onchange="print_city('state', this.selectedIndex);" id="sts" name="sts" class="form:control" required></select>
                            <select id="state" name="state" class="form-control" required></select>
                            <script language="javascript">
                                print_state("sts");
                            </script>
                            <br />

                            <h3>Price in Rs(rupees) :</h3>
                            <input type="number" min="0" oninput="validity.valid||(value='');" id="price" name="price" placeholder="Enter Price.." class="form-control" required/>
                            <br />

                            <h3>Weight in Kgs(Kilograms) :</h3>
                            <input type="number" min="0" oninput="validity.valid||(value='');" id="weight" name="weight" placeholder="Enter weight.." class="form-control" required/>
                            <br />


                            <label for="birthday">Auction Date : </label>
                            <input type="date" id="AuctionDate" name="AuctionDate" class="form-control" required>

                            <br><br>

                            <label>Product Images : </label>
                            <input type='file' name='file' class="form-control" required />
                            </br>


                            <h3>Product Description :</h3>
                            <textarea id="productdes" name="productdes" class="form-control" required></textarea>
                            <br />
                            <input type='submit' value='Add to Auction' name='but_upload'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>