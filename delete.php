<?php
include("conn.php");
$pid=$_GET['pid'];

$r="delete from  `add` where pid='$pid'";
$s=mysqli_query($conn,$r);  

if($s == 1)
{
    header('location:view.php');
}



?>