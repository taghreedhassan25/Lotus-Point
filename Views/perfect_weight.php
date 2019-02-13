
<?php
error_reporting(0);

session_start();

  if (!isset($_SESSION["user_id"]))
  {
    header('Location: http://localhost/php/Signup.php');
    exit;
  }

?>

<html>
<head>
	
<title>Perfect Weight </title>

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
<!--add this 3 links -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
   <li><a href="Controller/c_logout.php" class="scroll"><span>Logout</span></a></li>
    </ul>
  </div>
</nav>
</nav>
</div>

</br>
<div class="container">
  <h2>Get Perfect Weight</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pefect Weight</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Perfect Weight </h4>
        </div>
        <div class="modal-body">

        <?php

        	$con = mysqli_connect("localhost","root","");

	          if (!$con)
	            die("could not connect".mysqli_connect_error());

          		mysqli_select_db($con,"lotus");

          		$weight = $height ="";
          		$ID=$_SESSION["user_id"];

		        $sql_select = "SELECT client_weight,client_height FROM client_info WHERE client_ID=$ID";
		         $result = mysqli_query($con,$sql_select);

	          while ($row = mysqli_fetch_assoc($result)) 
	          {
	              
	              $weight=$row['client_weight'];
	              $height=$row['client_height'];
	          }

	          	$perfectWeight=$height-100-2;
	          	echo' <p align="center"> <font size="8"><b>'.$perfectWeight.'kg</b> </font></p>';


      	?>


         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>







<div class="footer navbar-fixed-bottom">
<div class="w3_agile_copyright">
    <div class="container">
      <p>© 2018 Lotus Point. </p>
    </div>
  </div>

</body>
</html>