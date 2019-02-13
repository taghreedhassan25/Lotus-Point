
<?php
error_reporting(0);

session_start();

  if (!isset($_SESSION["user_id"]))
  {
    echo '<script type="text/javascript">
                  alert("Need to register or log in first");
                  location="Signup.php";
                  </script>';
  }

?>

<html>
<head>
	
<title>View Challenges</title>
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


<div class="container">
  <h3>Monthly Challenges</h3> 
  <br/>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Description</th>
        <th></th>
        <th>Number of Participants</th>
        <th>Join</th>
      </tr>
    </thead>
    <tbody>
        <?php
  
        $con = mysqli_connect("localhost","root","");

          if (!$con)
            die("could not connect".mysqli_connect_error());

          mysqli_select_db($con,"lotus");

          $name = $age = $weight = $height = $gender =  $challenges_completed = "";

          $sql_select = "Select * from monthly_challenges";
          $result = mysqli_query($con,$sql_select);

          while ($row = mysqli_fetch_assoc($result)) 
          {
              echo"<tr> <td> ".$row['description']."</td>
              <td> <img src='getImage.php?id=".$row['challenege_ID']."&tablename=monthly_challenges'width=300 height=240></td>
              <td>". $row['number_participants']."</td>
              <td> <a href='Controller/c_join_challenge.php?id=".$row['challenege_ID']."'> <button  type='button' class='btn btn-secondary btn-lg'>  Join </button> </a> </td> </tr>
              ";
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

</div>

</body>

</html>