<html>
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
  <body>
  <div id="header"></div>
  <div class="container_wrapper" style="margin-top:200px">
    <section>
      <div class="container">

        <div id="myOutputDiv">
        </div>
        <script language="javascript" type="text/javascript" src="asd.js"></script>

        <script>
          function reg() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {


              if (this.readyState == 4 && this.status == 200) {
                var out = JSON.parse(xhttp.responseText);
                render(out);
              }
            }
            xhttp.open("GET", "orderphp.php", true);


            xhttp.send();
          }
          reg();


          function render(out) {
            console.log(out)
            let str1 = ' <div class="row"> <div class="products"  style="margin-top:20px"> <div class="inner"> <div class="col-md-3"> <a href="#"><img class="img-fluid" src="';
            let str9 = '" alt="Here is the image" height="250" width="250"></a> </div><div class="col-md-4"> Product :<input type="text" placeholder="Product Type " value="';
            let str6 = '"> Product Title:<input type="text" placeholder="Title" value="';
            let str2 = '"> Description:<textarea class="span6" rows="3" placeholder="Description">';
            let str7 = '</textarea> </div><div class="col-md-4"> Product Price:<input type="text" placeholder="Product price " value="';
            let str3 = '"> Product Weight:<input type="text" placeholder="Product Weight" value="';
            let str4 = '"> <input type="text" placeholder="State" value="';
            let str5 = '"> <button class="btn btn-success" style="background-color: #45a049;" id="payment"';
            let str8 = '"></a></button> </div></div></div></div>';


            for (var key in out) {
              let final = str1 + out[key].image + str9 + out[key].name + str6 + out[key].title + str2 + out[key].productdes + str7 + out[key].price + str3 + out[key].weight + str4 + out[key].state + out[key].sts;
              document.getElementById("myOutputDiv").innerHTML += final;

            }
            document.getElementById("payment").onclick = function () {
              window.location.href = "paymentoption.html";
            }
          }
        </script>
      </div>
  </div>
  </section>

    </body>
</html>