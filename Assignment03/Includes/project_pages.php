

<?php

$project = $Jeep_Projects[$show];
$num = $project["Number"];
$name = $project["Name"];
$image = $project["Image"];
$time = $project["Time"];
$difficulty = $project["Difficulty level"];
$parts = $project["Parts and supplies"];

if ($show > 0) {
	$previous = $show-1;
	
} else {
	$previous = $show;
}

if ($show < count($Jeep_Projects)-1) {
	$next = $show+1;

} else {
	$next = $show;	
}

?>

	<h2> Project Number: <?=$num?></h2> 
	<h2> Name: <?=$name?></h2>

	<div class="image">
	<img src="<?=$image?>" height="500" width="500"></img>
	</div>

	<div id="info">
		<p class="<?=$difficulty?>"> Difficulty level: <?=$difficulty?> </p>
		<p> Time estimate: <?=$time?> hours </p>
		<p> Parts and supplies required: </p>

		<ul>
			<?php foreach ($parts as $part) { ?>		
				
					<li class="long_list"> <?=$part?>
					
			<?php
				}
			?>

		</ul>	
	</div>
	
	<div id="proj-nav">

		<a href="index.php">Home</a>
		<a href="index.php?show=<?=$previous?>">Previous Project</a>
		<a href="index.php?show=<?=$next?>">Next Project</a>
		
	</div>
