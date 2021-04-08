<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    session_start();
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $("#header").load("header.php");
        });
    </script>
</head>

<body>
    <div id="header"></div>

    <div class="banner" id="templatemo_banner_slide">
        <ul>
            <li class="templatemo_banner_slide_01">
                <div class="slide_caption">
                    <h1>Farmer's Background</h1>
                    <p>Agriculture is the backbone of the Indian Economy"- said Mahatma Gandhi six decades ago. Even today, the situation is still the same, with almost the entire economy being sustained by agriculture, which is the mainstay of the villages. It contributes 16% of the overall GDP and accounts for employment of approximately 52% of the Indian population.
                    </p>
                </div>
            </li>
            <li class="templatemo_banner_slide_02">
                <div class="slide_caption">
                    <h1>About Subji</h1>
                    <p>Once in the Farmers’ Portal, a farmer will be able to get all relevant information on specific subjects around his village/block /district or state. This information will be delivered in the form of text, SMS, email and audio/video in the language he or she understands. These levels can be easily reached through the Map of India placed on the Home page.</p>
                </div>
            </li>
            <li class="templatemo_banner_slide_03">
                <div class="slide_caption">
                    <h1>Additional Features</h1>
                    <p>Farmers’ Portal is an endeavour in this direction to create one stop shop for meeting all informational needs relating to Agriculture, Animal Husbandry and Fisheries sectors production, sale/storage of an Indian farmer. Farmers will also be able to ask specific queries as well as give valuable feedback through the Feedback module specially developed for the purpose.</p>
                </div>
            </li>
        </ul>
    </div>

    <div id="templatemo_about" class="container_wapper">
        <div class="container-fluid">
            <h1>About Our Organization</h1>
            <div class="col-sm-6 col-md-3 about_icon">
                <div class="imgwap mission"><i class="fa fa-rocket"></i></div>
                <h2>Revenues</h2>
                <p>The sole purpose of this Organization app is to increase the revenue for farmers in our country.</p>
            </div>
            <div class="col-sm-6 col-md-3 about_icon">
                <div class="imgwap product"><i class="fa fa-cubes"></i></div>
                <h2>Opportunities</h2>
                <p>We not only provide farmers a better option to sell products, but also courier agencies to collaborate.</p>
            </div>
            <div class="col-sm-6 col-md-3 about_icon">
                <div class="imgwap testimonial"><i class="fa fa-bar-chart-o"></i></div>
                <h2>Growth</h2>
                <p>Growth in the income of farmers as they gain profit from end-users itself.</p>
            </div>
            <div class="col-sm-6 col-md-3 about_icon">
                <div class="imgwap statistic"><i class="fa fa-comments"></i></div>
                <h2>Chat Bot</h2>
                <p>We provide chat bot service so that you can contact us 24/7.</p>
            </div>
            <div class="clearfix testimonial_top_bottom_spacer"></div>
            <div class="col-xs-1 pre_next_wap" id="prev_testimonial">
            </div>

        </div>
        <!--templatemo_about-->
        <div id="templatemo_events" class="container_wapper">
            <div class="container-fluid">
                <h1>Latest Entries</h1>

                <div id="myOutputDiv">
                </div>
                <script>
                    function reg() {
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {


                            if (this.readyState == 4 && this.status == 200) {
                                var out = JSON.parse(xhttp.responseText);
                                render(out);
                            }
                        }
                        xhttp.open("GET", "latestentry.php", true);


                        xhttp.send();
                    }
                    reg();


                    function render(out) {

                        console.log(out)

                        let str1 = ' <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0"><div class="event_box_wap event_animate_left"><div class="event_box_img" style="border: 1px solid #000000"><div class="row"> <div class="products"> <div class="inner"> <div class="col-md-3" > <a href="#"><img class="img-fluid" src="images/product-1.jpg" alt="" height="250" width="250"></a> </div><div class="col-md-4" style="margin-left: 60px; margin-top: 20px;"> Product type:<input type="text" placeholder="Product Type " value="';
                        let str6 = '"> Product Title:<input type="text" placeholder="Title" value="';
                        let str2 = '"> Description:<textarea class="span6" rows="3" placeholder="Description">';
                        let str7 = '</textarea> </div><div class="col-md-4"> Product Price:<input type="text" placeholder="Product price " value="';
                        let str3 = '"> Product Weight:<input type="text" placeholder="Product Weight" value="';
                        let str4 = '"> State:<input type="text" placeholder="State" value="';
                        let str5 = '"> <buttron class="btn btn-success" id="payment"';
                        let str8 = '"></a></button> </div></div></div></div></div></div></div>';


                        for (var key in out) {
                            let result = str1 + out[key].name + str6 + out[key].title + str2 + out[key].productdes + str7 + out[key].price + str3 + out[key].weight + str4 + out[key].state + out[key].sts + str5 + str8;
                            document.getElementById("myOutputDiv").innerHTML += result;

                        }
                        document.getElementById("payment").onclick = function() {
                            window.location.href = "paymentoption.html";
                        }
                    }
                </script>
            </div>
        </div>
        <div id="templatemo_timeline" class="container_wapper">
            <!-- <h1>Events</h1> -->
            <div class="container-fluid">
                <div class="time_line_wap">
                    <div class="time_line_caption">Upcoming</div>
                    <div class="time_line_paragraph">
                        <h1>Grain Tech fair 2020</h1>
                        <p>
                            <span class="glyphicon glyphicon-user"></span> <a href="#">Fri, 10 Jan</a> &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-bookmark"></span> <a href="#">Pune, Maharashtra</a>, <a href="#">Responsive</a> &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-edit"></span> <a href="#">12 pm </a>
                        </p>
                        <p>India has over 5000 Rice mills, 1200 Flour milling plants in organized sector apart from over 2000 in small scale, 200 Soybean plants, 2000 Spices crushing plants, 2000 Pulses mills, 2000 Oilseeds crushing units, 1000 Feed Units, 100 Bio-fuel and energy projects, 1000 Coffee plants etc.,GrainTech Fair 2020 will seek to reduce the technological gap existing in the processing and supply chain<a href="https://graintechindia.com/">more...</a></p>
                    </div>
                </div>
                <div class="time_line_wap">
                    <div class="time_line_caption">2 weeks ago</div>
                    <div class="time_line_paragraph">
                        <h1>International Symposium on AI based Technologies in Agriculture</h1>
                        <p>
                            <span class="glyphicon glyphicon-user"></span> <a href="https://allevents.in/pune/international-symposium-on-ai-based-technologies-in-agriculture/200018365788344">Tue, 25th Dec</a> &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-bookmark"></span> <a href="https://allevents.in/pune/international-symposium-on-ai-based-technologies-in-agriculture/200018365788344">HTML5</a>, <a href="https://allevents.in/pune/international-symposium-on-ai-based-technologies-in-agriculture/200018365788344">Hyatt Agency & Residency</a> &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-edit"></span> <a href="https://allevents.in/pune/international-symposium-on-ai-based-technologies-in-agriculture/200018365788344">7-12 pm</a>
                        </p>
                        <p>Growing pressure on the natural resources such as land and water, improving agricultural productivity, increasing concerns about the sustainability of industrial farming practices, maintenance of soil health and reducing the pesticide use in produce necessitate sustainable climate-smart and precision agriculture strategies. The climate-smart and precision agriculture involve, obtaining the solutions with advanced technologies such as the application of robotics, drones, IoTs, Geo-informatics, precision machinery for efficient farming on a sustainable basis <a href="https://allevents.in/pune/international-symposium-on-ai-based-technologies-in-agriculture/200018365788344">more...</a></p>
                    </div>
                </div>
                <div class="time_line_wap">
                    <div class="time_line_caption">one month ago</div>
                    <div class="time_line_paragraph">
                        <h1>World Krushi exhibition</h1>
                        <p>
                            <span class="glyphicon glyphicon-user"></span> <a href="https://dindoripranit.org/event/world-krushi-exhibition/">8th Dec</a> &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-bookmark"></span> <a href="https://dindoripranit.org/event/world-krushi-exhibition/">Nanded, Maharashtra</a>, <a href="https://dindoripranit.org/event/world-krushi-exhibition/">CSS3</a> &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-edit"></span> <a href="https://dindoripranit.org/event/world-krushi-exhibition/">8 pm Onwared</a>
                        </p>
                        <p>There are several business opportunities in the Agri. Export area. Government of India is making all efforts to promote Agri Export. Keeping this in mind, MCCIA Agribusiness Committee would be organizing a ‘National Summit on Agriculture Export’ with a special focus on Fresh Fruits, Vegetables and Flowers grown in Maharashtra State. Also, there will be a small Exhibition on Agri Export <a href="https://dindoripranit.org/event/world-krushi-exhibition/">more..</a>
                        </p>
                    </div>
                </div>
                <div class="time_line_wap">
                    <div class="time_line_caption">15 Nov 2019</div>
                    <div class="time_line_paragraph">
                        <h1>MAHATech</h1>
                        <p>
                            <span class="glyphicon glyphicon-user"></span> <a href="https://maha-tech.com/">24 May</a> &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-bookmark"></span> <a href="https://maha-tech.com/">Nagpur, Maharashtra</a>, <a href="https://maha-tech.com/">Animation</a> &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-edit"></span> <a href="https://maha-tech.com/">3-9 pm</a>
                        </p>
                        <p>"International state-of-the-art Technologies, Equipment's & Accessories Industrial Exhibition"
                            MAHATech has filled the need of the industry by providing the much needed interactive platform. MAHATech's focus is Small & Medium Enterprises from Engineering, Machinery, Machine Tools, Process Equipment's, Electricals & Electronics, Instrumentation & Automation equipment's <a href="https://maha-tech.com/">more..</a></p>
                    </div>
                </div>
                <div class="time_line_wap">
                    <div class="time_line_caption">20 April 2019</div>
                    <div class="time_line_paragraph">
                        <h1>International Conference on Agriculture ICAG
                        </h1>
                        <p>
                            <span class="glyphicon glyphicon-user"></span> <a href="https://conferencealert.com/conf-detail.php?ev_id=302965">20 April</a> &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-bookmark"></span> <a href="https://conferencealert.com/conf-detail.php?ev_id=302965">Mumbai, Maharashtra</a>, <a href="https://conferencealert.com/conf-detail.php?ev_id=302965">CSS3</a> &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-edit"></span> <a href="https://conferencealert.com/conf-detail.php?ev_id=302965">9 am Onwared</a>
                        </p>
                        <p>The ICAG conference offers a track of quality R&D s from key experts and provides an opportunity in bringing in the new techniques and horizons that will contribute to Advanced research on Science, Engineering and Technology in the next few years. All submitted papers will be under peer review and accepted papers will be published in the conference proceeding. Both academia and industries are invited to present their papers dealing with state-of-art research and future developments
                            <a href="https://conferencealert.com/conf-detail.php?ev_id=302965"> more..</a>
                        </p>
                    </div>
                </div>
                <div class="time_line_wap">
                    <div class="time_line_caption">5 April 2019</div>
                    <div class="time_line_paragraph">
                        <h1>National Conference on Advances in Science, Agriculture, Environmental & Biotechnology </h1>
                        <p>
                            <span class="glyphicon glyphicon-user"></span> <a href="https://www.allconferencealert.com/event-detail.html?ev_id=258245&eventname=national-conference-on-advances-in-science-agriculture-environmental-">5 April</a> &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-bookmark"></span> <a href="https://www.allconferencealert.com/event-detail.html?ev_id=258245&eventname=national-conference-on-advances-in-science-agriculture-environmental-">Shirur, Maharashtra</a>, <a href="https://www.allconferencealert.com/event-detail.html?ev_id=258245&eventname=national-conference-on-advances-in-science-agriculture-environmental-">Responsive</a> &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-edit"></span> <a href="https://www.allconferencealert.com/event-detail.html?ev_id=258245&eventname=national-conference-on-advances-in-science-agriculture-environmental-">10 am Onwared</a>
                        </p>
                        <p>National Conference on Advances in Science, Agriculture, Environmental & Biotechnology NCASAEB. NCASAEB addresses the rapid strides and technological advancements currently witnessed in the fields of . English is the official language of the conference. We welcome paper submissions. Papers presented in the conference will be submitted for inclusion into Conference proceedings <a href="https://www.allconferencealert.com/event-detail.html?ev_id=258245&eventname=national-conference-on-advances-in-science-agriculture-environmental-">more...</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="templatemo_contact" class="container">
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
        </div> -->
        <div>
                <img src="images/space2.png"></img>
        </div>

    </div>
    <div id="templatemo_footer" style="background-color: #4CAF50;">
        <div>
            <div>

            </div>
           
            <center>
                <p id="footer">
                    <ul class="list-inline social-link">
                        <li>
                            <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-github fa-2x"></i></a>
                        </li>
                        <li id="Copy_right">
                        <a href="contactus.php"><i>contact us</i></a>
                            <h5>&copy; 2020 All Rights Reserved </h5>
                        </li>

                    </ul>
                </p>
            </center>

        </div>
    </div>
    <script>
        function next()
        {
            window.location.href="contactus.php";
        }
        </script>
</body>

</html>