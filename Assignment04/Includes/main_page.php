	<body>
				
		<h1><u>Jeep Projects</u></h1>
		
		<div class="image">
			<img src="Images/IMG_5760.jpg" alt="pic" height="200" width="200"></img>
		</div>
		
		<div class="heading">		
			<p>This site identifies some planned spring projects on my Jeep. You can see Parker is standing by ready to help.</p> 			
			<p> There are <u><?=$num_proj?></u> Jeep projects so far.</p>		
		</div>
		
								
		<div class="summary">		
						
			<table>
			
					<th><a href="index.php?sort=Number">Project Number</a>
					<th><a href="index.php?sort=Name">Project Name</a>
					<th><a href="index.php?sort=Time">Time to Complete</a>
					<th><a href="index.php?sort=Difficulty">Difficulty Level</a>
					<th><a href="index.php?sort=Due">Estimated Completion Date</a>
					<th>Image
					
				<?php
				
				if ($sort != null) {
				
					include ("Includes/project_sort.php");	
					if ($order == "DESC") {$order = "ASC";}
				} else {			
								
					foreach ($Jeep_Projects as $project) {
					?>
						<tr> 							
							<td><a href="index.php?show=<?=$project["Number"]?>"><?= $project["Number"] ?></a>
							<td><?= $project["Name"] ?>
							<td><?= $project["Time"] ?> hours
							<td><?= $project["Difficulty"] ?>
							<td><?= $project["Due"] ?>
							<td><img src="<?= $project["Image"] ?>" height="200" width="200"></img>
														
				<?php
					}
				}
				?>
			</table>
			
									
		</div>
		
				
	<body>
	
<html>