<?php
session_start();
include "conn.php"; 
if(!isset($_SESSION['email']))
{
header("location:login.php");
}

$pid=$_GET['pid'];
$s="select * from `add` where pid='$pid'";
$r=mysqli_query($conn,$s);
if(mysqli_num_rows($r)>0)
{
$row=mysqli_fetch_assoc($r);
}
///Update
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$title=$_POST['title'];
$des=$_POST['text'];


$file_name = $_FILES['file']['name'];
if(empty($file_name)){
    $u="update `add` set id='$id',title='$title',des='$des' where pid='$pid'";
}
else{
$file_tmp=$_FILES['file']['tmp_name'];
$path="files";
$dpath=$path.'/'.rand(0000,9999).'_'.$file_name;
$status=move_uploaded_file($file_tmp,$dpath) or die($_FILES['file']['error']);
$u="update `add` set id='$id',title='$title',des='$des',file='$dpath' where pid='$pid'";
}

$s=mysqli_query($conn,$u);
if($s)
{
echo "<script>alert('Success');</script>";
header('location:view.php');
}
else

{
echo "Not inserted";
}
}
?>
<html>
<head>
<link rel="stylesheet" href="a.css">


<title>Edit Project</title>
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
<?php echo $_SESSION['email']['name'];?>
<p style="text-align:right;"><a href="logout.php" style="text-decoration:none;">Logout</a></p>
<form method="POST" action="" enctype="multipart/form-data"> 




<div class="t">
<table>
<h1 style="text-align:left;color:blue;"> Edit Project </h1>  
<tr><td><label for="id">Id:</label></td>
<td><input type="interger" name="id" id="id" placeholder="Enter the ID" value="<?php  echo $row['id'];?>"  required="required" /></td></tr>

<tr><td><label for="title">Title:</label></td>
<td><input type="text" name="title" id="title" placeholder="Enter the title" value="<?php  echo $row['title'];?>" required="required" /></td></tr>

<tr><td> <label for="text">Description</label></td>
<td>  <Textarea id="text" rows="3" cols="20" name="text"><?php  echo $row['des'];?>
</Textarea></td></tr>  

<tr><td><img style="width:200px;" src="<?php  echo $row['file'];?>"></td></tr>
<tr><td> <label for="file">Profile </label></td>
<td> <input type="file" id="file" name="file" value="file" /> </td>

</td></tr>

<tr><td>
<input type="submit" value="Update" name="submit">

</form>


</body>

<?php 
if(isset($_GET['logout'])){
session_destroy();

header('location:login.php');
}
?>
</html>
