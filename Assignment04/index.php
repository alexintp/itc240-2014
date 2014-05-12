<?php

include ("Includes/passwords.php");
$mysql = new mysqli("localhost", "amasch02", $mysql_password, "amasch02");    

$Jeep_Projects = $mysql->query('SELECT * FROM jeep_projects;');
$num_proj = $Jeep_Projects->num_rows;


$show = null;
$sort = null;

include ("Includes/head.php");

if (isset($_REQUEST["sort"])) {
	
	$sort = $_REQUEST["sort"];
		
}

if (isset($_REQUEST["show"])) {
	
	$show = $_REQUEST["show"];
	
	if (is_numeric($show) && $show > 0 && $show <= $num_proj) {		
		
		include ("Includes/project_pages.php");	
		
	} else {
	
		include ("Includes/main_page.php");	
	}
	
} else {	
	
	include ("Includes/main_page.php");	
}		


?>
