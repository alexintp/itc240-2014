	
<?php

$user_name = readInput("user", "user_name", "temp user");  //is display the only thing that uses this?
$password = readInput("user", "password", "no password");      //why do we need this

?>

	<body>
				
		<h1 class="welcome">Library Listings </h1>
		
		<div class="title"> 
		
			<p><u>Hello <?= $user_name ?>! </u></p>
		</div>
		
<?php
if (userCookie()) {
?>
		<form action="logout.php" method="GET">
			<input class="button" type="submit" value="Logout">
		</form>
<?php		
} else {
?>		
		<form action="login.php" method="GET">
			<input class="button" type="submit" value="Login">
		</form>		
<?php		
} 
?>
		
		
		<div class="heading">		
			<p> There are <u><?=$num_books?></u> listings currently available.</p>		
		</div>
		
											
		<?php
		
		if ($view == "listing") {
		
			include ("includes/listing_view.php");	
			
		} else {			
						
			include ("includes/cover_view.php");
		}
		?>
						
									
						
	</body>
	
</html>
