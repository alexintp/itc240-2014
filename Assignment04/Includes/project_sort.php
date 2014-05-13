
<?php

//$order = "DESC";

// modified based on: http://stackoverflow.com/questions/1290975/how-to-create-a-secure-mysql-prepared-statement-in-php
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