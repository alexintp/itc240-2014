
<?php
	
include ("Includes/head.php");
include("Includes/passwords.php");

$mysql = new mysqli("localhost", "amasch02", $mysql_password, "amasch02");

$amount = "";
$location = "";
$date = "";
$department = "";
$description = "";
$id = "";

if (isset($_REQUEST["edit"])) {

	$edit_query = 'SELECT * FROM receipts WHERE Id = ?';
	$edit = $mysql->prepare($edit_query);
	$edit->bind_param("i", $_REQUEST["edit"]);
	$edit->execute();
	$edit_row = $edit->get_result();
	$row = $edit_row->fetch_array();
	
	$amount = $row["Amount"];
	$location = $row["Location"];
	$date = $row["Date"];
	$department = $row["Department"];
	$description = $row["Description"];
	$id = $row["Id"];
	
	
} else if (isset($_REQUEST["delete"])){
  
	$delete_query = 'DELETE FROM receipts WHERE Id = ?;';
	$delete = $mysql->prepare($delete_query);
	$delete->bind_param("i", $_REQUEST["delete"]);
	$delete->execute();	
}
?>	

<form class="entry" action="addReceipt.php" method="POST">
		<label for="amount">Amount:</label>
		<input class="input" name="amount" id="amount" value="<?= $amount ?>">
		<label for="location">Location:</label>
		<input class="input" name="location" id="location" value="<?= $location ?>">
		<label for="date">Date:</label>
		<input class="input" name="date" id="date" value="<?= $date ?>">
		<label for="department">Department:</label>
		<select class="input" name="department" id="department">
			<option value="Sales">Sales</option>
			<option value="Marketing">Marketing</option>
			<option value="Operations">Operations</option>
			<option value="Purchasing">Purchasing</option>
			<option value="Other">Other</option>			
		</select>
		<label for="description">Description:</label>
		<input class="description" name="description" id="description" value="<?= $description ?>">
		<input name="id" type="hidden" value="<?= $id ?>">
		<input class="button" type="submit" value="Submit">
			
	</form>
	
	<div class="link">
	<a href="receiptData.php">Obtain Receipt Data</a>
	</div>
	
		
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$amount = $_REQUEST["amount"];
	$location = $_REQUEST["location"];
	$date = $_REQUEST["date"];
	$department = $_REQUEST["department"];
	$description = $_REQUEST["description"];
	$id = $_REQUEST["id"];

	if ($id) {
		$update_query = 'UPDATE receipts SET Amount=?, Location=?, Date=?, Department=?, Description=?  WHERE Id=?';
		$update = $mysql->prepare($update_query);
		$update->bind_param("issssi", $amount, $location, $date, $department, $description, $id);
		$update->execute();
	} else {
		$insert_query = 'INSERT INTO receipts (Amount, Location, Date, Department, Description) VALUES (?, ?, ?, ?, ?)';
		$insert = $mysql->prepare($insert_query);
		$insert->bind_param("issss", $amount, $location, $date, $department, $description);
		$insert->execute();
	}

}
?>
	</body>
</html>