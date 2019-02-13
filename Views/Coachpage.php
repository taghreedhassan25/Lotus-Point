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
	 <li class="active" ><a href="ViewCustomers_Class.php" class="scroll"><span>Services</span></a></li>
	 <li><a href="EditCoach.php" class="scroll"><span>Edit profile</span></a></li>
	 <li><a href="Controller/c_logout.php" class="scroll"><span>Logout</span></a></li>
    </ul>
  </div>
</nav>
</nav>
</div>



<div  class="banner-bottom">
		<div class="container">
			<h4 class="w3l_lotus">lotus point</h4>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_banner_bottom_grid_left">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-heart-o" aria-hidden="true"></i>
					</div>
					<h4>Tips</h4>
					<a href="AddTips.php"> <button type="button" class="btn btn-outline-primary-lg">Add new Tips</button> </a>
				</div>
				<div class="col-md-4 agileits_banner_bottom_grid_left">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-fire" aria-hidden="true"></i>
					</div>
					<h4>Daily workouts</h4>
					<a href="AddWorkout.php"> <button type="button" class="btn btn-outline-primary-lg">Add new workouts</button> </a>
				</div>
				<div class="col-md-4 agileits_banner_bottom_grid_left">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div>
					<h4>Classes</h4>
					<a href="addclass.php"><button type="button" class="btn btn-outline-primary-lg">Add new class</button></a>
				</div>
				<div class="clearfix"> </div>
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