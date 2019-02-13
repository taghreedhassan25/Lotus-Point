<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
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
								<li><a href="#services" class="scroll"><span>Services</span></a></li>
								<li><a href="#classes" class="scroll"><span>Classes</span></a></li>
							</ul>
							<?php
								if (isset($_SESSION["user_id"]))
								{
									if ($_SESSION["user_id"] != -1)
									{	$id = $_SESSION["user_id"];
									// echo "<b>id of session is set </b>".$id;
									// echo "Welcome ". $_SESSION["email"];
									echo "<div class='agile_header_right'>
								<ul>
									<li><a href='Controller/c_homeroute_user.php'> <i class='fa' aria-hidden='true'></i>".$_SESSION["email"]." </a></li>
									<li> <a href='Controller/c_logout.php'> <i class='fa' aria-hidden='true'></i> logout</a> </li>
								</ul>
								</div>";
									}
									else
									{
										echo "<div class='agile_header_right'>
								<ul>
									<li><i class='fa fa-phone' aria-hidden='true'></i>+02 0100 844 9897</li>
									<li><i class='fa fa-envelope-o' aria-hidden='true'></i><a href='mailto:info@example.com'>lotuspoint6@gmail.com</a></li>
								</ul>
								</div>";
									}
								}
								else
								{
									echo "<div class='agile_header_right'>
								<ul>
									<li><i class='fa fa-phone' aria-hidden='true'></i>+02 0100 844 9897</li>
									<li><i class='fa fa-envelope-o' aria-hidden='true'></i><a href='mailto:info@example.com'>lotuspoint6@gmail.com</a></li>
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
				<h2>yoga teaches you how to listen your body</h2>
				<p>Subscribe to our newsletter to get the latest scoop right to your inbox.</p>
				<form action="Controller/c_subscribe.php" method="POST"> 
					<input type="email" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
				</form>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- register  & Login -->
	<div class="agileits_w3layouts_book">
		<div class="container">
			<div id="register" class="agileits_w3layouts_book_left">
				<h3>fitness improve your style...</h3>
			</div>
			<?php

				if (!isset($_SESSION["user_id"]))
				{
					
					echo "<div class='agileits_w3layouts_book_right'>
						 <a href='Signup.php'> <button  type='button' class='btn btn-secondary btn-lg'>  Register </button> </a> 
						 <a href='login.php'> <button type='button' class='btn btn-secondary btn-lg'>  Login </button> </a>
					</div> ";

				}
				elseif ($_SESSION["user_id"] == -1)
				{
					echo "<div class='agileits_w3layouts_book_right'>
						 <a href='Signup.php'> <button  type='button' class='btn btn-secondary btn-lg'>  Register </button> </a> 
						 <a href='login.php'> <button type='button' class='btn btn-secondary btn-lg'>  Login </button> </a>
					</div> ";

				}
			?>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- banner-bottom -->
	<div id="services" class="banner-bottom">
		<div class="container">
			<h4 class="w3l_lotus">lotus point</h4>
			<h3 class="w3layouts_head">welcome to our <span>lotus point</span></h3>
			<p class="w3_para">Yoga is the practice of quieting the mind.</p>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-3 agileits_banner_bottom_grid_left">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-heart-o" aria-hidden="true"></i>
					</div>
					<a href="perfect_weight.php" > <h4>Check Your Perfect Weight</h4> </a>
					<p>Click to see your perfect weight ! </p>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid_left">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-heart-o" aria-hidden="true"></i>
					</div>
					 <a href="view_tips.php" > <h4>View Tips</h4> </a>
					<p>Click to see Tips</p>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid_left">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-fire" aria-hidden="true"></i>
					</div>
					 <a href="view_workouts.php" ><h4>View Workouts</h4> </a>
					<p>Click to view workouts</p>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid_left">
					<div class="agileinfo_banner_bottom_grid_l_grid">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div>
					 <a href="view_challenges.php" ><h4>yoga month challenge</h4> </a>
					<p>click to view challenges</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- services-bottom -->
	<div class="services-bottom">
		<div class="col-md-7 wthree_services_bottom_left">
			<div class="wthree_services_bottom_left_grid">
				<div class="col-md-6 w3_agileits_services_bottom_l_grid">
					<div class="agile_services_bottom_l_grid1">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<div class="w3_service_bottom_grid_pos">
							<h3>living skilfully by making yoga</h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 w3_agileits_services_bottom_r_grid">
					<h4>yoga is a way to freedom</h4>
					<p>Praesent vulputate ipsum a velit tempor convallis. 
						Phasellus ultrices lorem eget erat tempus commodo efficitur odio.</p>
					<div class="agileits_w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_services_bottom_left_grid">
				<div class="col-md-6 w3_agileits_services_bottom_r_grid">
					<h4>yoga for real energy</h4>
					<p>Praesent vulputate ipsum a velit tempor convallis. 
						Phasellus ultrices lorem eget erat tempus commodo efficitur odio.</p>
					<div class="agileits_w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-6 w3_agileits_services_bottom_l_grid">
					<div class="agile_services_bottom_l_grid1">
						<img src="images/2.jpg" alt=" " class="img-responsive" />
						<div class="w3_service_bottom_grid_pos">
							<h3>inspiration for joyful living</h3>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="col-md-5 wthree_services_bottom_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3_agile_services_bottom_right_grid">
								<p class="w3layouts_head_slide">Yoga <span>Practice</span></p>
							</div>
						</li>
						<li>
							<div class="w3_agile_services_bottom_right_grid1">
								<p class="w3layouts_head_slide">Yoga <span>Practice</span></p>
							</div>
						</li>
						<li>
							<div class="w3_agile_services_bottom_right_grid2">
								<p class="w3layouts_head_slide">Yoga <span>Practice</span></p>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //stats -->
<!-- classes -->
	<div id="classes" class="banner-bottom">
		<div class="container">
			<h4 class="w3l_lotus">lotus Classes</h4>
			<h3 class="w3layouts_head">new classes from <span>lotus point</span></h3>
			<p class="w3_para">Yoga is the practice of quieting the mind.</p>
			<div class="w3layouts_classes_grids">
				<ul id="flexiselDemo1">	
					<li>
				<?php
					$con = mysqli_connect("localhost","root","");

			          if (!$con)
			            die("could not connect".mysqli_connect_error());

			          mysqli_select_db($con,"lotus");

			          $sql_select = "Select * from class_info";
			          $result = mysqli_query($con,$sql_select);

			          while ($row = mysqli_fetch_assoc($result))
			          {
			          	$coach_ID = $row['coach_ID'];

			          	$sql_coach_select = 
			          	"SELECT * FROM coach_info where coach_ID=".$coach_ID;
			          	$result_coach = mysqli_query($con,$sql_coach_select);
			          	$row_coach = mysqli_fetch_assoc($result_coach);

			     	echo "<li><div class='w3_agile_class_grid'>
					<div class='w3layouts_team_grid agileits_w3layouts_class'> 
			          	<img src='getImage.php?id=".$row['class_ID']."&tablename=class_info' alt='' class='img-responsive'>";

						echo "<div class='agileits_w3layouts_class_pos'>
						<ul>
							<li><i class='fa fa-calendar-o' aria-hidden='true'></i>26/12/2018</li>
						</ul>
							</div>
						</div>
						<div class='w3_agileits_class_grid'>	
							<p>".$row['description']."</p>
							<h4>".$row['class_type']."</a></h4>
							<h4><a href='Controller/c_join_class.php?id=".$row['class_ID']."'>Join</h4> </a>
							<h5>".$row_coach['coach_name']."</h5>
							<div class='w3_agileits_class_grid_pos'>
								<img src='getImage.php?id=".$row_coach['coach_ID']."&tablename=coach_info'	width='70' height='70'  class='img-responsive img-circle' />
								</div>	
							</div>
						</li>
						";
			          } 
					?>
			
			</div> </div> </li> </ul> </div> </div> </div>
<!-- //classes -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h4 class="w3l_lotus">lotus Point</h4>
			<h3 class="w3layouts_head wthree_head">Yoga <span>Cleans</span> the mind</h3>
			<p class="w3_para">Yoga is the practice of quieting the mind.</p>
			
		</div>
	</div>
<!-- //testimonials -->
<!-- mail -->
	<div id="mail" class="banner-bottom">
		<div class="container">
			<h4 class="w3l_lotus">lotus Mail</h4>
			<h3 class="w3layouts_head">Get in <span>touch</span> with us</h3>
			<p class="w3_para">Yoga is the practice of quieting the mind.</p>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-6 w3layouts_mail_grid_left">
					<div class="agileits_mail_grid_left">
						<h3>Contact Info</h3>
						<ul>
							<li><label><i class="fa fa-home" aria-hidden="true"></i></label>1234k Avenue, 4th block, New York City.</li>
							<li><label><i class="fa fa-envelope-o" aria-hidden="true"></i></label><a href="mailto:info@example.com">info@example.com</a></li>
							<li><label><i class="fa fa-phone" aria-hidden="true"></i></label>+1234 567 567</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
		
		<div class="wthree_mail_pos">
			<form action="#" method="post">
				<div class="col-md-10 w3_agileits_contact_left">
					<h3>Contact Us</h3>
					<input type="text" name="Name" placeholder="Your Name" required="">
					<input type="email" name="Email" placeholder="Your Email" required="">
					<input type="text" name="Phone" placeholder="Phone Number" required="">
					<textarea placeholder="Your text here..." required=""></textarea>
				</div>
				<div class="col-md-2 w3_agileits_contact_right">
					<input type="submit" value="">
				</div>
				<div class="clearfix"> </div>
			</form>
		</div>
	
<!-- //mail -->
<!-- copyright -->
	<div class="w3_agile_copyright">
		<div class="container">
			<p>© 2017 Lotus Point. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
<!-- //copyright -->
<!-- carousal -->
	<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					arrows: true,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 1
				  }
				}
			 ]
		  });
		});
	</script>
<!-- //carousal -->
<!-- flexisel -->
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			
		});
	</script>
<!-- //flexisel -->
<!-- Lightbox -->
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.w3layouts_gallery_grid a').simpleLightbox();
	</script>
<!-- //Lightbox -->
<!-- countdown -->
	<script type="text/javascript" src="js/jQuery.yuukCountdown.js" ></script>
    <script>
        $(function(){
            $('#js-countDown').yuukCountDown({
                starttime: '2016/12/17 00:00:00',
                endtime: '2018/6/21 10:59:59',
                notStartCallBack: function(time){
                    console.log("Ready");
                },
                startCallBack: function(time){
                    console.log("Running");
                },
                endCallBack: function(time){
                    console.log("Complete");
                }
            });
        });
    </script>
<!-- //countdown -->
<!-- pop-up-box -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
	<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">
		<h3>Register Here...</h3>		
		<div class="agileits_modal_body">
			<form action="#" method="post">
				<div class="col-md-6 wthree_pop_left">
					<label>Your Name</label>
					<div class="agileits_w3layouts_user">
						<i class="fa fa-user" aria-hidden="true"></i>
						<input type="text" name="Your Name" placeholder=" " required="">
					</div>
					<label>Your Email</label>
					<div class="agileits_w3layouts_user">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<input type="email" name="Email" placeholder=" " required="">
					</div>
				</div>
				<div class="col-md-6 wthree_pop_left">
					<label>Phone Number</label>
					<div class="agileits_w3layouts_user">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<input type="text" name="Phone Number" placeholder=" " required="">
					</div>
					<label>Choose your group</label>
					<div class="agileits_w3layouts_user">
						<i class="fa fa-users" aria-hidden="true"></i>
						<select class="w3_agileits_select" onchange="change_country(this.value)" required="">
							<option value="">---</option>
							<option value="">Any Time</option>
							<option value="">Morning Group</option>         
							<option value="">Evening Group</option>
						</select>
					</div>
				</div>
				<div class="clearfix"> </div>
				<div class="wthree_pop_up">
					<div class="wthree_pop_up_grid">
						<label>Choose your class</label>
						<div class="agileits_w3layouts_user agileits_user">
							<i class="fa fa-eye" aria-hidden="true"></i>
							<select class="w3_agileits_select agileinfo_select" onchange="change_country(this.value)" required="">
								<option value="">---</option>
								<option value="">Hatha Yoga</option>
								<option value="">Sadhana Yoga</option>
								<option value="">Kundalini Yoga</option>
								<option value="">Ashtanga Yoga</option>
								<option value="">Advanced Flow</option>
								<option value="">Morning Flow</option>
								<option value="">Yoga Dance</option>
							</select>
						</div>
					</div>
					<div class="wthree_pop_up_grid">
						<label>Comments here..</label>
						<textarea placeholder="" required=""></textarea>
					</div>
				</div>
				<input type="submit" value="Submit Form">
			</form>
		</div>
	</div>
<!-- //pop-up-box -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Lotus Point
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
  </script>
<!-- //flexSlider -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>