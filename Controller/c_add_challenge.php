
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
      		if ($_SESSION["type"] == "admin")
		    {
		    	$id = $_SESSION["user_id"];
		        if ($id != -1)
		        {
		        	$desc = $_POST["description"];
		        	$imagename = $_FILES["Uploadphoto"]["name"]; 

		        	//Get the content of the image and then add slashes to it 
					$imagetmp = addslashes (file_get_contents($_FILES['Uploadphoto']['tmp_name']));

		        	// $photo = "";
		        	$sql_insert = "Insert into monthly_challenges (description,picture) values('".$desc."','".$imagetmp."')";

					if (!mysqli_query($con,$sql_insert))
					{
						// echo "insertion failed";
					}
					else
					{
						echo '<script type="text/javascript">
						        alert("Challenge added successfully ");
						        location="../view_challenges.php";
						        </script>';
						// echo "insertion succeeded !";
						// header('Location: http://localhost/php/Adminpage.php');
						// exit;
					}
		        }
		    }
		    else
		    {
		    	echo '<script type="text/javascript">
				        alert("You do not have enough privelege");
				        location="../home.php";
				        </script>';
		    }
    	}
    	else
    	{
			echo '<script type="text/javascript">
				        alert("Need to be signed in");
				        location="../home.php";
				        </script>';
    	}
	}

?>