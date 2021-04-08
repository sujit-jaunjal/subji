<div>
    <head>

        <title>Subji</title>


    <script type="text/javascript">
      know={
        "Hello":"Hi there!",
        "hello":"Hi there!",
        "Who are you":"I am FarmBot",
        "who are you?":"I am FarmBot",
        "How are you":"I am fine",
        "how are you?":"I am fine",
        
        "Can i ask you some questions":"Yes offcourse",
        "can i ask you some questions?":"Yes offcourse",
        "?":"What? Ask your question please",
        "How can you help me":"Tell me your problem<br> i will try to help to tackle it out",
        "how can you help me":"Tell me your problem<br> i will try to help to tackle it out",
        "how can you help me?":"Tell me your problem<br> i will try to help to tackle it out",
  
        "What products can i sell":"All the types of vegetables",
        "what products can i sell?":"All the types of vegetables",
        "How to sell the vegetables on this site?":"You just need to upload your <br>and your product details",
        "how to sell the vegetables on this site":"You just need to upload your<br> and your product details",
        "How do i deliver my product?":"The buyers according to your details <br>will contact you for delivery",
        "how do i deliver my product":"The buyers according to your details <br>will contact you for delivery",
  
        "What about payments?" : "Payments to be <br>carried between Buyers and farmers<br>either online or offline<br> according to decided rates",
        "what about payments?" : "Payments to be <br>carried between Buyers and farmers<br> either online or offline<br> according to decided rates",
        "How much days are required to sold the products?":"Please read the sites instructions for details",
        "Any other information":"Please read<br> the sites instructions for details",
  
        "Bye":"Bye",
        "bye":"Bye",
        "ok":"Thanks",
        "OK":"Thanks",
        "Ok":"Thanks",
        "Thanku":"My Pleasure",
        "thank u ":"My Pleasure",
        "thanku ":"My Pleasure",
        "Thank you":"My Pleasure",
        
        
      };
      function talk(){
        var user=document.getElementById("userbox").value
        document.getElementById("userbox").value=""
        document.getElementById("chatbotlog").innerHTML+="<font size=5 color='black'>"+"You : "+user+"</font><br>"
         if (user in know) {
           document.getElementById("chatbotlog").innerHTML+="<font size=5 color='#3ed13e'>"+"FarmBot : "+know[user]+"</font><br>"
         }
         else{
           document.getElementById("chatbotlog").innerHTML+="<font size=5 color='#3ed13e'>"+"FarmBot : "+"i didn't understand....</font><br>"
         }
      }
  
    </script>
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

<div id="header"></div>
<div class="container_wapper" style="margin-top: 180px">
  <div class="row">
    <div class="col-md-6" >
    <br></br><br></br><br>
    <img src="images\message.png" class="img-thumbnail" alt="about">		
    </div>
    
    <div class="col-md-6">
      <div class="heading-section-bold mb-4 mt-md-5">
        <div class="ml-md-0">
          <center><h1 style="color: #45a049;">Special Services</h1></center>
          <h2 class="mb-4">Messaging System</h2>
        </div>
      </div>
      <div class="">
        <p>
  
  <b>Messing system"</b>
  Web Messaging or cross-document messaging, is an API introduced in the WHATWG HTML5 draft specification, allowing documents to communicate with one another across different origins, or source domains[1] while rendered in a web browser. Prior to HTML5, web browsers disallowed cross-site scripting, to protect against security attacks. This practice barred communication between non-hostile pages as well, making document interaction of any kind difficult. Cross-document messaging allows scripts to interact across these boundaries, while providing a rudimentary level of security.
  </p>
  <p>

  In rural India, it is critical for farmers to obtain information early. Although television and radio have made it easy to spread information in remote areas, farmers need community support to transform these messages into actionable advice. Farmers could avail information by dialing a phone number and navigating through simple audio prompts, they also had the liberty to record questions their peers.<br><br><h4><b>Message Number - 9220592205(lead by code - XN4RH)</h4></b>.
  </p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" >
  <div class="row">
    
    <div class="col-md-6">
      <div class="heading-section-bold mb-4 mt-md-5">
        <div class="ml-md-0">
  
          <h2 class="mb-4">Chat Bot</h2>
        </div>
      </div>
      <div class="">
        <p>
  A chatbot is a computer program that simulates conversation with human users to complete some sort of service.
  <p>Improved Customer Interaction

  Identifying customer requirements and conducting personalized conversations
  Analyzing previous actions and suggesting products
  Saving time while providing most efficient solution to the query</p>
  <p>
  Chatbots act like virtual assistants that aim to provide excellent customer service and improve their shopping experience.
  Their 24x7 availability assists the e-commerce platforms to communicate with the customer and resolve their queries in no time.  
   AI chatbot solutions offered by the leading artificial intelligence service providers can aid e-commerce ventures to eliminate all physical barriers that hinder the brand-customer communication and generate higher profits.
  

  </p></br>
  <h3><b><p class="text-success">Want to try ?</p></b></p></h3>
  <p id="chatbotlog"></p></center><br>
<center><input type="text" name="userbox" id="userbox" placeholder="Enter your queries"><br><button class="btn btn-success" name="send" value="SEND" onclick="talk()">send</button></center>
  
      </div>
    </div>
    <div class="col-md-6" >
    <br></br><br></br><br>
    <img src="images\chatbot2.png" class="img-thumbnail" alt="about">		
    </div>
    
    
    
  </div>
</div>

</div>


</html>