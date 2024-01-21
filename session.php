<?php
include 'connect.php';
session_start();
$user_check=$_SESSION['login_user'];
$q = mysqli_query($conn,"SELECT NAMES FROM usertb WHERE EMAIL = '$user_check' OR REGNO = '$user_check'");
   
   $row = mysqli_fetch_array($q,MYSQLI_ASSOC);
   
   $login_session = $row['NAMES'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
