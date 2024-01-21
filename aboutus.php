<?php 
include("connect.php");
include('session.php');
if($conn)
{
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UR alumni profile</title>
</head>
<link
    rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     />
<style>
    body,html{
        background-color: rgba(128, 128, 128, 0.334);
        padding: 0;
        margin: 0;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    }
    header{
        background-image: linear-gradient(to left,white,lightblue,gray,lightgreen,lightgray);
        margin: auto;
        background-color: dodgerblue;
        display: grid;
        height: auto;
        border-radius: 30px;
        width: 80%;
        height: 100px;
        cursor: pointer;
    }
    .heading1{
        padding-left: 0px;
        font-size: 20px;
        /*margin: auto;*/
        grid-column: 1;
    }
    .heading2{
        padding-top:6px;
        text-align: center;
        grid-column: 2;
        text-align:left;
    }
    .heading3{
        margin: auto;
        grid-column: 3;
        float: right;
    }
    .heading3 h2 img{
        grid-column: 3;
        border-radius: 50%;
        border: 2px greenyellow double solid;
        width: 40px;
        height: 40px;
        padding-top:12px;
    }
    .heading1 h1 a{
        padding-left: 150px;
        text-decoration: none;
        color: dodgerblue;
    }
    .heading2 h1 b{
        color:white;
    }
    main{
        display: flex;
        padding-top: 0;
        padding-left: 000px;
        padding-right: 100px;
    }
     .col1{
        /*grid-column: 1;*/
        height: auto;
        width: 200px;
        margin-left: 100px;
        padding: 50px;
        border-right: 2px solid white;
    }
    .down{
        margin-top: 400px;
        align-items: last baseline;
    }
    a{
        text-decoration:none;
    }
    .home{
       /* text-decoration:none;*/
        padding:10px;
        margin-bottom:5px;
        width: 200px !important;
        background-color: dodgerblue;
        color: white;
        text-align: center;
        border-radius: 10px;
        font-style: bold;
        font-size: 20px;
        cursor: pointer;
    }
      .col2{
        padding: 10px;
        /*grid-column: 2;*/
        width: 75%;
        height: auto;
        margin-left:0;
        margin-right:200px;
    }
    hr{
        padding: 0;
        margin: 0;
    }
    .footercontent{
        margin: auto;
        width: 80%;
    }
    .footercontent ul{
        list-style: none;
        display: inline-block !important;
        text-align: center;
    }
    .footercontent ul li{
        display: inline;
        padding: 5px;
        margin: 2px;
        font-size: 15px;
        border-right: 2px white solid;
        border-radius: 1px;
        cursor: pointer;
    }
    .footercontent ul li a{
        text-decoration: none;
        text-align: center;
        font-size: 20px;
    }
    .fa-plus{
        font-size: 50px;
    }
    .home:hover{
        background-color: #ffdb4d;
    }
    .user{
        font-family:italic;
        margin-bottom:20px;
    }
    .main-all{
        display: flex;
        width: 100%;
        padding: 5px;
        font-size: 20px;
        word-spacing: normal;
    }
    .main-all p{
        margin:20px;
    }
    .main-all p b{
        color:dodgerblue;
        margin: 10px;
        font-size:25px;
    }
</style>
<body>
 <header>
    <div class="heading1">
    <h1><a href="profile.php">Admin Portal</a></h1>
    </div>
   <div class="heading2"><h1><b>UR Alumni Network</b></h1></div>
    <div class="heading3">
    <a href="userdata.php"><h2 class="user"><?php echo $login_session;?>&nbsp;&nbsp;<img src="pic/Untitled.png" alt="images"></h2></a>
    </div>
 </header> 
 <hr>  
 <main>
    <div class="col1">
        <a href="profile.php"><div class="home"></i></i>Overview</div></a>
        <a href="user.php"><div class="home"><i class="fa-solid fa-user" style="color: #000000;"></i>Users</div></a>
        <a href="groups.php"><div class="home"><i class="fa-solid fa-pen-nib" style="color: #63452c;"></i>Groups</div></a>
        <a href="message1.php"><div class="home"><i class="fa-solid fa-people-robbery" style="color: #241f31;"></i>Messages</div></a>
        <a href="posts.php"><div class="home"><i class="fa-brands fa-cc-discover"></i></i>Review posts</div></a>
        <a href="events.php"><div class="home"><i class="fa-solid fa-gift"></i>Events Plan</div></a>
        <div class="down">
            <!--<div class="home"><a><i class="fa-solid fa-right-to-bracket"></i>Login</a></div>-->
            <a href="logout.php" onclick="logout()"><div class="home">Logout</div></a>
            <script>
                function logout(){
                    var r=confirm("Do you want to logout?");
                    if(r==true)
                    {
                        <?php header("location:logout.php");?>
                    }
                }
            </script>
        </div>
        </div>
    <div class="col2">
    <h1>All about UR alumni network</h1>
     <div class="main-all">
        <p><b>Vision and Mission</b> </br>
         Vision
        To be a leading University that develops highly enterprising graduates prepared and dedicated to building a more just and sustainable society locally, nationally and globally, with appropriate innovations that advance quality of life.

        Mission
        <mark>
        To support the development of Rwanda by discovering and advancing knowledge, committed to the highest standards of academic excellence , where students are prepared for lives of service, leadership and solutions.
        </mark>
        <br><br>
        <b>History of UR alumni network</b>
        <br><br>
        The university of Rwanda (UR) ; the Unique Public Institution has launched its Alumni Association on the 18th March 2017.


        The newly established body is affiliated to about 90, 000 graduates trained from the 6 former Public High Learning Institutions.

        A Founding Leadership Committee of 12 prominent people is now on board to operate at the advancement of our Institution ; using their social and professional networks to create benefiting partnerships with the university, giving of their time for teaching current students, supporting the placement of trainees in their societies, etc.

        The University of Rwanda is committed to multiply organization of special events, with the intention of celebrating a UR education. Those important moments will serve at connecting students who are about to complete their bachelor’s degree and recent graduates to former UR officials, CEOs and Successful company Owners. Those schedules will be opportune occasions for exceptional ambassadors to sharing youth their skills and acquired experience. Business cards will be as well labeled as another tool to jobs and a career – opening opportunity, thanks to the influence of the invited Alumni.

        A link on the UR website will soon connect the public to the respective college websites (which function as the Alumni chapters), for useful information on the university achievements and various exciting events. Please use the bellow contact person and let us know if you have any question on the UR Alumni Association.
</p>
<p>
<b>
Objectives (to include) :</b><br>

    Develop interdisciplinary, problem-based academic programmes aligned with Rwanda development needs.
    Integrate IT-based resources from around the world.
    Ensure students have the leadership, entrepreneurship and management skills needed to create employment.
    Prepare students for service to their communities and country through applied service learning programmes nationally and internationally
    Create applied, evidence-driven, research centres focused on problem solving, aligned with Rwanda development needs.
    Develop continuous education programs for upgrading skills and knowledge.</p> 
         </div>
    </div>
 </main>
 <hr>
 <footer>
    <div class="footercontent">
        <ul>
            <li><a href="aboutus.php"> About Us</a></li>
            <li><a href="contact us.php">Contact Us</a> </li>
            <li><a href="support.php">Get Support</a> </li>
            <li><a href="support.php">Give Feedback</a> </li>
        </ul>
    </div>
  <p align="center">&copy;2024 University of Rwanda Alumni Network all right are reserved.</p>
 </footer>
</body>
</html>