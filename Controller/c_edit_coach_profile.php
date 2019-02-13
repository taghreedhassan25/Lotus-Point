
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
	        	$id = $_SESSION["user_id"];
	
					$name = $_POST["name"];
					$imagename = $_FILES["Uploadphoto"]["name"]; 

		        	//Get the content of the image and then add slashes to it 
					$imagetmp = addslashes (file_get_contents($_FILES['Uploadphoto']['tmp_name']));
					
					$sql_update = "Update coach_info set coach_name='".$name."', picture ='".$imagetmp."' where coach_ID =".$id;


					// echo $sql_update;
					
					if (!mysqli_query($con,$sql_update))
						echo "Update failed" . mysqli_error($con);
					else
						{
							echo '<script type="text/javascript">
						        alert("Information edited successfully ");
						        location="../Coachpage.php";
						        </script>';
							//echo "Updated successfully !";
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