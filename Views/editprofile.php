<?php
error_reporting(0);

session_start();

  if (!isset($_SESSION["user_id"]))
  {
    if ($_SESSION["type"] != "default")
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


<script type="text/javascript" src="our_js/validate_EditProfile.js"> </script>
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
<!--
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
-->
<!--
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
-->
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
   <li><a href="Controller/c_logout.php" class="scroll"><span>Logout</span></a></li>
    </ul>
  </div>
</nav>
</nav>
</div>


<?php
  
$con = mysqli_connect("localhost","root","");

  if (!$con)
    die("could not connect".mysqli_connect_error());

  mysqli_select_db($con,"lotus");

 $name = $age = $weight = $height = "";
  if (isset($_SESSION["user_id"]))
  {
    $id = $_SESSION["user_id"];

    if ($id != -1)
    {
      $sql_select = "Select * from client_info where client_ID =".$id;
      $result = mysqli_query($con,$sql_select);

      if ($row = mysqli_fetch_assoc($result)) 
      {
          $name = $row["client_name"];
          $age = $row["client_age"];
          $weight = $row["client_weight"];
          $height = $row["client_height"];
      }
    }
}
?>

<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3>Personal info</h3>
        
        <form class="form-horizontal" enctype="multipart/form-data"  onsubmit="validateForm()"	method="POST" action="Controller/c_edit_profile.php" name="myform">

          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control"  name="name" type="text" value="<?php echo $name; ?>"
              required="true" >
            </div>
          </div>

        	 <div class="form-group">
        	 <label class="col-lg-3 control-label" for="Upload photo">Upload photo:</label>
        	  <div class="col-md-4">
        	  <input id="Upload photo" name="Uploadphoto" class="input-file"  type="file">
        	  </div>
        	</div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Age:</label>
            <div class="col-lg-8">
              <input class="form-control"  name="age" type="number" value="<?php echo $age; ?>" 
              required="true" 	maxlength="3" max="100" min="10">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Weight:</label>
            <div class="col-lg-8">
              <input class="form-control" name="weight"  type="number" value="<?php echo $weight; ?>"
              	max="200" min="10" required="true" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Height:</label>
            <div class="col-lg-8">
              <input class="form-control" name="height"  type="number" value="<?php echo $height; ?>" 
              max="250" min="10" required="true" >
            </div>
          </div>

		<div class="form-group">
		  <label class="col-lg-3 control-label" for="Gender">Gender:</label>
		  <div class="col-md-4"> 
		    <label class="radio-inline" for="Gender-0">
		      <input type="radio" name="Gender" id="Gender-0" value="1" >
		      Male
		    </label> 
		    <label class="radio-inline" for="Gender-1">
		      <input type="radio" name="Gender" id="Gender-1" value="2" checked="checked">
		      Female
		    </label>
		  </div>
		</div>
          
         
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" name="submit"  value="Save Changes" >
              <span></span>
              <input type="reset" class="btn btn-default"  name="cancel" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>




<div class="footer navbar-fixed-bottom">
<div class="w3_agile_copyright">
		<div class="container">
			<p>© 2018 Lotus Point. </p>
		</div>
	</div>

</body>



</html>