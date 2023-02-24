<?php
session_start();
if(!isset($_SESSION['email']))
{
header("location:login.php");
}

if(isset($_POST['submit']))
{
include('conn.php');
$id=$_POST['id'];
$title=$_POST['title'];
$des=$_POST['text'];
$uid=$_SESSION['email']['id'];
if(isset($_FILES['file']))
{

$file_name = $_FILES['file']['name'];

$file_tmp=$_FILES['file']['tmp_name'];
$path="files";
$dpath=$path.'/'.rand(0000,9999).'_'.$file_name;
$status=move_uploaded_file($file_tmp,$dpath) or die($_FILES['file']['error']);

$r="insert into `add` (`pid`,`uid`,`id`,`title`,`des`,`file`) values('0','$uid','$id','$title','$des','$dpath')";
$j=mysqli_query($conn,$r);
if($j)
{
echo "Sucess";
header('location:view.php');
}
else{
echo "not sucess".mysqli_error($conn);
}
}

}
?>
<html>
<head>
<link rel="stylesheet" href="a.css">


<title>Add Project</title>
<style>

body
{
background-color:pink;

width:50%;
border-radius:10px;
padding-left:10px;
background-image:url("a.jpg");


}



</style>
</head>



<body>
    
<p style="text-align:right;"><a href="logout.php" style="text-decoration:none;">Logout</a></p>
<form method="POST" action="" enctype="multipart/form-data"> 

<div class="t">
<table>
    <h2 style="text-align:left;"><?php   echo "Welcome Mr ".$_SESSION['email']['name'];?></h2>
<h1 style="text-align:left;"> Add Project </h1>  
<tr><td><label for="id">Id:</label></td>
<td><input type="interger" name="id" id="id" placeholder="Enter the ID"  required="required" /></td></tr>

<tr><td><label for="title">Title:</label></td>
<td><input type="text" name="title" id="title" placeholder="Enter the title"  required="required" /></td></tr>

<tr><td> <label for="text">Description</label></td>
<td>  <Textarea id="text" rows="3" cols="20" name="text">
</Textarea></td></tr>  


<tr><td> <label for="file">Profile </label></td>
<td> <input type="file" id="file" name="file" value="file" /> </td>

</td></tr>

<tr><td>
<input type="submit" value="Add" name="submit">

</form>


</body>


</html>
