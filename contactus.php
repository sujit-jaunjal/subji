<html>

<head>
    <title></title>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            $("#header").load("header.php");
        });
    </script>
    <style>
        .bellow{
            margin-top:190px;
            margin-left:150px;
            position:fixed;
        }
    </style>
</head>

<body>
    <div id="header"></div>
    <div class="bellow">
        <div id="templatemo_about" class="container_wapper">
            <div id="templatemo_contact" class="container">
                <h1>Contact Us ?</h1>
                <form action="/action_page.php">
                    <label for="fname">Name :</label>
                    <input type="text" id="name" name="name" placeholder="Your name..">

                    <label for="lname">Email :</label>
                    <input type="text" id="email" name="lastname" placeholder="Email..">

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

</body>

</html>