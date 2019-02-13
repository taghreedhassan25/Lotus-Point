<?php

	session_start();

	$con = mysqli_connect("localhost","root","");

	if (!$con)
		die("could not connect".mysqli_connect_error());

	mysqli_select_db($con,"lotus");

	if (isset($_SESSION["user_id"]))
	{
		if ($_SESSION["type"] == 'default')
		{
			$user_id = $_SESSION["user_id"];

			if ($_SERVER["REQUEST_METHOD"] == "GET") 
			{	
				$challenge_ID = $_GET["id"];

				$sql_insert = "Insert into challenge_enroll (client_ID,challenege_ID) values(".$user_id.",".$challenge_ID.")";

				if (!mysqli_query($con,$sql_insert))
				{
					// echo "Insertion failed" . mysqli_error($con);
					echo '<script type="text/javascript">
					        alert("You already joined this challenge ! ");
					        location="../view_challenges.php";
					        </script>';
				}
				else
				{
					//echo " Inserted Successfully ! ";
					$sql_update = "UPDATE monthly_challenges SET number_participants = number_participants + 1 WHERE challenege_ID=".$challenge_ID;

					if (!mysqli_query($con,$sql_update))
					{
						 //echo "Update failed" . mysqli_error($con);
					}
					else
					{
						 //echo "updated Successfully";
						// header('Location: http://localhost/php/home.php');
						// exit;
						echo '<script type="text/javascript">
					        alert("Joined challenge successfully ! ");
					        location="../view_challenges.php";
					        </script>';
					}
				}
			}
		}
		else
		{
			echo '<script type="text/javascript">
					        alert("Need to be signed in as a client");
					        location="../view_challenges.php";
					        </script>';
		}

	}

	echo '<script type="text/javascript">
	        alert("Need to be log in or register first !");
	        location="../Signup.php";
	        </script>';

?>