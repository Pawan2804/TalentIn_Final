<?php
include('loginaccess.php');  
    $connection = mysqli_connect('localhost','root','','talentin');

    $id = $_SESSION['id'];
    $query= "SELECT * FROM reg where userid = $id";
    $result1=mysqli_query($connection,$query);


?>
    <!DOCTYPE html>
<html>
<head>
	<title>Post</title>

<link rel="stylesheet" type="text/css" href="topnav.css">
<link rel="stylesheet" type="text/css" href="botnav.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

	<link rel="stylesheet" type="text/css" href="profile.css">

</head>
<body>
    <!--Navigation bar-->
    <div id="nav-placeholder">

    </div>

    <script>
    $(function(){
      $("#nav-placeholder").load("topnav.html");
    });
    </script>
    <!--end of Navigation bar-->
	
	<div class="main">

		<div class="club">
              <?php while($row = (mysqli_fetch_assoc($result1))) {?>
	  			<div class="post">
		  				<div class="img-wrap" id="club-col">
<!--
                          <?php  $img = $row['image']?>
		                   	<?php echo "<img src=images/$img id='posting'"; ?>
-->
		                </div>
		                <div id="club-row"></div> Name:
						<?=$row['name']?>
						<br><br> Contact Info:
						<?=$row['mobile']?>
						<br><br>Email:
						<?=$row['email']?>
						<br><br>Experience:
						<?php
                       $query2="SELECT puserid,count(puserid) as c from post group by puserid";    
    $result2=mysqli_query($connection,$query2);
while($row2 = (mysqli_fetch_assoc($result2))){
    if($row2['puserid']==$id){
        echo $row2['c'];
    }
}

                    ?>
						<br><br>
<!--						<?=$row['']?>-->
	  			</div>
	  			<?php } ?>
	  		</div>

		<div class="club">
  			Create a Event Post.
  			<div class="post">
	  				<form action="profile_ac.php" method="post" enctype="multipart/form-data">
	                    <textarea name="text" rows="4">...</textarea>
					<br><br>
						<input type="file" name="image" accept="img/jpeg , img/png">
						<input type="hidden" value="<?=$id?>" name="id">
					<br><br>
						<button type="submit" name="submit" value="upload" class="[ btn btn-default ]">Post It!!</button>
					</form>
  			</div>
	  	</div>
	</div>
    
	    <!--BNavigation bar-->
    <div id="bot-nav-placeholder">

    </div>

    <script>
    $(function(){
      $("#bot-nav-placeholder").load("botnav.html");
    });
    </script>
    <!--end of BNavigation bar-->
    
</body>
</html>




