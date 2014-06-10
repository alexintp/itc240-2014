<?php

include ("includes/functions.php");

$genre = readInput("preferences", "genre", "history");
$sort = readInput("preferences", "sort", "id");
$view = readInput("preferences", "view", "cover");
$theme = readInput("preferences", "theme", "default");

include ("includes/cookie.php");

if ($theme == "groovy") {

	$css = "css/groovy.css";
	
} else if ($theme == "hideous") {

	$css = "css/hideous.css";
	
} else {

	$css = "css/default.css";
}

include ("includes/head.php");

include ("includes/form.php");

include ("includes/select.php");	
  
include ("includes/display.php");

?>

	