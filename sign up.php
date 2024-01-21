<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$server="localhost";
$user="root";
$pass="";
$db="uralumni";
$error=$error1=$error3="";
$conn=mysqli_connect($server,$user,$pass,$db);
if($conn->connect_error)
{
    echo "<script>alter(\"connection failed!\");</script>";
    header("location:alumni.php");
    die ("error".mysqli_error($conn));
   
}
else
{ 
  $rest=mysqli_query($conn,"SELECT Department_name from department");
   if(isset($_POST['send']))
  {
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $q="SELECT * FROM usertb where email=?";
    $s=mysqli_prepare($conn,$q);
    mysqli_stmt_bind_param($s,'s',$email);
    mysqli_stmt_execute($s);
    $re=mysqli_stmt_get_result($s);
    $row=mysqli_fetch_row($re);
  if ($row==0){
    $name=mysqli_real_escape_string($conn,$_POST['names']);
    $tel=mysqli_real_escape_string($conn,$_POST['tel']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $department=mysqli_real_escape_string($conn,$_POST['department']);
    $role=mysqli_real_escape_string($conn,$_POST['role']);    
    $regno=mysqli_real_escape_string($conn,$_POST['regno']);
    $password1=mysqli_real_escape_string($conn,$_POST['password1']);
    $password2=mysqli_real_escape_string($conn,$_POST['password2']);
    if($password1!=$password2)
    {
    $error1="Password not match?.";
    die("password must much");
    }
    if(empty($name)||empty($password2)||empty($password1)||empty($tel)||empty($email)||empty($department)||empty($regno))
    {
     $error1="All field are required";
    }
    else
    {
    $hashed_password=password_hash($password1,PASSWORD_DEFAULT);
    $query="INSERT INTO usertb VALUES(?,?,?,?,?,?,?,0,now())";
    
    $stmt=mysqli_prepare($conn,$query);
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,"sssssss",$regno,$name,$email,$tel,$department,$role,$hashed_password);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        if(!$result)
        {
            $w=mysqli_query($conn,"SELECT ROLE from usertb where EMAIL='$email' AND REGNO='$regno'");
            $t=mysqli_fetch_array($w,MYSQLI_ASSOC);
            if($t['ROLE']=='administrator'||$t['ROLE']=='alumni association leader'){
            header("location:profile.php");
            mysqli_stmt_close($stmt);
            exit();
            }
            else
            {
                header("location:userdashboard.php");
            }
        }
        else
        {
          $error="Something went wrong";
        }
    }
    else
      {
        $error="Something went wrong";
      }
      }
    }
    else
    {
      $error="You Alread have any account pleese login!.";
    }
  }
 mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
        body, html {
            padding: 0;
            margin: 0;
            font-family: Roboto, "Cantarell", Arial, sans-serif;
            background-color: #fff; 
        }

        header {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background: linear-gradient(to right, dodgerblue, white); 
            color: #fff;
        }

        .container {
            display: flex;
            width: 100%;
            height: calc(100vh - 20px); 
        }

        .left {
            flex: 1;
            background: linear-gradient(to right, dodgerblue, white);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .left img {
            border-radius: 0%;
            width: 100%;
            height: 90%;
        }

        .right {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container1 {
            width: 500px;
            padding: 20px;
            background-color: white;
            border-radius: 15px;
        }

        .container h1 {
            padding-top: 10px;
            color: dodgerblue;
            font-size: 35px;
        }

        .container1 form {
            font-size: 20px;
            font-weight: 600;
        }

        .container1 form input {
            padding-left: 10px;
            margin-left: 10px;
            height: 30px;
            width: 90%;
            border-radius: 5px;
        }
        .container1 form input[type=submit]{
            background-color:green;
        }

        .container1 form input:focus {
            border-style: double solid blue;
            opacity: 1;
            box-shadow: 5px 5px 5px 5px rgba(41, 103, 219, 0.984), 0 5px 0 rgb(0 0 0 / 2%);
        }

        .regist {
            background-color: green;
            width: 90%;
            height: 10px;
            font-size: 20px
        }

        #togglePassword {
            position: absolute;
            transform: translateX(-150%);
            cursor: pointer;
            padding-top: 8px;
        }

        #password {
            position: relative;
            padding-right: 30px;
        }

        .text {
            height: 40px;
            width: 80%;
            margin-left: 20px;
            padding-left: 10px;
            margin-top: 5px;
            border-radius: 10px;
            font-size: 20px;
            box-shadow: black;
        }
        header div a img,header img{
            border-radius:50%;
            height:150px;
            width: 150px;
        }
        .container2{
            height: 10px;
        }
        .message{
            color:red;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <a href="alumni.php"><img src="pic/ur3.png" /></a>
            <h1>Alumni Network</h1>
        </div>
        <img src="pic/Untitled.png" />
    </header>

    <div class="container">
        <div class="left">
            <img src="pic/arton69.jpg" alt="Your Image" />
        </div>
        <div class="right">
            <div class="container1">
                <h1>Create Account</h1>
              <p class="message">  <?php echo $error; ?></p>
                <form action="" method="post">
                <p>Full name:<br><input type="text" name="names" class="text"></p>
           <p>Email:<br><input type="email" name="email" class="text"></p>
           <p>Telephone:<br><input type="tel" name="tel" class="text"></p>
           <p>Department:<br><select name="department" class="text">
           <?php 
           $i=0;
           while($roww=mysqli_fetch_row($rest))
           {
           echo "<option>".$roww[0]."</option>";
           $i++;
           }
           ?>
          </select><br>
          Who are you:<br><select name="role" class="text">
             <option value="Alumni user">Alumni user</option>
            <option value="Alumni association Leader">Alumni association Leader</option>
            <option value="administrator">administrator</option>
          </select>
          
           </p>
           <p>Registration Number:<br><input type="number" name="regno" class="text"></p>
           <u>C</u>reate password:&nbsp;&nbsp; &nbsp;
          <input type="password" name="password1" id="password1" placeholder="Enter your password...."size="20"required/>
          <span id="togglePassword" onclick="togglePasswordVisibility()">👁️</span>
            <script>
              function togglePasswordVisibility() {
                        const passwordInput = document.getElementById('password1');
                        const toggleIcon = document.getElementById('togglePassword');
                        if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        toggleIcon.textContent = '👁️';
                        } else {
                         passwordInput.type = 'password';
                         toggleIcon.textContent = '👁️';
                         }
                         }
            </script>
          <br><br>
          <u>C</u>omfrim password:
          <input type="password" name="password2" size="20" required/>
        </label>
        <br/>
        <br/>
        <p><input type="submit"class="regist" name="send" value="Register"/></p>
                </form>
                <p>Already have account <a href="login.php">Login.</a> </p>
            </div>
        </div>
    </div>

    <footer>
        <div class="container2">
            <p align="center">Copyright &copy; All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
