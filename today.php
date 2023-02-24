<html>
<head>
<link rel="stylesheet" href="a.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Admission Form</title>
    <form method="Post" action="to.php" enctype="multipart/form-data"> 
    

    <body>
        
        <h1 style="text-align:center;">Sign-up</h1>  
        <h1>test</h1>
        <h2>hello</h2>
        <div class="t">
        <table>
            
            <tr><td><label for="name">Name:</label></td>
            <td><input type="text" name="name" id="name" placeholder="Enter the name"  required="required" /></td></tr>
            
                  <tr><td><label for="password">Password:</label></td>
            <td><input type="password" name="password" id="password" placeholder="Enter the password"  required="required"/></td></tr>
            <tr><td> <label for="confirmpassword">ConfirmPassword:</label></td>
            <td><input type="password" name="confirmpassword" id="confirmpassword" placeholder="Enter the password"  required="required"/>
            </td></tr>
             
             
           <tr><td> <label for="email">Email:</label></td>
           <td> <input type="email" name="email" id="email" placeholder="Enter the email" /></td></tr>
           <tr><td> <label for="date">DOB:</label></td>
           <td> <input type="date" name="date" id="date" /></td></tr>
             
            <tr><td><label for="number">MobileNo:</label></td>
           <td> <input type="interger" name="number" id="number" placeholder=" +91"  
           required="required"/></td></tr>
             
             
            <tr><td><label for="country">Country</label></td>
          <td>  <select name="country">
                <option value="country">Country</option>
                <option value="usa">USA</option>
                <option value="india">India</option>
                <option value="australia">Australia</option>
</select>
</td></tr>
 
             
      <tr><td><label for="state">State</label></td>
<td><select name="state">
    <option value="uttarpardesh">Uttar Pradesh</option>
    <option value="madhyapradesh">Madhya Pradesh</option>
    <option value="orissa">Orissa</option>
</select>
 
</td></tr>
             
            <tr><td><label for="city">City</label></td>
            <td><select name="city">
    <option value="meerut">Meerut</option>
    <option value="hapur">Hapur</option>
    <option value="mawana">Mawana</option>
</select>
</td></tr>
 
             
            <tr><td><label for="gender">Gender :</label></td>
            <td><label for="male"> Male:</label>
<input type="radio" id="male" value="male" name="gender">
<label for="female"> Female:</label>
<input type="radio" id="female" value="female" name="gender"></td></tr>
 
             
            <tr><td><label for="checkbox">Agree with T&C</label></td>
            <td>  <input type="checkbox" id="checkbox" name="id" /></td></tr>
             
             
            <tr><td> <label for="text">Description</label></td>
            <td>  <Textarea id="text" rows="3" cols="20" name="text">
</Textarea></td></tr>  
             
             
      
            
            <tr><td>
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Reset" name="reset">

            
            </td></tr>
            <tr><td> <p style="text-align:center;">&copy; ShineDezign   2021 </p></td></tr>
           <tr> <td><a href="#" class="fa fa-facebook"></a>
            <a href="https://www.google.co.in/webhp" class="fa fa-google"></a>
		<a href="#" class="fa fa-linkedin"></a>
		<a href="#" class="fa fa-youtube"></a>
		<a href="#" class="fa fa-instagram"></a>
</td></tr>
<tr><td> <a href="login.php">Login</a></td>
</td></tr>
<tr><td> <a href="update.php">Update Password</a></td>
</td></tr>
</table>
</div>
            


</body>
</form>

</head>
</html>
<style>
    .fa-facebook {
			  background: yellow;
              width:30px;
              height: 20px;
			}
            .fa-google {
			  background: #dd4b39;
              width:30px;
              height: 20px;
			}

			.fa-linkedin {
			  background: #007bb5;
              width:30px;
              height: 20px;
			}

			.fa-youtube {
			  background: #bb0000;
              width:30px;
              height: 20px;
			}

			.fa-instagram {
			  background: #8a3ab9;
              width:30px;
              height: 20px;
			}
            body
            {
                background-color:pink;
                border:2px solid black;
                width:50%;
                border-radius:10px;
                padding-left:10px;
                background-image:url("a.jpg");

                
            }
           
            
    </style>
