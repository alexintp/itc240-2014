
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  
 $preferences = [
	"genre" => $genre,
    "sort" => $sort,
    "view" => $view,
    "theme" => $theme
	];
  
  	
	createCookie("preferences", json_encode($preferences));
		
}
    
?>

	

