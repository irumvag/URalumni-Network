<?php
include("connect.php");
if($conn->connect_error)
{
    echo "<script>alter(\"connection failed!\");</script>";
            header("location:alumni.php");
    die ("error".mysqli_error($conn));
    
}
else
{
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $q="SELECT * FROM newletter where email=?";
    $s=mysqli_prepare($conn,$q);
    mysqli_stmt_bind_param($s,'s',$email);
    mysqli_stmt_execute($s);
    $re=mysqli_stmt_get_result($s);
    $row=mysqli_fetch_row($re);
    if ($row==0){
    $query="INSERT INTO newletter (EMAIL,timestamp_collumn) VALUES(?,now())";
    $stmt=mysqli_prepare($conn,$query);
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,"s",$email);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        if(!$result)
        {
            echo "<script>alter(\"subscribed successful\");</script>";
            header("location:alumni.php");
            mysqli_stmt_close($stmt);
            exit();
        }
        else
        {
            echo "error".mysqli_error($conn);
            echo "<script>alter(\"subscribed failed\");</script>";
        }
    }
    else
    {
        echo "<script>alter(\"subscribed failed\");</script>";
            header("location:alumni.php");
    }
}
else
{
    echo "<script>alter(\"subscribed failed\");</script>";
         header("location:alumni.php");
}
}
    mysqli_close($conn);
?>