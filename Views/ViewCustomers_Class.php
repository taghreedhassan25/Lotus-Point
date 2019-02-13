<?php
error_reporting(0);

session_start();

  if (!isset($_SESSION["user_id"]))
  {
    if ($_SESSION["type"] != "coach")
    {
     echo '<script type="text/javascript">
                alert("You do not have enough privelege");
                location="home.php";
                </script>';
   }
  }

?>


<html>
<head>
	
<title>Lotus Point </title>

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
<style type="text/css">
  
  .thumbnail {
    padding:0px;
}
.panel {
  position:relative;
}
.panel>.panel-heading:after,.panel>.panel-heading:before{
  position:absolute;
  top:11px;left:-16px;
  right:100%;
  width:0;
  height:0;
  display:block;
  content:" ";
  border-color:transparent;
  border-style:solid solid outset;
  pointer-events:none;
}
.panel>.panel-heading:after{
  border-width:7px;
  border-right-color:#f7f7f7;
  margin-top:1px;
  margin-left:2px;
}
.panel>.panel-heading:before{
  border-right-color:#ddd;
  border-width:8px;
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
      <li ><a href="home.php"><span>Home</span></a></li>
	 <li class="active"><a href="#services" class="scroll"><span>Services</span></a></li>
	<li><a href="EditCoach.php" class="scroll"><span>Edit profile</span></a></li>
   <li><a href="Controller/c_logout.php" class="scroll"><span>Logout</span></a></li>
    </ul>
  </div>
</nav>
</nav>
</div>

</br>

<div class="container">
  <h3>Classes & Number of Customers</h3> 
  </br>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Class</th>
        <th>Number Of customers</th>
      </tr>
    </thead>
    <tbody>
      <tr>

       <?php

        $con = mysqli_connect("localhost","root","");

          if (!$con)
            die("could not connect".mysqli_connect_error());

          mysqli_select_db($con,"lotus");

          $id = $_SESSION["user_id"];

          $sql_select = "SELECT * FROM class_info where coach_ID=".$id;
          $result = mysqli_query($con,$sql_select);

          while ($row = mysqli_fetch_assoc($result))
          {
             echo"<tr> <td> ".$row['class_type']."</td>
            <td> ".$row['number_participans']." </td> </tr>";
          }
        
      ?>
    </tbody>
  </table>
</div>


<div class="footer navbar-fixed-bottom">
<div class="w3_agile_copyright">
    <div class="container">
      <p>© 2018 Lotus Point. </p>
    </div>
  </div>

</body>
</html>