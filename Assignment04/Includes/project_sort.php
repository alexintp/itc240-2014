
<?php


/* originally could not get the prepared statement code as used in class to work so went looking on the web 
   below code is modified based on: http://stackoverflow.com/questions/1290975/how-to-create-a-secure-mysql-prepared-statement-in-php
   later got the simplified code $query->get_result() and basic foreach loop to work for this but am leaving this more complex version */

$query = $mysql->prepare("SELECT * FROM jeep_projects ORDER BY $sort;");
$query->execute();
$query->store_result();
$query->bind_result($Number, $Name, $Image, $Due, $Difficulty, $Time);

while($query->fetch()) {


?>
		
	<tr> 
		<td><a href="index.php?show=<?=$Number?>"><?=$Number?></a>
		<td><?= $Name?>
		<td><?= $Time?> hours
		<td><?= $Difficulty?>
		<td><?= $Due?>
		<td><img src="<?= $Image?>" height="200" width="200"></img>
	
	<?php
	}
	?>