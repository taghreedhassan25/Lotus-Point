
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
	        	$type = $_POST["class_type"];
	        	// echo $type;

	        	$imagename = $_FILES["Uploadphoto"]["name"]; 

	        	//Get the content of the image and then add slashes to it 
				$imagetmp = addslashes (file_get_contents($_FILES['Uploadphoto']['tmp_name']));

	        	$sql_insert = "Insert into class_info (coach_ID,class_type,description,picture) values(".$coach_id.",'".$type."','".$desc."','".$imagetmp."')";

	        	// echo $sql_insert;
	        	// echo $coach_id;

				if (!mysqli_query($con,$sql_insert))
				{
					echo "insertion failed" . mysqli_error($con);
				}
				else
				{
					//echo "insertion succeeded !";
					header('Location: http://localhost/php/Coachpage.php');
					exit;
				}
	        }

    	}
	}

?>