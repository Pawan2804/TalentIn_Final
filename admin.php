<?php
if(isset($_POST['submit'])){
    $id= $_POST['delete'];
    $connection = mysqli_connect('localhost','root','','talentin');
    $query= "DELETE FROM POST WHERE postid='$id'";
    
     $result1=mysqli_query($connection,$query);
    $query2="Select * from post";
    
    $result2=mysqli_query($connection,$query);
    if($result2){
         header('location:admin.php');
}
    else{
         echo"<script>alert('wrong post id');</script>";
    }
    
    
}
?>

.<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="topnav.css">
    <link rel="stylesheet" type="text/css" href="botnav.css">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Home | TalentIN</title>
  <title>Admin</title>
</head>
<body>
    <h1>Welcome Admin</h1>
    <form action="admin.php" method="post">
        <div class="col">
				<label for="phone">To Delete Enter Post Id</label>
				<br>
				<input type="text" name="delete" placeholder="postid">
				 <input type="submit"  name="submit">
				</div>
    </form>
     <div class="row">


            <div class="column">
         </div>
                    <div class="clearfix"></div>
    </div>
    <?php
    $connection = mysqli_connect('localhost','root','','talentin');
    $query1="SELECT * FROM post";
    
     $result1=mysqli_query($connection,$query1);
     while($row = (mysqli_fetch_assoc($result1))){
         ?>
            <div class="column">
          <div class="post">
           <div class="panel-heading">
         <?php
          echo $row['postid'];?>
             
              </div>
              <div class="panel-body">
              <p>
              <?php
         echo $row['postcontent']; ?>
          </p>
           <div class="img-wrap">

                            <?php
                         
               echo "<img src='images/".$row['image']."' id='postimg'>";
                            ?>
                            </div>
                            </div>
                            
               
               </div>
                  </div>
   
                            
                            <?php
         
     }
    
    ?>
    
    <div class="clearfix"></div>
   
</body>