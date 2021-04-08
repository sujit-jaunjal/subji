<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {
            $price = $_SESSION['pri'];

            if(isset($_POST['Submit'])) {

                   $qe = "UPDATE `product2` set txn_succ='1' where price='$price'";
                     mysqli_query($con, $qe);
                echo '<script>alert("Request processed Successfully !")</script>';
            header('Location:myaddedproduct.php');        
            }
}

?>

<!DOCTYPE html>
<html lang="en">
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
<body class="bg-light" >
<div id="header"></div>
        <div class="container mt-5" style="margin-top:180px;">
            <div class="row justify-content-md-center">
                <div class="">
                    <h3 class="text-center" style="color:#22CC00;"><b>Send payment request to Subji - </b></h3>
                </div>
            </div>
        </div>        
    <div class="container mt-3">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <form method="POST">
                  
                  <label for="lblMobileNumber">Mobile Number</label>
                  <input type="tel" name="userMobile" class="form-control" value="9075081160" id="number" placeholder="9075081160"  required    pattern="[789][0-9]{9}" oninvalid="Please Enter Proper Mobile Number" readonly>
                  <br>
                  <br>
                  <label for="lblMessage">Payable Amount</label>
                  <input type="text"  name="userMessage" required  id="textMessage" rows="3"  placeholder="Enter your message here" value = "Sender - <?php echo $_SESSION['email']?>   Repay Amount - <?php echo $price; ?> " readonly> 

                  <button type="submit" name="Submit" style="background-color:#22CC00; width:100px; height:40px;" id="btnSend">Send</button>
                  
                  <button type="button" style="margin-left:30px; background-color:#22CC00; width:100px; height:40px;" onclick="clearAllFields()">Clear</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <p  id-"response" class="text-center"></p>
                </div>
            </div>
        </div>
</body>
<script type="text/javascript">

function clearAllFields(){
    number.value="";
    textMessage.value="";
}
</script>
</html>

<?php 

if(isset($_POST['Submit']))
{

$textMessage=$_POST["userMessage"];
$mobileNumber=$_POST["userMobile"];

$apiKey = urlencode('il7zC/Ap//c-Qwptf3P58gqnWBs7ep7H0CiG797Hml');
   
   // Message details
   $numbers = array($mobileNumber);
   $sender = urlencode('TXTLCL');
   $message = rawurlencode($textMessage);

   $numbers = implode(',', $numbers);

   // Prepare data for POST request
   $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

   // Send the POST request with cURL
   $ch = curl_init('https://api.textlocal.in/send/');
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $response = curl_exec($ch);
   curl_close($ch);   
   // Process your response here
   echo $response;
}    
?>
