<?php
	//Use this file to prevent access to the "includes/" for everyone.
	// For people who are logged in, redirect them to the homepage.
	// For people who are not logged in, redirect them to the homepage and display an error message.
	if(!isset($_SESSION['user'])){
		header("Location: index.php?accesserror=1");
	}
?>