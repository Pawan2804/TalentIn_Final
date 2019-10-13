
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="discover.css">
    
<link rel="stylesheet" type="text/css" href="topnav.css">
<link rel="stylesheet" type="text/css" href="botnav.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Discover NEWS NIGGA</title>
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
        <div class="row">

    
     <?php
            if(isset($_POST['submit'])){
    $s = $_POST['search']; 
    $connection = mysqli_connect('localhost','root','','talentin');
    if(!$connection)
        echo("no connected");

    $query = "CALL getDept('$s')";
    
     $result1=mysqli_query($connection,$query);
                    
         
        while($row = (mysqli_fetch_assoc($result1))){
                   ?>
        <div class="column">
			  	<div class="post">
                     <h4>Post</h4>
			    	<a href="profile.php"><div class="panel-heading">
	                    <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg"/>
	                    <h6>
                       <?php
                        echo $row['name'];
                     echo "<br>";
                   ?></h6>
	                    <div><span>Shared publicly</span> - <span>Jun 27, 2014</span></div>

	                </div></a>
	                <div class="panel-body">
                       <p>
                        <?php
                    echo $row['postcontent'];
            ?>
            </p>
	                    <div class="img-wrap">
            
                    <img src="images/<?php echo $row['image'];?>">
                    </div>
	                </div>
	                
                    
        <div class="panel-footer">
	                    <button type="button" class="[ btn btn-default ]">+1</button>
	                    <div class="input-placeholder">Add a comment...</div>
	                </div>
	                        <textarea rows="4"></textarea>
	                        <button type="submit" class="[ btn btn-success disabled ]">Post comment</button>
	                        <button type="reset" class="[ btn btn-default ]">Cancel</button>
	            </div>
            <div class="clearfix"></div>
          </div>
          <?php
                } }
        
        ?>
    
    
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