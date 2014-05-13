

<?php

// modified based on: http://stackoverflow.com/questions/1290975/how-to-create-a-secure-mysql-prepared-statement-in-php

$query = $mysql->prepare("SELECT * FROM jeep_projects WHERE Number=?;");
$query->bind_param('i', $show);     //not sure what this does exactly Is it a security issue?  seems to work using the variable inside the query
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
