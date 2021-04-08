<?php

include('config.php');

// $sql = "select image from images ORDER BY id DESC LIMIT 1";
// $result = mysqli_query($con, $sql);
// $row = mysqli_fetch_array($result);

// $image_src2 = $row['image'];


$sql = "SELECT  * FROM AddAuction ORDER BY id DESC LIMIT 1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        // echo "price: " . $row["price"]. " - Name: " . $row["name"]. "city: " . $row["city"]. "<br>";
        $name = $row["name"];
        $price = $row["price"];
        $state = $row["state"];
        $city = $row["city"];
        $weight = $row["weight"];
        $productdes = $row["productdes"];
        $AuctionDate = $row["AuctionDate"];
        $image = $row['image'];

        $AuctionDate = explode('-', $AuctionDate);
        $year = $AuctionDate[0];
        $month   = $AuctionDate[1];
        $day  = $AuctionDate[2];
    }
} else {
    echo "0 results";
}
$con->close();

?>
<!DOCTYPE html>
<html>
<br>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="mycss.css">
<link href="css/font-awesome.min.css" rel="stylesheet">
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

<link rel="stylesheet" href="mycss.css">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<style>
    .button {
        background-color: #4CAF50;
        display: block;
        width: 100%;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;

    }

    #colorstrip {
        width: 100%;
        height: 40px;
        background-color: forestgreen;
        text-align: center;
        margin-top: 10px;
        text-size-adjust: 10px;
        font-size: 18px;
        padding-top: 10px;

    }

    .box {
        text-align: center;
        font-size: 20px;
    }

    .b {
        border-top: 1px solid green;
    }

    .a {
        text-align: left;
        border-bottom: 1px solid green;
        font-size: 17px;
        padding-bottom: 20px;
        padding-right: 120px;


    }

    .ab {

        text-align: left;
        padding-left: 50px;
        font-size: 17px;
        padding-bottom: 20px;
        border-bottom: 1px solid green;

    }

    .c {}
</style>

<body onload="fun()">

    <div class="container-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <div id="colorstrip">
                        <span class="text-white">Due Date</span>

                    </div>
                    <div class="text py-3 pb-4 px-3 text-left">
                        <div class="box">
                            <table align="center">
                                <b>
                                    <tr class="info"></br>
                                        <td id="day"></td>
                                        <td id="hour"></td>
                                        <td id="minute"></td>
                                        <td id="second"></td>

                                    </tr>
                                </b>
                                <tr>
                                    <td>&nbsp; &nbsp; &nbsp; &nbsp;Days &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                                    <td>&nbsp; &nbsp; &nbsp; &nbsp;Hours &nbsp; &nbsp; &nbsp; &nbsp; </td>
                                    <td>&nbsp; &nbsp; &nbsp; &nbsp;Minutes &nbsp; &nbsp; &nbsp; &nbsp; </td>
                                    <td>&nbsp; &nbsp; &nbsp; &nbsp;Seconds &nbsp; &nbsp; &nbsp; &nbsp; </td>

                                </tr>

                            </table>
                            <hr class="b">
                            <span class="text-muted">End date:</span>
                            <hr class="b">
                        </div>

                    </div>

                </div>
                <div class="=col-md-6">
                    <div id="colorstrip">
                        <span class="text-white">Product details</span>
                    </div>
                    <div class="inner">
                        <a href="#"><img class="img-fluid border-success rounded" src='<?php echo $image; ?>' alt="" height="8px" width="550px"></a>
                    </div><br>

                    <div class="text-black">
                        <table class="c">

                            <tr>

                                <th class="a">Name </th>
                                <td class="a"><?php echo $name; ?></td>

                            </tr>
                            <tr>
                                <th><br></th>
                            </tr>
                            <tr>

                                <th class="a">Price </th>
                                <td class="a"><?php echo $price; ?> </td>

                            </tr>
                            <tr>
                                <th><br></th>
                            </tr>
                            <tr>

                                <th class="a">Produced at: </th>
                                <td class="a"><?php echo $state . " " . $city; ?> </td>

                            </tr>
                            <tr>
                                <th><br></th>
                            </tr>
                            <tr>

                                <th class="a">Weight </th>
                                <td class="a"><?php echo $weight; ?> </td>

                            </tr>
                            <tr>
                                <th><br></th>
                            </tr>
                            <tr>

                                <th class="a">Description </th>
                                <td class="a"><?php echo $productdes; ?>............ </td>

                            </tr>

                        </table>

                        </br>

                    </div>



                    <button class="button" onclick="jump()">Saved</button>

                    <br>


                </div>

            </div>
        </div>
    </div>

</body>

<script>
    function jump() {
        alert("Saved succesfully");
        window.location.href = "Auction.html";
    }
    var year = <?php echo $year; ?>;
    var month = <?php echo $month; ?>;
    var day = <?php echo $day; ?>;
    var hour = 23;
    var min = 59;
    var sec = 59;
    var milli = 59;
    var dt = deadline;
    var deadline = new Date(year, month-1, day, hour, min, sec, milli).getTime();

    var x = setInterval(function() {

        var now = new Date().getTime();
        var t = deadline - now;
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById("day").innerHTML = days;
        document.getElementById("hour").innerHTML = hours;
        document.getElementById("minute").innerHTML = minutes;
        document.getElementById("second").innerHTML = seconds;
        if (t < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "TIME UP";
            document.getElementById("day").innerHTML = '0';
            document.getElementById("hour").innerHTML = '0';
            document.getElementById("minute").innerHTML = '0';
            document.getElementById("second").innerHTML = '0';
        }
    }, 1000);
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>