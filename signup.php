   
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body background="talent.png">
	<div class="topcont">
		<h2>Sign Up Here!!</h2>
		<form action="signup_ac.php" method="post">
			
				<div class="col"><label for="name">NAME:</label>
				<input type="text" name="name" placeholder="Name"></div>
				
				<div class="col">
				<label for="password">Password:</label>
				<input type="password" name="password" placeholder="Password">
				</div>
				
				<div class="col">
				<label for="password">Confirm Password</label>
				<input type="password" name="cpassword" placeholder="Confirm Password">
				</div>

				<div class="col">
				<label for="ussn">Usn</label>
				<input type="text" name="usn" placeholder="USN">
				</div>
				
				<div class="col">
				<label for="email">Email</label>
				<input type="email" name="email" placeholder="Email">
				</div>
				
				<div class="col">
				<label for="phone">Phone Number</label>
				<input type="text" name="phone" placeholder="phone number">
				</div>
				
				<div class="col">
				<div class="g">Gender:
					<br>
				<input type="radio" name="gender" value="male" required>Male 
				<input type="radio" name="gender" value="female" required>Female
				</div>
				<br>    
				<input type="file" name="image" accept="img/jpeg , img/png">
				<br> 
				       
				<label for="department">Deprtment</label>
				<select  name="department">
	      <option value="1" >CSE</option>
	      <option value="2" >ISE</option>
	      <option value="3" >EEE</option>
	      <option value="4" >ECE</option>
	      <option value="5" >MECH</option>
	      <option value="6" >CIVIL</option>
	      </select>
				<br>
       
	       <input type="submit" value="" name="submit">
	       </div>

	</form>	
    </div>
</body>
</html>