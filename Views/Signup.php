<?php
error_reporting(0);

session_start()
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
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<script>
 // AJAX
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
  
  // normal JS
  function check_repass($repass)
  {
    $pass = document.forms["signup"]["psw"].value;

    if ($pass != $repass)
      document.getElementById("no_match").innerHTML = "Passwords do not match";
    else
      document.getElementById("no_match").innerHTML = "";

    return;
  }

</script>

<style type="text/css">
  
  div#no_match{
    color: red;
  }

  div#taken_user{
    color: red;
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
      <li class="active"><a href="home.php"><span>Home</span></a></li>
    <li><a href="login.php" class="scroll"><span>Log in</span></a></li>
    </ul>
  </div>
</nav>
</nav>
</div>

<form name="signup" action="Controller/c_sign_up.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" onkeyup="check_email(this.value)" required>
    <div id="taken_user"></div>

    </br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    </br>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" onkeyup="check_repass(this.value)" required> 
    <div id="no_match"> </div>
    </br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    </br>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>



<div class="footer navbar-fixed-bottom">
<div class="w3_agile_copyright">
		<div class="container">
			<p>© 2018 Lotus Point. </p>
		</div>
	</div>

</div>

</body>

</html>