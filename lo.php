<?php
session_start();
include ("conn.php");


if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $select="(select * from reg where email='$email' && password='$password')";
$result=mysqli_query($conn,$select);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{
    echo "<script>alert('Success')</script>";
    $_SESSION['email']=$row;
    header('location:view.php');
}
else
{
    echo "Incorrect Email and Password";
}
}

?>