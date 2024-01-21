<?php 
include("connect.php");
include('session.php');
$q = mysqli_query($conn,"SELECT * FROM usertb WHERE NAMES = '$login_session'");
    $row = mysqli_fetch_array($q,MYSQLI_ASSOC);
    $name = $row['NAMES'];
    $email1=$row['EMAIL'];
    $tel= $row['TELEPHONE'];
    $department= $row['DEPARTMENT'];
    $regno= $row['REGNO'];
    $role=$row['ROLE'];
    $error=" ";
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

.container{
    display: grid;
    height:inherit;
    align-content: center;
    align-items: center;
    width: 500px;
    border-radius:5px 5px;
    background-color: white;
    padding-top: 10px;
    padding-bottom: 10px;
    margin: auto;
}
.cont1{
    grid-row: 1;
    display: inline;
    width:100%;
    height:60px;
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
    width: 400px;
    height: 200px;
    margin-left: 20px;
}
.cont3{
    grid-row: 3;
    width: 400;
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
<body>
 <header>
    <div class="heading1">
    <h1><a href="profile.php">DASHBOARD</a></h1>
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
    <div class="container">
        <div class="cont1">
         <img src="pic/human-behavior-communication-symbol-yellow-male-user-accept.jpg" width="50px" height="50px"/>
         <h1><i>Computer Engineering</i></h1>
        </div>
        <div class="cont2" >
          <p><i>In computer engineeering we do computing as Business and as well as hobby, this contribute to our life inovation and creactivity in our field.</i></p>
          <hr>
          <img src="pic/1.png" width="200px" height="150px"/>
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