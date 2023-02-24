<?php
include("conn.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
  
    $password=$_POST['password'];

    $confirmpassword=$_POST['confirmpassword'];
    

    $email=$_POST['email'];
    $dob=$_POST['date'];
    
    $mobileno=$_POST['number'];

    $country=$_POST['country'];
  
    $state=$_POST['state'];
    
    $city=$_POST['city'];

    $gender=$_POST['gender'];
  
    $des=$_POST['text'];
    
    $insert="insert into reg(name,password,confirmpassword,email,dob,mob,country,state,city,gender,comment) 
    values('$name','$password','$confirmpassword','$email','$dob','$mobileno','$country','$state','$city','$gender','$des')";
    if(mysqli_query($conn,$insert))
    
    {
        echo "Inserted";

    }
else
{
    echo "Not inserted";
}

}
    

   ?>


