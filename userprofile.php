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
    </style>
</head>
<body>
    <header>
        <h1>University Of Rwanda Alumni Network</h1>
    </header>
    <nav>
        <a  href="userdashboard.php"><i class="fa-solid fa-house"></i></a>
        <a id="now" href="userprofile.php?userid=<?php echo $regno;?>"><i class="fa-solid fa-address-card"></i></a>
        <a href="message.php"><i class="fa fa-comment" aria-hidden="true">></i></a>
        <a href="#"><i class="fa-solid fa-people-group"></i></a>
        <a href="userevents.php"><i class="fa-solid fa-calendar-days"></i></a>
    </nav>
    <div class="main_all">
    <div class="main2">
        <form action="" method="post">
        <div class="home"><input type="text" name="" id="" placeholder="Search Alumni network"></div>
        </form>
        <a href="userdashboard.php"><div class="home">Home</div></a>
        <a href="userprofile.php?userid=<?php echo $regno;?>"><div class="home now1">Profile</div></a>
        <a href="#"><div class="home">Messages</div></a>
        <a href="#"><div class="home">Groups</div></a>
        <a href="userevents.php"><div class="home">Events</div></a>
        <a href="logout.php"><div class="home">Logout</div></a><br>
    </div>
    <main>
    <h1 class="blue">Account Settings for <?php  echo $name." ";?>UR Alumna:</h1>
        <table class="table">
        <tr>
            <td><b>Redistration Number:</b> </td>
            <td><?php  echo $regno;?></td> 
        </tr>
        <tr>
            <td><b>Full Name:</b> </td>
            <td><?php  echo " ".$name;?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php  echo " ".$email1;?></td>
        </tr>
            <td><b>Department:</b> </td>
            <td><?php  echo " ".$department;?></td>
        </tr>
        </tr>
            <td><b>Role:</b> </td>
            <td><?php  echo " ".$role;?></td>
        </tr>
            </table>    
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <p>Change your account information <a href="useredit.php?userid=<?php echo $regno;?>" align="left"><div class="home">Edit</div></a></p>
        </form>
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
