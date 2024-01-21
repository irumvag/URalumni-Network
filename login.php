<?php
include("connect.php");
session_start();
$error="";
if(isset($_POST['submit']))
{
if ($conn->connect_error) {
    $error="connection failed".$conn->connect_error;
} else {
    $email =mysqli_real_escape_string($conn,$_POST['userid']);  
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $query = mysqli_query($conn,"SELECT PSSWORD FROM usertb WHERE REGNO='$email' OR EMAIL='$email'");
    $row = mysqli_fetch_assoc($query);
    if($row>=1)
    {
        if (password_verify($password,$row['PSSWORD'])) {
            $w=mysqli_query($conn,"SELECT ROLE from usertb where EMAIL=$email OR REGNO=$email");
            $t=mysqli_fetch_array($w,MYSQLI_ASSOC);
            if($t['ROLE']=='administrator'||$s['ROLE']=='alumni association leader'){
            $_SESSION['login_user']=$email;
            header("location:profile.php");
            mysqli_stmt_close($stmt);
            exit();
            }
            else
            {
                $_SESSION['login_user']=$email;
                header("location:userdashboard.php");
                exit();
            }
        }
        else 
        {
             $error="Password is not correct?";
        }
    }
    else {
        $error="Invalid Username or Password?";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UR Alumni login</title>
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

        .container1 form input[type=text],.container1 form input[type=button],.container1 form input[type=password] {
            padding-left: 10px;
            margin-left: 10px;
            height: 30px;
            width: 90%;
            border-radius: 5px;
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
        #red{
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
            <h1>login</h1>
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <p id="red"><?php echo $error;?></p>
        <p>Please fill the form:</p>
            <label><u>U</u>serID:<b id="red">*</b>&nbsp;&nbsp;
            <br>
            <input type="text"name="userid" id="username"class="text" size="20"placeholder="Enter email or Regno" autocomplete="on" required/></label><br/><br/>
            <label><u>P</u>assword:<b id="red">*</b></br>
            <input type="password" name="password"placeholder="Enter your password..." id="password1" size="20"required/>
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
            </br><br>
            <label><input type="checkbox"name="option1" name="option1"/><u>R</u>emember me</label><br/><br/>
            <label><input id="button"type="submit"value="LOGIN" name="submit" style="width:90%;padding:9px;border-radius:5px;"/></label><br/><br/>
            <label align="right"><a href="#"><u>F</u>orget password?</a></label>
            <p id="regist">Regist here if you are new <a href="sign up.php"><u>C</u>reate account.</a></p>
        </form>
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
