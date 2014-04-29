	<body>
		<pre>
		<?php //print_r ($Jeep_Projects); ?>
		</pre>
		
		<h1><u>Jeep Projects</u></h1>
		
		<h2>This site describes some planned spring projects on my Jeep. Below you can see Parker is standing by ready to help. There are <u><?=count($Jeep_Projects);?></u> Jeep projects so far.</h2>	
		
		<div class="image">
			<img src="Images/IMG_5760.jpg" alt="pic" height="400" width="400"></img>
		</div>

						
		<div id="summary">		
			<h2>Project Summary</h2>		
			
			<ul>				
				<?php include ("Includes/filter.php");?>			
			</ul>
			
				<?php if ($show != null) { ?>
			
					<p><i><?=$count?> project(s) found</i></p>
			
				<?php 
				} 
				?>
			
		</div>
		
		<div id="filter">
			<p> Filter by estimated completion time:  <a href="?show=time2">2 Hours or less</a> <a href="?show=time4">2 - 6 Hours</a> <a href="?show=time6">6 Hours or more</a> <a href="index.php">All Projects</a>
			<p> A list of parts and supplies required for all projects can be found here: <a href="?show=list">Parts and Supplies</a>
		</div>
		
	<body>
	
<html>