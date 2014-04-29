<?php				
					
	if ($show == "time2") {
	
		foreach ($Jeep_Projects as $proj) {
		
			if ($proj["Time"] <= 2) {
			
				$count++;
				include ("Includes/project_summary.php");
			}
		}
		
	} else if ($show == "time4") {
	
		foreach ($Jeep_Projects as $proj) {
		
			if ($proj["Time"] > 2 && $proj["Time"] < 6) {
			
				$count++;
				include ("Includes/project_summary.php");
			}
		}
		
	} else if ($show == "time6") {
	
		foreach ($Jeep_Projects as $proj) {
		
			if ($proj["Time"] >= 6) {
			
				$count++;
				include ("Includes/project_summary.php");
			}
		}
		
	} else {
	
		foreach ($Jeep_Projects as $proj) {
	
			$count++;
			include ("Includes/project_summary.php");					
		}
	} 					
?>		