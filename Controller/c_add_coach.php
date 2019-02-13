
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
		        	$email = $_POST['email'];
		        	$psw = $_POST['psw'];
		        	$cryptpass = password_hash($psw, PASSWORD_DEFAULT);

					$sql_select = "Select * from users where email ='".$email ."'";
					$result = mysqli_query($con,$sql_select);

					if (mysqli_fetch_assoc($result)) 
					{
						echo '<script type="text/javascript">
						alert("Email already in use !");
					        location="../AddRemoveCoach.php";
					        </script>';
						// header('Location: http://localhost/php/Signup.php');
						// exit;
					}
					else
					{
					$sql_insert = "Insert into users (email,password,type) values('".$email."','".$cryptpass."','coach')";

					if (!mysqli_query($con,$sql_insert))
					{
						echo "insertion failed";
						
					}
					else
					{
						$sql_select_id = "Select * from users where email ='".$email."'";
						echo $sql_select_id;
						$result_select = mysqli_query($con,$sql_select_id);
						$row = mysqli_fetch_assoc($result_select);
						

						$id = $row["id"];

						$sql_insert = "Insert into coach_info (coach_ID) values(".$id.")";

						if (!mysqli_query($con,$sql_insert))
						{
							echo "insertion failed";
						}
						else
						{
						echo '<script type="text/javascript">
						        alert("Coach added successfully ");
						        location="../Adminpage.php";
						        </script>';
						}
					}
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