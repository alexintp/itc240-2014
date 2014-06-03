
<?php

 function createCookie($name, $value) {
    setcookie($name, $value, time() + 60 * 60 * 24 * 10, "/");
  }
  
     
 $preferences = [
    "sort" => $sort,
    "view" => $view,
    "theme" => $theme
  ];
  
  createCookie("user", $user_id);
  createCookie("preferences", json_encode($preferences));
   
  
?>

	

