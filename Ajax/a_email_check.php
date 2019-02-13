<?php

	$con = mysqli_connect("localhost","root","");

	if (!$con)
		die("could not connect".mysqli_connect_error());

	mysqli_select_db($con,"lotus");

	if ($_SERVER["REQUEST_METHOD"] == "GET") 
	{	
		$email = $_REQUEST["email"];
		
		$sql_select = "Select * from users where email ='".$email ."'";
		$result = mysqli_query($con,$sql_select);

		if (mysqli_fetch_assoc($result)) 
		{
			echo "Email already used !";
		}
		else
		{
			echo "";
		}
	}
	else
	{
		echo "response not received !";
	}

?>