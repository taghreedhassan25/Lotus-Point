<?php
error_reporting(0);

  session_start();

  if (isset($_SESSION["type"]))
  {
    if ( $_SESSION["type"]!="admin")
    {
        echo '<script type="text/javascript">
        alert("You do not have the privelege to see this page");
        location="home.php";
        </script>';
        // header("Refresh:5;Location: http://localhost/php/home.php");
        // exit();
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
      <li>
      <a href="#">Services</a>
      <ul id="admin" class="dropdown">
        <li><a href="addmonthchallenge.php">Add Month Challange</a></li>
        <li><a href="AddRemoveCoach.php">Add coaches</a></li>
        <li><a href="Adminpage.php">View Statistics</a></li>
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
				<h3>Admin Homepage</h3>
			</div>
			<!-- <div class="agileits_w3layouts_book_right">
			<a href="addmonthchallenge.php" class="play-icon popup-with-zoom-anim" >Add</a>
			</div> -->
			<div class="clearfix"> </div>
		</div>
	</div>

	</br>


  <div class="container">
     <table class="table table-striped">
    <thead>
      <tr>
        <th>Number of classes</th>
        <th>Number of clients</th>
        <th>Number of coaches</th>
      </tr>
    </thead>
    <tbody>
      <?php

        $con = mysqli_connect("localhost","root","");

          if (!$con)
            die("could not connect".mysqli_connect_error());

          mysqli_select_db($con,"lotus");

          $sql_select = "SELECT COUNT(class_ID) as total FROM class_info";
          $result = mysqli_query($con,$sql_select);
          $classes_count = mysqli_fetch_assoc($result);

           $sql_select = "SELECT COUNT(client_ID) as total FROM client_info";
          $result = mysqli_query($con,$sql_select);
          $clients_count = mysqli_fetch_assoc($result);

           $sql_select = "SELECT COUNT(coach_ID) as total FROM coach_info";
          $result = mysqli_query($con,$sql_select);
          $coaches_count = mysqli_fetch_assoc($result);

          
           echo"<tr> <td> ".$classes_count['total']."</td>
            <td> ".$clients_count['total']." </td>
            <td>". $coaches_count['total']."</td> </tr> ";
      ?>
    </tbody>
  </table>
  </div>

<div class="container">
  <h3>Customers Information</h3> 
  </br>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Weight</th>
        <th>Height</th>
        <th>Gender</th>
        <th>Challanges Comlpleted</th>
      </tr>
    </thead>
    <tbody>
        <?php
  
        $con = mysqli_connect("localhost","root","");

          if (!$con)
            die("could not connect".mysqli_connect_error());

          mysqli_select_db($con,"lotus");

         $name = $age = $weight = $height = $gender =  $challenges_completed = "";

          if (isset($_SESSION["user_id"]))
          {
            $id = $_SESSION["user_id"];

            if ($_SESSION["type"] == 'admin')
            {
              if ($id != -1)
              {
                $sql_select = "Select * from client_info";
                $result = mysqli_query($con,$sql_select);

                  while ($row = mysqli_fetch_assoc($result)) 
                  {
                      echo"<tr> <td> ".$row['client_name']."</td>
                      <td> ".$row['client_age']." </td>
                      <td>". $row['client_weight']."</td>
                      <td>". $row['client_height']."</td>
                      <td>". $row['client_gender']." </td>
                      <td>". $row['challenges_completed']." </td>  </tr>";
                        }
                    }
              }
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