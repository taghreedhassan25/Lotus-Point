
<?php

session_start();

$con = mysqli_connect("localhost","root","");

	if (!$con)
		die("could not connect".mysqli_connect_error());

	mysqli_select_db($con,"lotus");

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{	
		$email = $_POST["email"];

		$sql_insert = "Insert into subscriptions (email_address) values('".$email."')";

		if (!mysqli_query($con,$sql_insert))
		{
			//echo "insertion failed";
			header('Location: http://localhost/php/home.php');
			exit;
		}
		else
		{
			//echo "insertion succeeded !";
			header('Location: http://localhost/php/thank_you.php');
			exit;
		}
	}

?>