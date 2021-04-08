<?php
include('config.php');

if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  
  $imageFileType = strtolower(pathinfo($name,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
    $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $query = "insert into images(image) values('".$image."')";
    mysqli_query($con,$query);
  
    // Upload file
    //move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  }
 
}
?>

<form method="post" action="" enctype='multipart/form-data'>
  <input type='file' name='file' />
</br>
  <input type='submit' value='Add Image' name='but_upload'>
</form>