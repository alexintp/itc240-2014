

<?php

/* originally could not get the prepared statement code as used in class to work so went looking on the web 
   below code is modified based on: http://stackoverflow.com/questions/1290975/how-to-create-a-secure-mysql-prepared-statement-in-php
   later got the simplified code $query->get_result() and basic foreach loop to work for this but am leaving this more complex version */

$query = $mysql->prepare("SELECT * FROM jeep_projects WHERE Number=?;");
$query->bind_param('i', $show);     //not sure what this does exactly Is it a security issue?  works using the variable directly inside the query without this step
$query->execute();
$query->store_result();
$query->bind_result($Number, $Name, $Image, $Due, $Difficulty, $Time);

while($query->fetch()) {
    
?>

	<h2> Project Number: <?=$Number?></h2> 
	<h2> Name: <?=$Name?></h2>

	<div class="image">
	<img src="<?=$Image?>" height="500" width="500"></img>
	</div>

	<div id="info">
		<p class="<?=$Difficulty?>"> Difficulty level: <?=$Difficulty?> </p>
		<p> Time estimate: <?=$Time?> hours </p>
		<p> Due Date: <?=$Due?> </p>
			
	</div>
	
<?php
}

$query->close();


if ($show > 1) {
	$previous = $show-1;
	
} else {
	$previous = $show;
}

if ($show < $num_proj) {
	$next = $show+1;

} else {
	$next = $show;	
}

?>
	
	<div id="proj-nav">

		<a href="index.php">Home</a>
		<a href="index.php?show=<?=$previous?>">Previous Project</a>
		<a href="index.php?show=<?=$next?>">Next Project</a>
		
	</div>
