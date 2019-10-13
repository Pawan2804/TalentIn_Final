<?php
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    

    $connection = mysqli_connect('localhost','root','','talentin');
    $query= "SELECT * FROM login where username='$username' and password = '$password'";
    
    $result1=mysqli_query($connection,$query);
    
    if(mysqli_num_rows($result1) == 1){
        $row = mysqli_fetch_assoc($result1);
        
        header('location:admin.php');
        
    }
    else
         echo"<script>alert('wrong username or password');</script>";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>TalentIn Login or Sign up</title>
<link rel="stylesheet" type="text/css" href='login.css'>
</head>
<body background="talent.png">
<div class="topcont">
                <br><br><br><br><br><br>
	<form action="admin_log.php" method="post">
                <div class="form-group">
                  
                   <label for="Username">Username</label>
                    <input type="text" name="username" placeholder="Enter username" class="form-control">
                   
                </div>
        
                <div class="form-group">
                  
                   <label for="Password">Password</label>
                    <input type="password"  name="password" placeholder="Enter password"  class="form-control">
                    
                </div>
               
        

                <br><br><br><br><br><br><br>
                <div class="topcont">
                <br>
                <input type="submit" class="btn btn-primary" name="submit" value="submit">    
                
                </div>
                    
                    
</form>
    </div>
</body>
</html>