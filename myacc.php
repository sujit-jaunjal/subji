<html>
  <head>
    <?php

      session_start();
        include('config.php');

        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          exit();
      } else {
      
          $user = $_SESSION["email"];
        if(sizeof($_SESSION)>0) {

          $query = "SELECT fname,email,txtEmpPhone FROM `regpage` WHERE email=$user";
        }else{
          header("Location:regPage.php");
        }
      
      
          $out = mysqli_query($con, $query);
      
      
          $final = array();
          
      
          if ((mysqli_num_rows($out) > 0)) {
              while (($row = mysqli_fetch_assoc($out))) {
                  $final = $row;
              }
          }
      
           echo '<pre>'; print_r( $final); echo '</pre>';
      }
    ?>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            $("#header").load("header.php");

        });
    </script>

  </head>

  <!------ Include the above in your HEAD tag ---------->

  <body>
    <div id="header"></div>
  <div class="container_wrapper" style="margin-top:100px;">
  <div class="container">
    <div class="row">

	<div class="col-md-3">
	
  </div>
			<div class="col-md-6">
			<div align="center">
			
					<img class="img-fluid" src="images\avatar.png" alt="" height="150" width="150">
					<br>
					</br>
      </div>
      
			
				<form>
					
					<div class="form-group">
					 <h4><b> Name: </b></h4><input
                        type="text"
                        class="form-control"
                        placeholder="Name "
                        value="<?php echo $_SESSION["fname"]; ?>"
                      />
                    </div>
					
					

					<div class="form-group">
          <h4><b>  Email: </h4></b><input
                        type="email"
                        class="form-control"
                        placeholder="Your Email "
                        value="<?php echo $_SESSION["email"]; ?>"
                      />
                    </div>
					<div class="form-group">
          <h4><b> Phone: </h4></b><input
                        type="text"
                        minlength="10"
                        maxlength="10"
                        name="txtEmpPhone"
                        class="form-control"
                        placeholder="Your Phone "
                        value="<?php echo $_SESSION["txtEmpPhone"]; ?>"
                      />
                    </div>
				  
						</div>
                    </div>
					
        </form>
        </div>
        <div class="col-md-3">
	
        </div>

</div>
</div>
</div>

					
  </body>
</html>
