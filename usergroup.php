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
    $error="";
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
    </style>
</head>
<body>
    <header>
        <h1>University Of Rwanda Alumni Network</h1>
    </header>
    <nav>
        <a  href="userdashboard.php"><i class="fa-solid fa-house"></i></a>
        <a  href="userprofile.php?userid=<?php echo $regno;?>"><i class="fa-solid fa-address-card"></i></a>
        <a href="message.php"><i class="fa fa-comment" aria-hidden="true">></i></a>
        <a id="now" href="usergroup.php"><i class="fa-solid fa-people-group"></i></a>
        <a href="userevents.php"><i class="fa-solid fa-calendar-days"></i></a>
    </nav>
    <div class="main_all">
    <div class="main2">
        <form action="" method="post">
        <div class="home"><input type="text" name="" id="" placeholder="Search Alumni network"></div>
        </form>
        <a href="userdashboard.php"><div class="home">Home</div></a>
        <a href="userprofile.php?userid=<?php echo $regno;?>"><div class="home">Profile</div></a>
        <a href="message.php"><div class="home">Messages</div></a>
        <a href="usergroup.php"><div class="home  now1">Groups</div></a>
        <a href="userevents.php"><div class="home">Events</div></a>
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
            <h3 align="left">Create a Group</h3>
            <h2><img src="pic/1.png" id="image" ><?php echo $login_session;?>  <sub>Verfied</sub></h2>
                <p><a href="creategroup.php"><div class="home"><i class="fa-solid fa-plus"> Group</i></div></a></p>
            </form>
        </div>
    <div class="posts">
            <h3>Group posts</h3>
            <div class="container">
        <div class="cont1">
         <img src="pic/human-behavior-communication-symbol-yellow-male-user-accept.jpg" width="50px" height="50px"/>
         <h1><i>Computer Engineering</i></h1>
        </div>
        <div class="cont2" >
          <p><i>Job opportunity for IT front end.</i></p>
          <hr>
          <img src="pic/grobal.jpeg" width="600px" height="500px"/>
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
        </div>
</div>
<script>
function comment()
{
    document.getElementById('cmt').innerHTML="leave comment Here:"
}
</script>
</div>
            <?php
            $w=mysqli_query($conn,"SELECT * from posts");
            if($w){
           while($rs=mysqli_fetch_assoc($w))
           {
            $l=mysqli_query($conn,"SELECT NAMES from usertb WHERE REGNO='$rs[sregno]'");
            $k=mysqli_fetch_assoc($l);
            $fn=$k['NAMES'];
            echo '
            <div class="container form">
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
                <?php
                    $ll=mysqli_query($conn,"SELECT * from groups");
                while($kk=mysqli_fetch_assoc($ll)){
                echo '<li>
                <b>Group Name:</b><a href="groupview.php">'.$gn=$kk['group_name'].'</a><br>
                    <p><b>Group Discription:</b>'.$kk['g_description'].'</p>   
                </li>';
                }
                ?>
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
