<?php
	// Include your login processing script here.
	session_start();

	require_once "db.php";
	//Getting username and password from the user
	$uname = trim(stripslashes(htmlspecialchars($_POST['jedi-uname'])));
	$pswd = trim(stripslashes(htmlspecialchars($_POST['jedi-pswd'])));
	$querySQL="select * from jedilogin where jedi_username='" . $uname . "'";

	$result = $dbconnection->query($querySQL);

	if($result->num_rows > 0){
		//echo "found!";

		session_regenerate_id();

		$user_info_array = array(
			"name" => "$uname"
		);

		$_SESSION['user'] = json_encode($user_info_array);
		header("Location: ../profile.php");
	}
	else{
		//echo "user not found!";
		header("Location: ../index.php?loginerror=1");
	}


?>