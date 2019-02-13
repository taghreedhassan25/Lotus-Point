
<?php
	session_start();
	session_destroy();

	// echo " YOU have logged out ! Go to home ";

	// echo "session is empty ? ", !isset($_SESSION["username"]);

header('Location: http://localhost/php/home.php');
exit;

?>
