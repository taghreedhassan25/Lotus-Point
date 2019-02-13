<?php

	session_start();

	if (isset($_SESSION["user_id"]))
  	{
  		if ($_SESSION["user_id"] != -1)
  		{
  			$id = $_SESSION["user_id"];
	  		$name = $age = $weight = $height = $photo = "";

	  		$con = mysqli_connect("localhost","root","");

			if (!$con)
				die("could not connect".mysqli_connect_error());

			mysqli_select_db($con,"lotus");

			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{	
				$name = $_POST["name"];
				// $photo = $_POST["Uploadphoto"];
	          	$age = $_POST["age"];
	          	$weight = $_POST["weight"];
	          	$height = $_POST["height"];

				$imagename = $_FILES["Uploadphoto"]["name"]; 

	        	//Get the content of the image and then add slashes to it 
				$imagetmp = addslashes (file_get_contents($_FILES['Uploadphoto']['tmp_name']));

	          	$sql_insert = "Insert client_info (client_ID,client_name,client_age,client_weight,client_height,client_photo) values(".$id.",'".$name."',".$age.",".$weight.",".$height.",'".$imagetmp."')";

				// echo $sql_update;
				
				if (!mysqli_query($con,$sql_insert))
					{
						$sql_update = "Update client_info set client_name='".$name."', client_photo ='".$imagetmp."' , client_weight =".$weight.", client_height =".$height.", client_age =".$age." where client_ID =".$id;

						if (mysqli_query($con,$sql_update))
						{

							header('Location: http://localhost/php/editprofile.php');
						}

						
					} 
				else
					{
						header('Location: http://localhost/php/home.php');
						exit();
						//echo "Updated successfully !";
					}
			}

		}
		else
		{
			// add msg before refresh
			header('Location: http://localhost/php/home.php');
			exit();
		}
	}
	else
	{
		// add msg before refresh
		header('Location: http://localhost/php/home.php');
		exit();
	}


?>