<div>
	<a href="index.php">Home</a>
</div>

<h2><u>Parts and Supplies List</u></h2>


<div id="list">
	<ol>

	<?php

	foreach ($Jeep_Projects as $project) {

		foreach ($project["Parts and supplies"] as $part) {  
		
	?>
			<li class="long_list"> <?=$part?> 
		
	<?php
		}
	}
	?>
</div>
