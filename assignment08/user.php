
<?php

	include ("includes/functions.php");
	
	$user_name = inputValid("user_name");
	$password = inputValid("password");

	if ($user_name != null && $password != null) {
	
		$user_info = [
			"user_name" => $user_name,
			"password" => $password,
		];
			
		createCookie("user", json_encode($user_info));
	}	
	
	header("Location: index.php");
	
?>

