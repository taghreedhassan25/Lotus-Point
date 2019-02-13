
<?php
error_reporting(0);

session_start();

if (isset($_SESSION["type"]))
  {
    if (! $_SESSION["type"]=="coach")
    {
        header('Location: http://localhost/php/home.php');
        exit();
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
   <li class="active" ><a href="Coachpage.php" class="scroll"><span>Services</span></a></li>
   <li><a href="EditCoach.php" class="scroll"><span>Edit profile</span></a></li>
   <li><a href="Controller/c_logout.php" class="scroll"><span>Logout</span></a></li>
    </ul>
  </div>
</nav>
</nav>
</div>


<div class="container">
    <h1>New Class</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <form class="form-horizontal" enctype="multipart/form-data" action="Controller/c_add_class.php" method="POST" name="myform">

          <div class="form-group">
            <label class="col-lg-3 control-label">Description:</label>
            <div class="col-lg-8">
            <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-lg" name="description">
            </div>
          </div>
        <div class="form-group">
            <label class="col-lg-3 control-label">Class Type:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select  name="class_type" class="form-control"> 
              
                   <option value="Yoga">Yoga</option>
                  <option value="Zomba">Zomba</option>
                  <option value="Pillates">Pillates</option>
                  <option value="Belly Dancing">BellyDancing</option>
                  
                </select>
              </div>
            </div>
          </div>
         <div class="form-group">
         <label class="col-lg-3 control-label" for="Upload photo">Upload photo:</label>
          <div class="col-md-4">
          <input id="Uploadphoto" name="Uploadphoto" class="input-file" type="file">
          </div>
        </div>
               
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" name="submit"  value="Add Class" >
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

  <?php
                 //    echo "here";
                 //  $con = mysqli_connect("localhost","root","");

                 //  if (!$con)
                 //    die("could not connect".mysqli_connect_error());

                 //  mysqli_select_db($con,"lotus");

                 // $classtype ="";

                 //  // if (isset($_SESSION["user_id"]))
                 //  // {
                 //  //   $id = $_SESSION["user_id"];

                 //  //   if ($id != -1)
                 //  //   {
                 //      $sql_select = "SELECT class_type FROM class_type";
                 //      $result = mysqli_query($con,$sql_select);
                 //      if( $result)
                 //      { echo "string";
                 //        $select= '<select  class="form-control">';


                 //    // }
                 //        while ($row = mysqli_fetch_assoc($result)) 
                 //        {
                          
                 //        $select.= '<option value="'.$row['class_type'].'">'.$row['class_type'].'</option>';

                 //        }
                 //  }

                 //    $select.='</select>';
                 //    echo $select;
                 //  // }
                ?>