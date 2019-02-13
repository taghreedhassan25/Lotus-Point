<?php

	session_start();

	$con = mysqli_connect("localhost","root","");

	if (!$con)
		die("could not connect".mysqli_connect_error());

	mysqli_select_db($con,"lotus");

	if (isset($_SESSION["user_id"]))
	{
		echo $_SESSION["type"];

		if ($_SESSION["type"] == 'default')
		{
			$user_id = $_SESSION["user_id"];

			// $sql_select = "Select * from client_class_review";
			// $result = mysqli_query($con,$sql_select);

			// if (mysqli_fetch_assoc($result)) 
			// {

			// }

			if ($_SERVER["REQUEST_METHOD"] == "GET") 
			{	
				$class_ID = $_GET["id"];

				$sql_insert = "Insert into client_class_review (class_ID,user_ID) values(".$class_ID.",".$user_id.")";

				if (!mysqli_query($con,$sql_insert))
				{
					 echo "Insertion failed" . mysqli_error($con);
					 // echo '<script type="text/javascript">
					 //        alert("You already joined this class ! ");
					 //        location="../home.php";
					 //        </script>';
				}
				else
				{
					// echo " Inserted Successfully ! ";
					$sql_update = "UPDATE class_info SET number_participans = number_participans + 1 WHERE class_ID=".$class_ID;

					if (!mysqli_query($con,$sql_update))
					{
						// echo "Update failed" . mysqli_error($con);
					}
					else
					{
						// echo "updated Successfully";
						// header('Location: http://localhost/php/home.php');
						// exit;

						echo '<script type="text/javascript">
					        alert("Joined class successfully !");
					        location="../home.php";
					        </script>';

					}
				}
			}
		}
		else
		{
			echo '<script type="text/javascript">
					        alert("Need to be signed in as a client");
					        location="../home.php";
					        </script>';
		}

	}
	else
	{
    echo '<script type="text/javascript">
                  alert("Need to register or log in first");
                  location="../Signup.php";
                  </script>';

	}

?>