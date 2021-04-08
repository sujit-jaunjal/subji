<?php

include("config.php");


 $sql = "select image from images where id=4";
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_array($result);

 $image_src = $row['image'];
 
?>
<img src='<?php echo $image_src; ?>'>