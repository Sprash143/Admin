<html>
    <head>
        <title>Login</title>
        <div class="container">
            <form action="lo.php" method="POST">

                <h3>Login</h3>
                 <label for="email">Email:</label>
                     <input type="email" name="email" id="email" placeholder="Enter the email" />
                     <br>
                     <br>
                <label for="password">Password:</label></td>
                    <input type="password" name="password" id="password" placeholder="Enter the password"  required="required"/>
                    <br>
                    <br>
                     
                    
            <input type="submit" value="Submit" name="submit">
                    
              
            </form>
        </div>
        <style>
            .container
            {
                color:black;
        text-align:center;
        border:2px solid black;
        padding-top: 10%;
        height:100%; 
        background-image:url("r.jpg");
            }
        </style>
    </head>
</html>