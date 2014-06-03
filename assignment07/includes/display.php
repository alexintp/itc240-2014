	<body>
				
		<h1 class= "title">Library Listings  -  History</h1>
		
		<div class="welcome"> 
		
			<p><u>Hello <?= $user_id ?>! </u></p>
		</div>
		
		<form action="logout.php" method="POST">
			<input class="button" type="submit" value="Logout">
		</form>
		
		
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
						
									
						
	<body>
	
<html>