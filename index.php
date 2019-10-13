    <!DOCTYPE html>
    <html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="topnav.css">
    <link rel="stylesheet" type="text/css" href="botnav.css">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Home | TalentIN</title>
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
            <div class="header">
                            <h1><img id="myimage" src="talent.png"></h1>
              <p><font size="+10">TalentIn</font> is your one stop to find the best of <font size="+10">namma college's Top Talents</font> latest happenings</p>
            </div>
    
            <div class="row">


            <div class="column">
                    
                        
                    </div>
                <div class="clearfix"></div>
              </div>

             
              <?php
                        $connection = mysqli_connect('localhost','root','','talentin');

                        $q2="SELECT *  FROM reg r, post p where p.puserid=r.userid";
             $re=mysqli_query($connection,$q2);
                while($row = (mysqli_fetch_assoc($re))){
                           ?>
                <div class="column">
                        <div class="post">
                             <h4>Post</h4>
                           <div class="panel-heading">
                                <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg"/>
                                <h6>
                               <?php
                                echo $row['name'];
                             echo "<br>";
                           ?></h6>
                                

                            </div></a>
                            <div class="panel-body">
                               <p>
                                <?php
                            echo $row['postcontent'];
                    ?>
                    </p>
                                <div class="img-wrap">

                            <?php
                            echo "<img src='images/".$row['image']."' id='postimg'>";
                            ?>
                            </div>
                            </div>
                    </div>
                <div class="clearfix"></div>
              </div>
              <?php
                    }

            ?>
           
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