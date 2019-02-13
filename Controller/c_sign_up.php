
<?php

	session_start();

	// echo "arrived at sign up controller";

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

			if (mysqli_fetch_assoc($result)) 
			{
				echo '<script type="text/javascript">
				alert("Email already in use !");
			        location="../login.php";
			        </script>';
				// header('Location: http://localhost/php/Signup.php');
				// exit;
			}
			else
			{
				$sql_insert = "Insert into users (email,password,type) values('".$email."','".$cryptpass."','default')";
					if (!mysqli_query($con,$sql_insert))
						{
							// echo "Insertion failed" . mysqli_error($con);
							// $_SESSION["user_id"] = -1;
						}
					else
						{
							// echo " Account Created Successfully ! ";
							 echo '<script type="text/javascript">
					        alert("Account Created Successfully ");
					        </script>';

							$sql_select_id = "Select * from users where email ='".$email ."'";
							$result = mysqli_query($con,$sql_select_id);
							$row = mysqli_fetch_assoc($result);
							$_SESSION["user_id"] = $row['id'];
							$_SESSION["email"] = $row['email'];
							$_SESSION["type"] = 'default';
							// echo $row['id'];
						}
			}
	}
	else
	{
		// echo "request method not post";
	}

	 echo '<script type="text/javascript">
        location="../editprofile.php";
        </script>';
	// header('Location: http://localhost/php/home.php');
	// exit;

?>
