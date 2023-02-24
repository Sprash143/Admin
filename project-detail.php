<?php

session_start();
if(!isset($_SESSION['email']))
{
header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Project List</h2>
<?php echo $_SESSION['email']['name'];?>
<p style="text-align:right;"><a href="logout.php" style="text-decoration:none;">Logout</a></p> 
  

<?php
include ("conn.php");
$pid=$_GET['pid'];
$r="select * from `add` where pid=$pid";
$s=mysqli_query($conn,$r);
if(mysqli_num_rows($s)>0)
{
    $row=mysqli_fetch_assoc($s);
}
?>
<h3> <?php echo "Project Title :".$row['title']; ?> </h3>
<h3> <?php echo "Project des:".$row['des']; ?> </h3>
<h3> <?php echo "Project date:".$row['datacreated']; ?> </h3>

<img style="width:400px" src="<?php echo $row['file'];?>">

</div>


</body>
</html>

