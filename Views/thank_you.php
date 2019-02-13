<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
error_reporting(0);

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Lotus Point a Sports Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lotus Point Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>



</head>
	
<body>
<!-- banner -->
	<div class="banner">
		<div class="center-container">
			<div class="w3_agile_header">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-14" id="link-effect-14">
							<ul class="nav navbar-nav">
								<li class="active"><a href="home.php"><span>Home</span></a></li>
							</ul>
							<?php
								if (isset($_SESSION["user_id"]))
								{
									$id = $_SESSION["user_id"];
									// echo "<b>id of session is set </b>".$id;
									// echo "Welcome ". $_SESSION["email"];
									echo "<div class='agile_header_right'>
								<ul>
									<li><i class='fa' aria-hidden='true'></i>".$_SESSION["email"]."</li>
									<li> <a href='Controller/c_logout.php'> <i class='fa' aria-hidden='true'></i> logout</a> </li>
								</ul>
								</div>";
								}
								else
								{
									echo "<div class='agile_header_right'>
								<ul>
									<li><i class='fa fa-phone' aria-hidden='true'></i>+0 (123) 345 543</li>
									<li><i class='fa fa-envelope-o' aria-hidden='true'></i><a href='mailto:info@example.com'>info@example.com</a></li>
								</ul>
								</div>";
								}
							?>
							
						</nav>
					</div>
				</nav>
			</div>
			<div class="w3_agileits_logo">
				<h1><a href="home.php">Lotus point <span>yoga club</span></a></h1>
			</div>
			<div class="agileits_w3layouts_banner_info">
				<h2>Thank you for subscribing ! </h2>
			</div>
		</div>
	</div>
<div class="footer navbar-fixed-bottom">
<div class="w3_agile_copyright">
		<div class="container">
			<p>© 2018 Lotus Point. </p>
		</div>
	</div>

</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>