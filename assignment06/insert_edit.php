
<?php

include("includes/passwords.php");

$mysql = new mysqli("localhost", "amasch02", $mysql_password, "amasch02");


	$calories = htmlentities($_REQUEST["calories"]);
	$description = htmlentities($_REQUEST["description"]);
	$id = htmlentities($_REQUEST["id"]);

	if ($id) {
		$update_query = 'UPDATE olympic_log SET calories=?, description=?  WHERE id=?';
		$update = $mysql->prepare($update_query);
		$update->bind_param("isi", $calories, $description, $id);
		$update->execute();
	} else {
		$insert_query = 'INSERT INTO olympic_log (calories, description, date) VALUES (?, ?, NOW())';
		$insert = $mysql->prepare($insert_query);
		$insert->bind_param("is", $calories, $description);
		$insert->execute();
	}


header("Location: addActivity.php");

?>

