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
<p style="text-align:center;"><a href="logout.php" style="text-decoration:none;">Logout</a></p> 
<a style="text-align:center;color:green;"href="add.php">Add Project</a>        
<table class="table table-condensed">
<thead>
<tr>
<th>Sl.No</th>
<th>Project Name</th>
<th>Date</th>
<th style="color:red;">Button</th>
</tr>
</thead>
<tbody>

<?php
include "conn.php";
$userid=$_SESSION['email']['id'];
$result="select * from `add` where uid=$userid";

$s=mysqli_query($conn,$result);
if(mysqli_num_rows($s) > 0)
{
$sl=0;
while($row=mysqli_fetch_assoc($s))
{
$sl++;
?>
<tr>
   <td><?php echo $sl; ?></td>
   <td><?php echo $row['title'];?></td>
   <td><?php echo $row['datacreated'];?></td>
   <td><a style="color:red;" href="project-detail.php?pid=<?php echo $row['pid'];?>">View</a></td>
   <td><a  style="color:purple;"href="update.php?pid=<?php echo $row['pid'];?>">Edit</a></td>
   <td><a  style="color:black;"href="delete.php?pid=<?php echo $row['pid'];?>" onclick="return confirm('Are you want to sure delete data')" >Delete</a></td>
</tr>   
<?php
}
}


?>


</tbody>
</table>
</div>

</body>
</html>

