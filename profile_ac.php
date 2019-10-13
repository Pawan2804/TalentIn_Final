<?php

if(isset($_POST['submit'])){
    
       $id = $_POST['id'];
    
    $connection = mysqli_connect('localhost','root','','talentin');
    $image=$_FILES['image']['name'];  
     $target="images/".basename($image);  
 
    $text=$_POST['text'];
    
    $query="INSERT into post(image,postcontent,puserid) VALUES('$image','$text',$id)";
    $Q=mysqli_query($connection,$query );
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header('location:index.php');
    }
    
}

?>
  