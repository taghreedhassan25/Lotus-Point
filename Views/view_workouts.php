
<?php
error_reporting(0);

session_start();

  if (!isset($_SESSION["user_id"]))
  {
   
     echo '<script type="text/javascript">
                alert("You do not have enough privelege");
                location="home.php";
                </script>';
   
  }

?>


<html>
<head>
  
<title>View Tips</title>

<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lotus Point Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
  
  div#carousel-caption
  {
    color:black;
  }

</style>

</head>

<body>
  
  
<div>
<nav class="link-effect-14" id="link-effect-14">
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Lotus Point</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php"><span>Home</span></a></li>
   <li class="active"><a href="#services" class="scroll"><span>Services</span></a></li>
   <li><a href="Controller/c_logout.php" class="scroll"><span>Logout</span></a></li>
    </ul>
  </div>
</nav>
</nav>
</div>

</br>
<h2 align="center">Workouts</h2>



<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel"  
  style="width: 600px;  height: 300px; margin: 2 auto">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">


        <?php

          $con = mysqli_connect("localhost","root","");

          if (!$con)
            die("could not connect".mysqli_connect_error());

           mysqli_select_db($con,"lotus");

          $desc = $picture ="";
          $sql_select = "SELECT * FROM workout";
          $result = mysqli_query($con,$sql_select);
         
        
          $row = mysqli_fetch_assoc($result);

          echo ' <div class="item active">
                  <img src="getImage.php?id='.$row['workout_ID'].'&tablename=workout"  style="width:100%;">
                  <div class="carousel-caption">
                    <p><b>'.$row['description'].'</b></p>
                  </div>
                </div>' ;

          while ($row = mysqli_fetch_assoc($result)) 
             {  
                
                echo ' <div class="item">
                  <img src="getImage.php?id='.$row['workout_ID'].'&tablename=workout"  style="width:100%;">
                  <div class="carousel-caption">
                    <p><b>'.$row['description'].'</b></p>
                  </div>
                </div>' ;
          
           
              }
          ?>
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


</br>
<div class="footer navbar-fixed-bottom">
<div class="w3_agile_copyright">
    <div class="container">
      <p>© 2018 Lotus Point. </p>
    </div>
  </div>

<!-- <div class="item active">
              <img src="la.jpg" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <p><b>Tips Description</b></p>
              </div>
            </div>
            

            <div class="item ">
              <img src="chicago.jpg" alt="Chicago" style="width:100%;">
              <div class="carousel-caption">
                <p><b>Exercsie twic a week!</b></p>
              </div>
            </div>
          
            <div class="item">
              <img src="ny.jpg" alt="New york" style="width:100%;">
              <div class="carousel-caption">
                <p><b>Exercsie twic a week!</b></p>
              </div>
            </div>< -->
            
</body>
</html>