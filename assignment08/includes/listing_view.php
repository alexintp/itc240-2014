
<?php
	foreach ($books as $book) {
?>

	<div class="listing">
		
		<h3> Item Number: <?= htmlentities($book["id"]) ?></h2> 
		<h3> Title: <?= htmlentities($book["title"]) ?> - <?= htmlentities($book["title_long"]) ?></h2>
		<h3> Author: <?= htmlentities($book["author"]) ?></h2> 
		
		<input class="button_list" type="submit" value="Checkout">

		<div class="image">
		<img src="<?= htmlentities($book["image"])?>" height="350" width="350"></img>
		</div>

		<div id="description">
			<p> <?= htmlentities($book["description"]) ?> </p>
				
	</div>

<?php
	}
?>