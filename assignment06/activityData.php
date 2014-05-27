
<?php
	
include ("includes/head.php");
include("includes/passwords.php");

$mysql = new mysqli("localhost", "amasch02", $mysql_password, "amasch02");
	
if (isset($_REQUEST["delete"])){
  
	$delete_query = 'DELETE FROM olympic_log WHERE id = ?';
	$delete = $mysql->prepare($delete_query);
	$delete->bind_param("i", $_REQUEST["delete"]);
	$delete->execute();	
}
		
?>

	<table>
	<thead>
		<tr>
			<th>Calories
			<th>Date
			<th>Description			
			<th>Edit / Delete			
	<tbody>

<?php
	
	$select_query = 'SELECT * FROM olympic_log ORDER BY date DESC';
	$select = $mysql->prepare($select_query);
	$select->execute();
	$olympics = $select->get_result();

	$sum_query = 'SELECT SUM(calories) AS Total, MAX(calories) AS Max FROM olympic_log';
	$sum = $mysql->prepare($sum_query);
	$sum->execute();
	$totals = $sum->get_result();
	$total = $totals->fetch_array();

	foreach ($olympics as $event) {
?>
			<tr>
				<td><?= htmlentities($event["calories"]) ?>
				<td><?= htmlentities($event["date"]) ?>
				<td><?= htmlentities($event["description"]) ?>
				<td><a class="edit" href="addActivity.php?edit=<?= htmlentities($event["id"]) ?>">Edit</a> / <a class="edit" href="activityData.php?delete=<?= htmlentities($event["id"]) ?>">Delete</a>
						
<?php
}
?>
			<tr>
			<tr>
				<td><?= htmlentities($total["Total"]) ?> Total Calories
			<tr>
				<td><?= htmlentities($total["Max"]) ?> Max Calories
				
		</table>
<a class="font20" href="addActivity.php">Enter More Activities</a>