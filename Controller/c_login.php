<?php

	session_start();

	$con = mysqli_connect("localhost","root","");

	if (!$con)
		die("could not connect".mysqli_connect_error());

	mysqli_select_db($con,"lotus");

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{	
		$email = $_POST["email"];
		$pass = $_POST["psw"];

		$cryptpass = password_hash($pass, PASSWORD_DEFAULT);

		$sql_select = "Select * from users where email ='".$email ."'";
		$result = mysqli_query($con,$sql_select);

		if ($row = mysqli_fetch_assoc($result)) 
		{
			if (password_verify($pass, $row["password"]))
			{	
				// user exists !
				$_SESSION["user_id"] = $row['id'];
				$_SESSION["email"] = $row['email'];

				//check user type
				if ($row['type'] == 'admin')
				{
					$_SESSION["type"] = 'admin';
					header('Location: http://localhost/php/Adminpage.php');
					exit();
				}
				elseif ($row['type'] == 'coach') 
				{
					$_SESSION["type"] = 'coach';
					header('Location: http://localhost/php/Coachpage.php');
					exit();
				}
				$_SESSION["type"] = 'default';
				header('Location: http://localhost/php/editprofile.php');
				exit();
			}				
			else
			{
				$_SESSION["user_id"] = -1;
				header('Location: http://localhost/php/login.php');
				exit();
			}
		}
		else 
		{
			$_SESSION["user_id"] = -1;
			header('Location: http://localhost/php/login.php');
			exit();
		}	
	}



?>