<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to UR alumni network</title>
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     />
  <!--   <link rel="stylesheet" href="homecss.css"/> -->
     <script type="text/javascript" src="alumni.js"></script>
</head>
<style>
:root{
    --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    --colors: dodgerblue;
}
body,html{
    padding: 0;
    margin: 0;
    font-family: var(--font-family-sans-serif);
    
}
.bodyalign{
    padding-left: 200px;
    padding-right: 200px;
    justify-items: center;
    justify-content: center;
   /* background-color: hwb(0 100% 0% / 0.14);*/
    margin-top: 0;
    padding-top: 0;
    font: size 40px;
}
.header1{
    position:fixed;
    top:0;
    left:0;
    text-align: center;
    justify-content: center;
    width: 100%;
    color:var(--colors);
    background-color: azure;
    height: 80px;
    display: flex;
}
.headerimg{
    margin-top: 10px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    cursor: pointer;
}
.headerimg:hover{
    transform: translate(-18px, 18px);
}
.hds{
    padding-bottom:30px;
    font-size: 40px;
    margin-left: 2px;
    margin-top: 20px;
    font-family:italic;
}
.header2{
    top: 0px; 
    margin-left: 150px;
    margin-right: 200px;
    margin-top: 80px;
    padding-left:20% ;
    padding-right: 0%;    
}
.centered{
    list-style-type: none;
    text-align: center;
}
.header2 ul li{
    margin-left: 30px;
    cursor: pointer;
    float: left;
}
.header2 ul li a{
    display: block;
    text-decoration: none;
    padding: 20px;
    border-radius: 10px;
}
.header2 ul li a:hover{
    background-color:black;
    color: #fff;
    opacity: 0.8;
}
.main-col2{
    width: 100%;
    flex: 2;
}
.main-col2 iframe{
    width: 500px;
    height:500px;
}
.main-all{
    display:flex;
    width: 100%;
    padding: 5px;
}
.main-col1{
    flex: 1;
    flex-basis: auto;
}
.main-col3{
    flex:3;
}
footer a{
  font-weight: bold;
  font-family: 'Times New Roman', Times, serif;
  align-content: center;
}
.footer-all{
display: flex;
background-color:lightgray;
font-weight: 400;
text-align: left;
color:var(--colors);
padding-left: 100px;
padding-right: 100px;
margin: 0;
}
.footer-col1{
width: 20%;
text-align: center;
}
.footer-col1 img{
border-radius: 50%;margin-top: 50px;
transform: translate(5px,5px);
}
.footer-col2{
width: 15%;
}
.footer-col2 a{
cursor: pointer;
text-decoration: none;
padding: 30px;
color: darkcyan;
font-weight: 400;
}
.footer-col3{
width: 20%;
margin-left: 50px;
}
.copyright{
height: 30px;
background-color: grey;
color: #fff;
}
ul li ul{
    position: absolute;
    width: 200px;
    display: none;
}
ul li {display: inline-block;}
ul li:hover {background: #555;}
ul li:hover ul {display: block;}
ul li ul li{
    background:dodgerblue;
    display: block;
}
ul li ul li a{
    display: block !important;
}
ul li ul li a:hover{
    background-color: dodgerblue;
    color: #fff;
}
.centered a{
    display: inline-block;
}
.statuses
{
display: grid;
padding-top: 50px;
padding-left:100px ;
padding-right: 100px;
padding-bottom: 50px;
background-color: rgb(247, 240, 255);
width=100%;
margin-top:10px;
}
.status1{
    margin:auto;
    grid-column:1;
}
.status2{
    margin:auto;
    grid-column:2;
}
.status3{
    margin:auto;
    grid-column:3;
}
.content h3{
    color:gray;
}
.red{
    color:dodgerblue;
}
.images{
    display:grid;
}
.image1{
    grid-column:1;
}
.image2{
    margin-top:100px;
    grid-column:2;
    padding-left:30px;
}
a.visited{
    color:dodgerblue;
}
.flex{
    grid-row:1;
}
.flex2{
    margin-left:100px;
    grid-row:2;
}
</style>
<body>
    <header class="header1">
        <img class="headerimg" src="pic/ur3.png">
        <div class="hds" >Alumni Network </div>
    </header>
    <div class="header2" align="center">
        <ul class="centered">
            <li><a href="alumni.php"><i class="fa-solid fa-home"></i>Home</a></li>
            <LI><a href="events.php"><i class="fa-solid fa-champagne-glasses"style="font-size: 20px;"></i>Event</a></LI>
            <li><a href="achievement.php"><i class="fa-solid fa-hands-clapping" style="font-size: 20px;"></i>Achievements</a></li>
            <li><a href="opportunity.php"><i class="fa-solid fa-award"style="font-size: 20px;"></i>Opportunities</a></li>
            <li><a href="#"><i class="fa-solid fa-user"style="font-size: 20px;margin-left:2px"></i>login</a>
             <ul>
                    <li><a href="sign up.php"><i class="fa-solid fa-registered"></i>Register</a></li>
                    <li><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i>login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <hr width="90%" style="margin-bottom: 0;padding-bottom: 0;font-size: large;"/>
    <div class="bodyalign">
        <div class="statuses">
            <div class="status1">
                <h1>1M+</h1>
                <P>Alumni can join</P>
                <p><a href="sign up.php">UR Alumni network</a></p>
            </div>
            <div class="status2">
            <h1>800,000+</h1>
                <P>On Linkedin</P>
                <p><a href="#">Join on Linkedin</a></p>
            </div>
            <div class="status3">
            <h1>200,000+</h1>
                <P>On Facebook</P>
                <p>See a list of <a href="#">Join on Facebook</a></p>
            </div>
        </div>
        <div class="content">
            <h3>ALUMNI NETWORK</h3>
            <h2>Join the exclusive UR Alumni Network</h2>
            <p>Our network may be small than linkedin, but tha means it's full 
                of opportunities for worm connections with other Alumnis.
                Reach out to your peers one-on-one or join groups of like minded graduates.
                Either way, you'll meet with the started experience of having worked hard to obtain a degree.
            </p><br>
            <p><b>On the alumni nwetwork you can:</b></p>
            
                <li>Connect with like-minded alumni who work in your field of choise</li>
                <li>Get help from from other alumni or be a mentor to others</li>
                <li>Set your preference to macthed with other alumni who share similar interests</li>
                <li>List your business in alumni business directory</li>
                <li>Easily update your profile using  your Linkedin sign-on</li>
            </ul><br><br>
            <div class="red">
                <a href="login.php">Activate your profile</a>
            </div>
            <br>
            <br>
            <h3>ALUMNI CHAPTERS</h3>
            <h1>GET to know the locals</h1>
            <p>
                Graduating from a national wide university means you can conect with alumni arround the country and meet one in your own backyard. Join your local alumni chapter to gice 
                back to your local community, network or just have fun
            </p></br>
            <div class="red">
                <p><a href="#">Find your chapter</a></p><br>
            </div>
        </div>
        <div class="images">
            <div class="image1">
                <div class="flex">
                    <img src="pic/arton70.jpg" width="200px" height="200px" alt="">
                    <img src="pic/arton69.jpg"width="400px" height="300px" alt="">
                </div>
                <div class="flex2">
                <img src="pic/arton1718.jpg"width="300px" height="200px" alt="">
                </div>
            </div>
            <div class="image2">
                <h2>NETWORKING</h2>
                <h1>Connect with follow alumni</h1>
                <p>Meet UR Alumni who are preparing for their careers too.
                    connect with alumni in your flied on Linkedin to build your professional network.
                    Find professional network.Find alumni on Facebook to get know them better.
                </p><br>
                <p><a href="#"><div class="red">Connect on Linkedin</div></a></p><br>
                <p><a href="#"><div class="red">Connect to Facebbok</div></a></p>
            </div>
        </div>
     <main class="main-all">
        <div class="main-col1">
        <fieldset>
                <legend>Alumni Association history</legend>
            <p>The university of Rwanda (UR) ; <br>
                the Unique Public Institution has launched its Alumni Association <mark>on the 18th March 2017.</mark>
                The newly established body is affiliated to about 90, 000 graduates 
                trained from the 6 former Public High Learning Institutions.
                In UR alumni network we have group based per departments and schools.<br><br>
                <img src="pic/phlip.jpg" width="300px" height="200px"/><br>
                |We are happy to see you in this space!</br></p>
                <h1>Alumni achievements</h1>
                   <i class="fa-solid fa-aword" style="font-size:20px;"></i> Alumni Achievement accomplishment and success stories of amazing achievements.
                <p>
                    let's celebrate the achievements of
                    <table border="0"cellpadding="0"cellspacing="10">
                        <tr>
                            <th>Bizimungu Alex</th>
                            <th>Achievements</th>
                        </tr>
                        <tr>
                            <td>UR alumna from </br> Computer engineeering</td>
                            <td>   He is Ceo of  Rwanda innovation group.</td>
                        </tr>
                    </table>
                </p>
                </fieldset>
        </div>
        <div class="main-col2">
            <!--<iframe src="post.php" frameborder="0">alumni networking</iframe>-->
           
        </div>
        <div class="main-col3">
        </div>
     </main>
    </div>
        <div class="footer-all">
            <div class="footer-col1">
                <img src="pic/ur3.png" width="250px" height="250px"/>
                <h1>University of Rwanda</h1>
            </div>
            <div class="footer-col2">
                <H1>KEY Links</H1>
                <a href="#" class="backg"><i class="fa-solid fa-house"></i>Home</a><br><br><br>
                <a href="about us.php"><i class="fa-solid fa-bars"></i>About UR alumni</a><br><br><br>
                <a href="events.php"><i class="fa-solid fa-users"></i>Events</a><br><br><br>
                <a href="achievement.php"><i class="fa-solid fa-award"></i>Achievements</a><br>
            </div>
            <div class="footer-col3">
                <h1>News letter from Alumni</H1><br><br><br>
                    <form action="newletter.php" method="post" align="center">
                        <input type="email" placeholder="Enter your email" name="email" style="border-radius:5px;width: 200px;height: 25px;padding: 3px;"required/><br><br><br><br>
                        <button type="submit" name="send" onclick="agreed()" style="font-size: 30px;background: transparent;color: dodgerblue;">Subscribe</button>
                    </form>
                    <p id="timming"></p>s
            </div>
            <div class="footer-col3">
                <address>
                    <h1>UR ADDRESS</h1>
                    <p><i class="fa-solid fa-location-dot"></i>KK 737 Street ,Gikondo ,Kigali</p>
                    <p>PO BOX 4285 Kigali-Rwanda</p>
                    <p><i class="fa-solid fa-envelope"></i>info@ur.ac.rw</p>
                    <p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.4835176780225!2d30.07227861421367!3d-1.9602313985709072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca67dca6324cd%3A0x2510bd8012b3c1fd!2sUniversity+of+Rwanda+College+of+Business+and+Economics.!5e0!3m2!1sen!2srw!4v1538055908303" style="border:0" allowfullscreen="" width="285" height="200" frameborder="0"></iframe></p>
                </address>
            </div>
            <div class="social-media">
                <h1>Follow us on</h1>
                <p><i class="fa-brands fa-facebook"></i>&nbsp;&nbsp;facebook</p><br>
                <p><i class="fa-brands fa-instagram"></i>&nbsp;&nbsp;Instagram</p><br>
                <p><i class="fa-brands fa-linkedin"></i>&nbsp;&nbsp;Linkedin</p><br>
                <p><i class="fa-brands fa-youtube"></i>&nbsp;&nbsp;Youtube</p>
            </div>
        </div>
       <p align="center" id="copy"></p>
       <script>
        var today= new Date().getFullYear();
    document.getElementById('copy').innerHTML=today+'&copy;All right are reserved.';
       </script>
</body>
</html>
