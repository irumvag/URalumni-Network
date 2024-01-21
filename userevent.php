<?php
include "session.php";
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
    $error=" ";
    if(isset($_POST['submit'])&&$_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"]))
    {
            $messages=mysqli_real_escape_string($conn,$_POST['message']);
            $targetDirectory = "/opt/lampp/upload_temp/";
            $filename=$_FILES['image']['name'];
            $filetemp=$_FILES['image']['tmp_name'];
            $targetFile = $targetDirectory . basename($filename);
            //echo "Target Directory Permissions: " . substr(sprintf('%o', fileperms($targetDirectory)), -4) . "\n";
            //echo "Target File Permissions: " . substr(sprintf('%o', fileperms($targetFile)), -4) . "\n";
            if (move_uploaded_file($filetemp, $targetFile)) {
                $imagePath = $targetFile;
                $sql = "INSERT INTO posts(sregno,message,image,timestamp) VALUES ('$regno','$messages','$imagePath',now())";
                if ($conn->query($sql) === TRUE) {
                    $error="Post is done successfull!";
                } else {
                    $error="Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                $error="Sorry, there was an error posting your post.";
            }
        }   
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Rwanda Alumni Network</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body, html {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            position:fixed;
            width:100%;
            background-color: #17a2b8;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav {
            margin-top:96px ;
            position:fixed;
            width: 100%;
            background-color: #444;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            border-radius: 5px;
            padding-right:30px;
            padding-left: 30px;
        }
        nav a:hover,.home:hover{
            background:green;
        }
        main {
            width:100%;
            padding: 20px;
            margin-left: 360px;;
        }

        .welcome {
            text-align: center;
            margin-bottom: 20px;
        }
        .main2 a{
            margin:0px;
            font-size:12px;
            color: black;
            text-decoration: none;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .post-form {
            margin:auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            width: 95%;
        }

        .posts {
            margin:auto;
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            width: 90%;
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

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 3px;
        }
        .main_all{
            display:flex;
            width:100%;
            z-index: 0;
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
            /*z-index: 0;
            height:800px;*/
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



    .container{
    display: grid;
    width: 600px;
    border-radius:5px 5px;
    background-color: #f5f5f5;
    margin-top: 10px;
    margin-bottom: 10px;
    margin:auto;
    padding: 30px;
    }
    .cont1{
    grid-row: 1;
    display: inline;
    width:100%;
    height:100px;
    }
    .cont1 img{
    float: left;
    border-radius: 50%;
    margin-left: 20px;
    padding-top:5px;
    }
    .cont1 h1{
    padding: 10px;
    margin-top: 0px;
   }
   .cont2{
    grid-row: 2;
    display: block;
    border: 1px solid gray;
    } 
    .cont2 p{
    font-size: medium;
    padding-left: 10px;
    margin: 0;
    width: 400px;
    margin-bottom: 10px;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .cont2 img{
    width: 550px;
    height: 400px;
    margin-left: 20px;
   }
   .cont3{
    grid-row: 3;
    width: 600;
    display: inline;
    height: 50px;
    padding-left: 10px;
    margin-top: 10px;
    }
    .cont3 table th td button{
    border: 0 solid white;
    }
    .cont3 p{
    float: left;
    inline-size: auto;
    padding-left: 20px;
    margin-left: 20px;
    background-color: transparent;
    border: 1px solid #333;
    align-self: center;
    border-radius: 20px;
    padding-right: 20px;
    }
    .cont4{
    width:400px;
    display: inline;
    margin-left: 20px;
    padding-left: 5px;
    }
    hr{
    margin: 0;
    padding: 0;
    }
    .cont4 form{
    display: inline;
    }
    .cont4 form textarea{
    border-radius: 20px;
    padding: 0;
    margin: 0;
    float: left;
    }
    .cont1 form label{
    display: inline-block; 
    }
    </style>
</head>
<body>
    <header>
        <h1>University Of Rwanda Alumni Network</h1>
    </header>
    <nav>
        <a id="now" href="userdashboard.php"><i class="fa-solid fa-house"></i></a>
        <a href="userprofile.php?userid=<?php echo $regno;?>"><i class="fa-solid fa-address-card"></i></a>
        <a href="message.php"><i class="fa fa-comment" aria-hidden="true"></i></a>
        <a href="usergroup.php"><i class="fa-solid fa-people-group"></i></a>
        <a href="event.php"><i class="fa-solid fa-calendar-days"></i></a>
    </nav>
    <div class="main_all">
    <div class="main2">
        <form action="" method="post">
        <div class="home"><input type="text" name="" id="" placeholder="Search Alumni network"></div>
        </form>
        <a href="userdashboard.php"><div class="home  now1">Home</div></a>
        <a href="userprofile.php?userid=<?php echo $regno;?>"><div class="home">Profile</div></a>
        <a href="message.php"><div class="home">Messages</div></a>
        <a href="usergroup.php"><div class="home">Groups</div></a>
        <a href="events.php"><div class="home">Events</div></a>
        <a href="logout.php"><div class="home">Logout</div></a><br>
    </div>
    <main>
        <div class="welcome">
            <h2>Welcome, <?php echo $login_session;?>!</h2>
            <p>Stay connected with your alma mater and fellow alumni.</p>
        </div>

        <div class="post-form">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" class="form" method="post" enctype="multipart/form-data">
                <p><?php echo $error;?></p>
            <h3 align="left">Create a Post</h3>
            <h2><img src="pic/1.png" id="image" ><?php echo $login_session;?>  <sub>Verfied</sub></h2>
                <textarea name="message" rows="4" placeholder="Share <?php echo $login_session;?> thoughts ..."></textarea>
                <br>
            Add to your post   <input type="file"name="image"accept="image/*" required > <input class="button" align="right" name="submit" type="submit" value="Post">
            </form>
        </div>

        <div class="posts">
            <h3>Recent Posts</h3>
            <?php
            $w=mysqli_query($conn,"SELECT * from posts");
            if($w){
           while($rs=mysqli_fetch_assoc($w))
           {
            $l=mysqli_query($conn,"SELECT NAMES from usertb WHERE REGNO='$rs[sregno]'");
            $k=mysqli_fetch_assoc($l);
            $fn=$k['NAMES'];
            echo '
            <div class="container">
            <div class="cont1">
             <img src="pic/human-behavior-communication-symbol-yellow-male-user-accept.jpg" width="50px" height="50px"/>
             <h1><i>'.$fn.'</i></h1>
             <p align="left">'.$rs['timestamp'].'</p>
            </div>
            <div class="cont2" >
              <p><i>'.$rs['message'].'</i></p>
              <hr>
              <img src="'.$rs['image'].'" width="200px" height="150px"/>
            </div>
            <div class="cont3">
                <table width="460px">
                    <th>
                        <td><i id="heart" class="fa-regular fa-heart"></i></td>
                        <td> <button>Like</button> </td>
                        <td></td>
                        <td> <button>share</button></td>
                        <td></td>
                        <td> <button>repost</button></td>
                        <td></td>
                        <td><button onclick="comment()">comment</button></td>
                    </th>
                </table>
            </div>
            <hr>
            <div class="cont4">
                <p id="cmt"></p>
                <form action="#"method="post" autocomplete="off">
                    <label><textarea cols="40" rows="3"></textarea></label>
                    <label><input type="button" value="comment" style="color: #fefefe;background-color: #333;border-radius: 10px;float: right;"/></label>
                </form>
            </div></div><br><br>';
           }
            }
            ?>
            <p>we are out of content ...</p>
        </div>

        <div class="group-list">
            <h3>Groups</h3>
            <ul>
                <li>Group 1</li>
                <li>Group 2</li>
                <li>Group 3</li>
                <!-- Display list of groups from the database -->
            </ul>
        </div>
    </main>
    </div>
    <footer>
        <p>&copy; <b id="time"></b> University of Rwanda Alumni Network. All rights reserved.</p>
        <script>
            var today= new Date().getFullYear();
    document.getElementById('time').innerHTML=today

            </script>
    </footer>
</body>
</html>
