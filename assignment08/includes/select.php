
<?php

include ("includes/passwords.php");
$mysql = new mysqli("localhost", "amasch02", $mysql_password, "amasch02");    

$sort_ok = [
		"id" => true,
        "author" => true,
        "title" => true,    
];

$table_ok = [
		"history" => true,
		"politics" => true,
		"sociology" => true
];

 $table = checkWhitelist($table_ok, $genre, "history");
 
 $order = checkWhitelist($sort_ok, $sort, "id");
 

$books = getStuff($table, $order);

$num_books = $books->num_rows;

?>