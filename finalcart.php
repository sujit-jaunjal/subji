<?php

session_start();

include('config.php');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{

    $ses = $_SESSION["tit"];
    $final = array();

    $query = "SELECT * FROM `product2` WHERE title='$ses'";
	$urlmsg = "SELECT * FROM `url_message`";

	$out = mysqli_query($con,$query);
	$urmsg = mysqli_query($con, $urlmsg);

  if ((mysqli_num_rows($out) > 0)) {
    while (($row = mysqli_fetch_assoc($out))) {
		$final = $row;
	}	
}

if ((mysqli_num_rows($urmsg) > 0)) {
	while (($row = mysqli_fetch_assoc($urmsg))) {
		$umsg = $row['message'];
		$msg = explode(" ",$umsg);
			
		$product['title']=$msg[2];
		$product['sts']='';
		$product['state']='';
		$product['price']=$msg[8];
		$product['weight']=$msg[6];
		$product['productdes']='';
		$product['id']='';
		$product['name']=$msg[4];

		array_push($final, $product);

	}
}
//echo '<pre>'; print_r($name); echo '</pre>';
}
?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<link rel="stylesheet" href="mycss.css" >
<link href="css/font-awesome.min.css" rel="stylesheet">
<style>
h6{
	font-style: bold;
}
</style>
</head>
<script>
var count;
function starmark(item)
{
count=item.id[0];
sessionStorage.starRating = count;
var subid= item.id.substring(1);
for(var i=0;i<5;i++)
{
if(i<count)
{
document.getElementById((i+1)+subid).style.color="orange";
}
else
{
document.getElementById((i+1)+subid).style.color="black";
}
}
}
function result()
{
alert("Rating : "+count+"\nReview : "+document.getElementById("comment").value);
}
</script>
<body>


<section>
<div class="container-fluid">
	<div class=row>
	<div class="col-md-1">
	</div>
		<div class="col-md-8" >
			<div class="products">
				
			<div class=row>			
			<div class="inner">
			<img src="<?php echo $final['image']; ?>" alt="product image" class="img-fluid" class="img-responsive" width="500px" height="500px">
			</div>
			<div class="text py-3 pb-4 px-3 text-left">
				<b><p class="text-success"><h4>Product : </h4></p></b>				
				 <p class="text-muted"><h6>Title :</h6> <?php echo  $final['title'];?> </p>
				 <p class="text-muted"><h6>Product weight :</h6> <?php echo $final['weight']; ?>kg</p>
				 <p class="text-muted"><h6>Address:</h6> <?php echo $final['sts']; ?>, <?php echo $final['state']; ?></p>
				<p class="text-muted"><h6>Price :</h6></p>
				<p class="text-success"><b><?php echo $final['price']; ?></b><br></p>	
				<p onclick="payment()"><a href="#" class="btn btn-success">Buy Now</a></p>
			</div>
			</div>
	</div>		
		</div>		
		<div class="col-md-3">			
			<div class="products">
				<p class="text-success">Price Details</p>
				<table border="0px" class="table">
					<tr>
						<th>Price (item 1)</th>
						<th><?php echo $final['price']; ?></th>
					</tr>
					<tr>
						<th>Delivery fee</th>
						<th>0</th>
					</tr>
					<tr>
						<th>Total Payable</th>
						<th><?php echo $final['price']; ?></th>
					</tr>
				</table>
				
				
				<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h4 class="text-center""text-success">Rate us</h4></center>
				
			</div>
			<div class="modal-body">
				<form name="login_modal">
					<div class="form-group">
					<center>
						<span  onclick="starmark(this)" id="1one" style="font-size:40px;cursor:pointer;"  class="fa fa-star checked"></span>
							<span  onclick="starmark(this)" id="2one"  style="font-size:40px;cursor:pointer;" class="fa fa-star "></span>
							<span  onclick="starmark(this)" id="3one"  style="font-size:40px;cursor:pointer;" class="fa fa-star "></span>
							<span  onclick="starmark(this)" id="4one"  style="font-size:40px;cursor:pointer;" class="fa fa-star"></span>
							<span  onclick="starmark(this)" id="5one"  style="font-size:40px;cursor:pointer;" class="fa fa-star"></span>
						</center>
					</div>
					
					<div class="form-group">
							<center><label><b>Add your view:</b></label><center>
							<textarea  style="margin-top:5px;" class="form-control" rows="3" id="comment" placeholder="Enter your review"></textarea>
					</div>
				</form>
			</div>
			<div class="model-footer  justify-content-center">
				<center><button class="btn btn-success" data-dismiss="modal" onclick="result()" >Submit</button></center>
				</br>
			</div>
		</div>
	</div>				

				
			</div>
		</div>
	</div>
</div>
</section>
</body>
<script>

function payment()
{
	window.location.href="paymentoption.php";
}
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>