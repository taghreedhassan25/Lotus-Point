
<?php

	session_start();

	$con = mysqli_connect("localhost","root","");

	if (!$con)
		die("could not connect".mysqli_connect_error());

	mysqli_select_db($con,"lotus");

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	  	if (isset($_SESSION["user_id"]))
      	{
	        if ($_SESSION["type"]=="coach")
	        {
	        	$coach_id = $_SESSION["user_id"];
	        	$desc = $_POST["description"];

	        	$imagename = $_FILES["Uploadphoto"]["name"]; 

	        	//Get the content of the image and then add slashes to it 
				$imagetmp = addslashes (file_get_contents($_FILES['Uploadphoto']['tmp_name']));

	        	$sql_insert = "Insert into workout(coach_ID,description,picture) values(".$coach_id.",'".$desc."','".$imagetmp."')";

				if (!mysqli_query($con,$sql_insert))
				{
					//echo "insertion failed" . mysqli_error($con);
					echo '<script type="text/javascript">
						        alert("Workour wasn t added ");
						        location="../Coachpage.php";
						        </script>';
				}
				else
				{
					//echo "insertion succeeded !";
					echo '<script type="text/javascript">
						        alert("Workout added successfully ");
						        location="../Coachpage.php";
						        </script>';
				}
	        }
	        else
	        {
	     
	        echo '<script type="text/javascript">
						        alert("You do not have enough privelege ");
						        location="../home.php";
						        </script>';
	   	 }
    	}
    	else
    	{
    	echo '<script type="text/javascript">
						        alert("You need to be signed in first");
						        location="../Signup.php";
						        </script>';
	    }
	}

?>