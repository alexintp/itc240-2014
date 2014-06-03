
<?php

include ("includes/passwords.php");
$mysql = new mysqli("localhost", "amasch02", $mysql_password, "amasch02");    

$whitelist = [
		"id" => true,
        "author" => true,
        "title" => true,    
];

 
if (isset($whitelist[$sort])) {

	$order = $mysql->real_escape_string($sort); 
	
} else  {

	$order = "title";	
}

$select_query =  "SELECT * FROM library_books ORDER BY $order";
$select = $mysql->prepare($select_query);
$select->execute();
$books = $select->get_result();
$num_books = $books->num_rows;

?>