<?php
error_reporting(0);

  session_start();

  if (!isset($_SESSION["user_id"]))
  {
    if ($_SESSION["type"] != "admin")
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
  
li {
 display: block;
 transition-duration: 0.5s;
}

li:hover {
  cursor: pointer;
}

ul li ul{
  visibility: hidden;
  opacity: 0;
  position: relative;
  transition: all 0.5s ease;
  margin-top: 1rem;
  left: 0;
  display: none;
  z-index: 1;
}

ul li:hover > ul,
ul li ul:hover #admin{
  visibility: visible;
  opacity: 1;
  display: inline-block;
   z-index: 1;
}

ul li ul li {
  clear: both;
  
}

div#no_match{
    color: red;
  }

</style>

<script type="text/javascript">
  function check_email(email) 
  {
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("taken_user").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "Ajax/a_email_check.php?email=" + email, true);
        xmlhttp.send();
  }
  

</script>
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
      <li>
      <a href="#">Services</a>
      <ul id="admin" class="dropdown">
        <li><a href="addmonthchallenge.php">Add Month Challange</a></li>
        <li><a href="AddRemoveCoach.php">Add coaches</a></li>
        <li><a href="Adminpage.php">view Statistics</a></li>
      </ul>
      </li>
       <li><a href="Controller/c_logout.php" class="scroll"><span>Logout</span></a></li>
    </ul>
  </div>
</nav>
</nav>
</div>

<div class="agileits_w3layouts_book">
    <div class="container">
      <div class="agileits_w3layouts_book_left">
        <h3>Add Coach</h3>
      </div>
      <!-- <div class="agileits_w3layouts_book_right">
      <a href="addmonthchallenge.php" class="play-icon popup-with-zoom-anim" >Add</a>
      </div> -->
      <div class="clearfix"> </div>
    </div>
  </div>

<form name="addCoach" action="Controller/c_add_coach.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h4>Fill the following coach information</h4>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" onkeyup="check_email(this.value)" required>
    <div id="taken_user"></div>

    </br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    </br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    </br>

    <div class="clearfix">
      <button type="reset" class="cancelbtn">Clear</button>
      <button type="submit" class="signupbtn">Add</button>
    </div>
  </div>
</form>



<div class="footer navbar-fixed-bottom">
<div class="w3_agile_copyright">
		<div class="container">
			<p>© 2018 Lotus Point. </p>
		</div>
	</div>



</body>

</html>