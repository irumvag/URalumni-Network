<?php 
include("connect.php");
include('session.php');
if($conn)
{
    $q = mysqli_query($conn,"SELECT * FROM usertb WHERE NAMES = '$login_session'");
    $row = mysqli_fetch_array($q,MYSQLI_ASSOC);
    $name = $row['NAMES'];
    $email1=$row['EMAIL'];
    $tel= $row['TELEPHONE'];
    $department= $row['DEPARTMENT'];
    $regno= $row['REGNO'];
    $role=$row['ROLE'];
    $error="";
}
if(isset($_POST['send']))
{
    $gn= $_POST['event_name'];
    $i=0;
    $ll=mysqli_query($conn,"SELECT * from events Where event_name='$gn'");
    while($rowe = mysqli_fetch_array($ll)){
        $i=$i+1;
    }
    $gd= $_POST['e_description'];
    if(!empty($gn) && !empty($gd) && !empty($gd))
    {
        if($i==0)
        {
    $query = mysqli_query($conn,"INSERT INTO events (event_name,e_description,event_hoster,timestamp) VALUES('$gn','$gd','$regno',NOW())");
    $error="Events created sucessfull";
    }
    else
    {
        $error="Sorry Event Already exist";
    }
}
    else{
        $error="Failed to create Event";
    }
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

.dashboard-container {
  max-width: 1200px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
}

.overview-section {
  margin-bottom: 20px;
}

.overview-item {
  display: flex;
  justify-content: space-between;
  padding: 10px;
  background-color: #f0f0f0;
  border-radius: 4px;
  margin-bottom: 10px;
}
.form {
        margin:auto;
        max-width: 500px;
        margin-top: 20px;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding-right:50px;
      }

      label {
        display: block;
        margin-bottom: 8px;
        color: #1a1a1a;
      }

    
      textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      .button {
        display: inline-block;
        font-size: 1em;
        background-color: dodgerblue;
        color: #1a1a1a;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        padding: 10px;
        transition: background-color 0.3s;
      }

      .button:hover,.home .button:hover{
        background-color: #ffdb4d;
      }
      #image{
        width: 30px;
        height: 30px;
        border-radius:50%;
        position: relative;
        background:transparent;
    }
    .form h2{
        border-radius:10px;
        background:white;
        padding:5px;
        width:(<?php echo strlen($login_session);?>*1.5)px;
    }
    .form h2 sub{
        background:green;
        padding:2px;
        border-radius:5px;
    }
    .main_all{
        padding-top:110px ;
            display:flex;
            width:100%;
            /*z-index: 0;*/
            height:800px;

        }
        .main2{
            margin-top: 40px;
            width:350px;
            display:block;
            text-align:center;
            position:fixed;
        }
        .table {
         width: 100%;
         border-collapse: collapse;
         margin-top: 20px;
        }

      .table th, .table td {
       border: 1px solid #dddddd;
       padding: 8px;
       text-align: left;
        }
        .table tbody tr:nth-child(even) {
         background-image: linear-gradient(to left,white,gray);
        }
        .home{
        padding:10px;
        background-color:white;
        color: black;
        text-align: center;
        border-radius: 10px;
        font-style: bold;
        font-size: 20px;
        cursor: pointer;
        margin-bottom:5px;
    }
    #now{
        border-bottom:7px #17a2b8 solid;
        width: 100px;
    }
    .now1{
        background:#17a2b8;
    }
    .main2 form input[type=text]
    {
        border-radius:10px;
        width: 90%;
        height: 30px;
    }
    .message{
        color:green;
    }
.group-list {
            list-style: none;
            padding: 0;
        }

        .group-list li {
            background-color: #eee;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
        }
    @media (max-width: 600px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            .heading1 {
                margin-bottom: 10px;
            }

            .heading2 {
                text-align: center;
                margin-bottom: 10px;
            }

            .heading3 {
                order: -1;
                margin-bottom: 10px;
            }

            .col1, .col2 {
                width: 100%;
            }

            .down {
                margin-top: 10px;
            }
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
        <a href="post.php"><div class="home"><i class="fa-brands fa-cc-discover"></i></i>Review posts</div></a>
        <a href="eventes.php"><div class="home"><i class="fa-solid fa-gift"></i>Events Plan</div></a>
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
<form class="post-form form" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <h3>Add Events:</h3>
        <p class="message"><?php echo $error;?></p>
        <label for="group_name">Event title:</label>
        <input type="text" id="group_id" name="event_name" required>

        <label for="g_description">Event details:</label>
        <textarea id="g_description" name="e_description" required></textarea>

        <!-- You can use hidden input for timestamp or generate it on the server side -->
        <input type="hidden" id="timestamp" name="timestamp" value="<?php echo time(); ?>">

        <input type="submit" name="send" value="Submit">
    </form>

        <div class="group-list">
            <h3>Events</h3>
            <ul>
                <?php
                $ll=mysqli_query($conn,"SELECT * from events");
                while($kk=mysqli_fetch_assoc($ll)){
                echo '<li>
                <div class="event1">
                <h1>'.$gn=$kk['event_name'].'</h1>
                <P>'.$kk['e_description'].'</P>
                 <p><a href=""><u>R</u>egist here!</a></p>
              </div> 
              </li>';
                }
                ?>
            </ul>
        </div>
        </main>
 <hr>
 <footer>
    <div class="footercontent">
        <ul>
            <li><a href="aboutus.php"> About Us</a></li>
            <li><a href="contact us.php">Contact Us</a> </li>
            <li><a href="support.php">Get Support</a> </li>
            <li><a href="feedback.php">Give Feedback</a> </li>
        </ul>
    </div>
  <p align="center">&copy;2024 University of Rwanda Alumni Network all right are reserved.</p>
 </footer>
</body>
</html>