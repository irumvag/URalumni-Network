<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include('session.php');
$error="* means is required";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uralumni";
$conn =mysqli_connect($servername, $username, $password, $dbname);
$q = mysqli_query($conn,"SELECT * FROM usertb WHERE NAMES = '$login_session'");
$row = mysqli_fetch_array($q,MYSQLI_ASSOC);
$email1=$row['EMAIL'];
if ($conn->connect_error) {
    $error= "Something went wrong".mysqli_error($conn);
}
if (isset($_POST['send'])) {
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $message =mysqli_real_escape_string($conn, $_POST['message']);
    if(empty($email)||empty($message)){
        $error="All field are required!";
    }
    else{
    $sql = "INSERT INTO feedbacktb VALUES(?,?,now())";
    $stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"ss",$email,$message);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    if (!$result) {
     $error = 'Thank you for taking the time to share your feedback with us!'; 
    }
     else {
        $error = 'something went wrong!';
    }
}
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <title>Support and Contact</title>
    <style>
      .form {
        max-width: 400px;
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

      input,
      textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      button {
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

      button:hover,.home button:hover{
        background-color: #ffdb4d;
      }
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
    #red{
        color:red;
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
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
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
    <div class="col2">
      <br>
      <br>
      <h1><b>Feedback form</b></h1>
      <p id="font">
      We value your opinion and appreciate your feedback! Your insights are crucial in helping us enhance and improve our services.
      Please take a moment to share your thoughts by filling out the feedback form below. Whether you have suggestions for improvement, 
      positive experiences to highlight, or areas where we can do better,
      your input is instrumental in shaping our ongoing efforts to provide the best possible experience for our users. 
      </p>
      <p id="red"><?php echo $error;?></p>
      <form class="form" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        
        <label for="email">Email:<b id="red">*</b></label>
        <input type="email" id="email" value="<?php echo $email1?>" name="email" required />

        <label for="message">Feedback Message:<b id="red">*</b></label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit" name="send" onclick="support()">Submit</button>
        <script>
            function support()
            {
                alert("<?php echo $error;?>");
            }
            </script>
        <br>
        <br>
        <br>
      </form>
      </div>
    <script>
      function logout() {
        const confirmLogout = confirm("Are you sure you want to logout?");
        if (confirmLogout) {
          alert("Logout successful!");
        }
      }
    </script>
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