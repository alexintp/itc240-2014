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
					<!-- sort icons from: http://www.iconarchive.com/ -->
					<th>Project Number</br> <a href="index.php?sort=Number ASC"><img src="Images/sort-ascending-icon.png"</a><a href="index.php?sort=Number DESC"><img src="Images/sort-descending-icon.png"</a>
					<th>Project Name </br> <a href="index.php?sort=Name ASC"><img src="Images/sort-ascending-icon.png"</a> <a href="index.php?sort=Name DESC"><img src="Images/sort-descending-icon.png"</a>
					<th>Time to Complete </br> <a href="index.php?sort=Time ASC"><img src="Images/sort-ascending-icon.png"</a><a href="index.php?sort=Time DESC"><img src="Images/sort-descending-icon.png"</a>
					<th>Difficulty Level </br> <a href="index.php?sort=Difficulty ASC"><img src="Images/sort-ascending-icon.png"</a><a href="index.php?sort=Difficulty DESC"><img src="Images/sort-descending-icon.png"</a>
					<th>Due Date</br> <a href="index.php?sort=Due ASC"><img src="Images/sort-ascending-icon.png"</a><a href="index.php?sort=Due DESC"><img src="Images/sort-descending-icon.png"</a>
					<th>Image
					
				<?php
				
				if ($sort != null) {
				
					include ("Includes/project_sort.php");	
					
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