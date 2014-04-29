<?php

$Jeep_Projects = [

	["Number" => 1, "Name" => "Manual Transmission and Transfer Case fluid change", "Image" => "Images/transfer_case.jpg", "Time" => 2, "Parts and supplies" => ["Red Line MT-90", "ATF+4", "fluid pump", "torque wrench"], "Difficulty level" => "easy"],
	["Number" => 2,"Name" => "Differential fluid change", "Image" => "Images/differential.jpg", "Time" => 4, "Parts and supplies" => ["80w90 gear oil", "Permatex RTV", "scraper", "brake cleaner", "torque wrench"], "Difficulty level" => "medium"],
	["Number" => 3,"Name" => "Sway Bar Links replacement", "Image" => "Images/sway_bar_link.jpg", "Time" => 3, "Parts and supplies" => ["MOOG #K3197 sway bar links", "MOOG #K7352 bushings", "chassis grease", "torque wrench"], "Difficulty level" => "medium"],
	["Number" => 4,"Name" => "Cooling System replacement", "Image" => "Images/cooling_system.jpg", "Time" => 6, "Parts and supplies" => ["Spectra Premium #CU2101 radiator", "water pump #42005", "upper hose", "lower hose", "heater hoses", "hose clamps", "thermostat", "gaskets"], "Difficulty level" => "medium"],
	["Number" => 5,"Name" => "Heater Core replacement", "Image" => "Images/heater_core.jpg", "Time" => 12, "Parts and supplies" => ["heater core #4874045", "foam padding"], "Difficulty level" => "hard"],
];

$count = 0;
$show = null;

include ("Includes/head.php");

if (isset($_REQUEST["show"])) {
	
	$show = $_REQUEST["show"];
	
	if ($show == "list") {
	
		include ("Includes/parts_list.php");
		
	} else if (is_numeric($show) && $show > -1 && $show < count($Jeep_Projects)) {		
		
		include ("Includes/project_pages.php");	
		
	} else {
	
		include ("Includes/main_page.php");	
	}
	
} else {	
	
	include ("Includes/main_page.php");	
}			
?>
