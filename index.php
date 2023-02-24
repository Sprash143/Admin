<html>
<head>
<body>
<form>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <h1>Test GIt</h1>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="today.php">Sign up <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
     
      
    </ul>
  </div>
</nav>
</form>
<?php
include "conn.php";
$h="select `add`.title,`add`.des,`add`.datacreated,`add`.file,`reg`.name from `add` INNER JOIN `reg` ON `add`.uid=`reg`.id";

$r=mysqli_query($conn,$h);
if(mysqli_num_rows($r) > 0)
{
while($row=mysqli_fetch_assoc($r))

{
  ?>
  <div  class="container">
  <?php 
   echo "Author Name:".$row['name']."<br>";
  echo "Title Name:".$row['title']."<br>";
  echo "Project des:".$row['des']."<br>";  
  echo "Project date:".$row['datacreated']."<br>"; 

  ?>
  <img style="width:200px"src="<?php echo $row['file']; ?>">
  
  <hr>
</div>
      <?php

}
}

?>



</body>
</head>

</html>