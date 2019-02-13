
<?php
session_start();

	if ($_SESSION["type"] == 'admin')
	{
		header('Location: http://localhost/php/Adminpage.php');
		exit();
	}
	elseif ($_SESSION["type"]== 'coach') 
	{
		header('Location: http://localhost/php/Coachpage.php');
		exit();
	}

	header('Location: http://localhost/php/editprofile.php');
	exit();

?>