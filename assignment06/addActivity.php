
<?php
	
include ("includes/head.php");
include("includes/passwords.php");

$mysql = new mysqli("localhost", "amasch02", $mysql_password, "amasch02");

$calories = "";
$description = "";
$id = "";

if (isset($_REQUEST["edit"])) {

	$id = htmlentities($_REQUEST["edit"]);
	$edit_query = 'SELECT * FROM olympic_log WHERE id = ?';
	$edit = $mysql->prepare($edit_query);
	$edit->bind_param("i", $id);
	$edit->execute();
	$edit_row = $edit->get_result();
	$row = $edit_row->fetch_array();
	
	$calories = htmlentities($row["calories"]);
	$description = htmlentities($row["description"]);
	//$id = $row["id"];	
}
?>	

<form class="entry" action="insert_edit.php" method="POST">
		<label for="calories">Calories:</label>
		<input class="input" name="calories" id="calories" value="<?= $calories ?>">
		<label for="description">Description:</label>
		<input class="description" name="description" id="description" value="<?= $description ?>">
		<input name="id" type="hidden" value="<?= $id ?>">
		<input class="button" type="submit" value="Submit">
			
	</form>
	
	<div class="link">
	<img class="image" src="images/fatcat.jpg" height="250" width="250"></img>
	<a href="activityData.php">Obtain Activity Log</a>	
	</div>
	
		

	</body>
</html>