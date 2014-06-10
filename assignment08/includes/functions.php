
<?php

function inputValid ($field) {

	if (isset($_REQUEST[$field])) {
	
		if ($_REQUEST[$field] != "") {
		
			return htmlentities($_REQUEST[$field]); 
			
		} 
	}	
}

function readInput ($cookie_name, $option, $default) {

	$value = $default;
	
	if (isset($_COOKIE[$cookie_name])) {
	
		$cookie_info = json_decode($_COOKIE[$cookie_name], true);
	
		$value = $cookie_info[$option];	
	}
	
	if (isset($_REQUEST[$option])) {

		$value = htmlentities($_REQUEST[$option]);  				
	}
	
	return $value;
		
}
	
function createCookie($name, $value) {

    setcookie($name, $value, time() + 60 * 60 * 24 * 10, "/");
	
}

function deleteCookie($name) {

    setcookie($name, "", 10, "/");
	
}

function userCookie() {
	
	if (isset($_COOKIE["user"])) {
	
		return true;
		
	} else {
	
		return false;
	}
}


function checkWhitelist($whitelist, $value, $default) {

	
	if (isset($whitelist[$value])) {

		return $value;
	
	} else  {

		return $default;	
	}
}

  
function getStuff ($table, $order) {

	global $mysql;
	$select_query =  "SELECT * FROM $table ORDER BY $order";
	$select = $mysql->prepare($select_query);
	$select->execute();
	
	return $select->get_result();
	
}
    
 ?>