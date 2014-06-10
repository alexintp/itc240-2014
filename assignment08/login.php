
<?php

$css = "css/default.css";
include ("includes/head.php");

?>

<div>

	<form class="link" action="user.php" method="POST">

		<label for="user">UserID:</label>
			<input class="input" name="user_name" id="user" placeholder="enter user name" >
				
		<label for="pw">Password:</label>
			<input class="input" name="password" id="pw" placeholder="enter password" >	
			
		<input class="button" type="submit" value="Submit">
		
	</form>

</div>

