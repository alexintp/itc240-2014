
<?php
	
include ("Includes/head.php");
include("Includes/passwords.php");

$mysql = new mysqli("localhost", "amasch02", $mysql_password, "amasch02");
$month = 5;
?>

<div class="chooseDate">
	<form action="receiptData.php" method="POST">	
		<label for="month">Choose a month to obtain receipt history</label>	
		<select class="month" onchange="this.form.submit()" name="month" id="month">
			<option value="0" selected>choose month</option>
			<option value="5" >May</option>
			<option value="4">April</option>
			<option value="3">March</option>
			<option value="2">February</option>
			<option value="1">January</option>				
		</select>
				
	</form>
		
</div>

<table>
	<thead>
		<tr>
			<th>Amount
			<th>Location
			<th>Date
			<th>Department
			<th>Description			
			<th>Edit / Delete
			
	<tbody>

<?php
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$month = $_REQUEST["month"];	 
}

switch ($month) {
	case "5":
		$display_month = "May";
		break;
  case "4":
		$display_month = "April";
		break;
  case "3":
		$display_month = "March";
		break;
  case "2":
		$display_month = "February";
		break;
	case "1":
		$display_month = "January";	
}

?>

	<h2>Business receipts for the month of: <?=$display_month?></h2>

<?php
	
	$select_query = 'SELECT * FROM receipts WHERE MONTH(Date) = ?';
	$select = $mysql->prepare($select_query);
	$select->bind_param("s", $month);
	$select->execute();
	$expenses = $select->get_result();

	$sum_query = 'SELECT SUM(amount) AS Total FROM receipts WHERE MONTH(Date) = ?';
	$sum = $mysql->prepare($sum_query);
	$sum->bind_param("s", $month);
	$sum->execute();
	$totals = $sum->get_result();
	$total = $totals->fetch_array();

	foreach ($expenses as $expense) {
?>
			<tr>
				<td><?= $expense["Amount"] ?>
				<td><?= $expense["Location"] ?>
				<td><?= $expense["Date"] ?>
				<td><?= $expense["Department"] ?>
				<td><?= $expense["Description"] ?>
				<td><a class="edit" href="addReceipt.php?edit=<?= $expense["Id"] ?>">Edit</a> / <a class="edit" href="addReceipt.php?delete=<?= $expense["Id"] ?>">Delete</a>
						
<?php
}
?>
			<tr>
				<td><?= $total["Total"] ?> Total
				
		</table>
<a href="addReceipt.php">Enter More Receipts</a>