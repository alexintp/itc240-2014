<?php

$sort = "id";
$view = "cover";
$theme = "default";
$user_id = "";


if (isset($_COOKIE["preferences"])) {
    $cookie_info = json_decode($_COOKIE["preferences"], true);
	
	$sort = $cookie_info["sort"];
	$view = $cookie_info["view"];
	$theme = $cookie_info["theme"];
}

if (isset($_COOKIE["user"])) {
    	
	$user_id = $_COOKIE["user"];
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$user_id = htmlentities($_REQUEST["user"]);  
	$sort = htmlentities($_REQUEST["sort"]);
	$view = htmlentities($_REQUEST["view"]);
	$theme = htmlentities($_REQUEST["theme"]);
	
	include ("includes/createCookie.php");
}


include ("includes/head.php");
?>

<form class="entry" action="index.php" method="POST">
		
		<label for="user">UserID:</label>
		<input class="input" name="user" id="user" value="<?= $user_id ?>"placeholder="enter user id" >
		
		<label for="sort">Sort:</label>	
		<select class="input" onchange="this.form.submit()" name="sort" id="sort">
			<option value=<?= $sort ?> selected><?= htmlentities($sort); ?></option>
			<option value="title" >title</option>
			<option value="author" >author</option>
			<option value="id" >id</option>
		</select>
			
		<label for="view">View:</label>	
		<select class="input" onchange="this.form.submit()" name="view" id="view">			
			<option value=<?= $view ?> selected><?= htmlentities($view); ?></option>
			<option value="cover" >cover</option>
			<option value="listing" >listing</option>		
		</select>
		
		<label for="theme">Theme:</label>	
		<select class="input" onchange="this.form.submit()" name="theme" id="theme">			
			<option value=<?= $theme; ?> selected><?= htmlentities($theme); ?></option>
			<option value="default" >default</option>
			<option value="groovy" >groovy</option>
			<option value="hideous" >hideous</option>
			
		</select>
	
			
	</form>


<?php

  
  include ("includes/select.php");	
  
  include ("includes/display.php");

?>

	