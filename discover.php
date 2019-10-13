    

.<!DOCTYPE html>
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

    
   <div class="topnav">
		<div class="tnleft">
		  <a href="index.php">Home</a>
		  <a href="discover.php">Discover</a>
		  <a href="about.php">About</a>
		  <a href="contact.php">Contact</a>				
		</div>
        <div class="tncentre">
        
        <form action="search.php" method="post">
        <input type="text" name="search" placeholder="Search...">
      <button type="submit" name="submit">Search</button>
        </form>
        
        
        </div>
		<div class="tnright">
			<a href="login.php">Login</a>
		</div>
	</div>

	

	<div class="main">
		<div class="container">  
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
		      <div class="item active">
		        <img src="talent.png" alt="Los Angeles" style="width:75%;">
		      </div>

		      <div class="item">
		        <img src="talent.png" alt="Chicago" style="width:75%;">
		      </div>
		    
		      <div class="item">
		        <img src="talent.png" alt="New york" style="width:75%;">
		      </div>
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>

		<div class="row">
		  </div><div class="column">
	  			<div class="post">
	  				<div class="img-wrap">
	                   	<a href="CSE.php">
  <img src="images/compscie.jpg" alt="HTML tutorial" id="postimg">
</a>
	                </div>
	  			</div>
	  			<div class="clearfix"></div>    
	  		</div><div class="column">
	  			<div class="post">
	  				<div class="img-wrap">
	                   	<a href="CSE.php">
  <img src="images/infoscie.jpg" alt="HTML tutorial" id="postimg">
</a>
	                </div>
	  			</div>
	  			<div class="clearfix"></div>    
	  		</div><div class="column">
	  			<div class="post">
	  				<div class="img-wrap">
	                   	<a href="CSE.php">
  <img src="images/eleeng.jpg" alt="HTML tutorial" id="postimg">
</a>
	                </div>
	  			</div>
	  			<div class="clearfix"></div>    
	  		</div><div class="column">
	  			<div class="post">
	  				<div class="img-wrap">
	                   	<a href="CSE.php">
  <img src="images/mecheng.jpg" alt="HTML tutorial" id="postimg">
</a>
	                </div>
	  			</div>
	  			<div class="clearfix"></div>    
	  		</div>
	  			<div class="clearfix"></div>
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