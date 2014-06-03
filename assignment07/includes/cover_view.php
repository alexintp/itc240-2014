
<div class="cover">		
						
	<table>
					
		<th>Cover Image
		<th>Title
		<th>Author		
		<th>Item number
		<th>Checkout
		
					
<?php
	foreach ($books as $book) {
?>
		<tr> 
			<td><img src="<?= htmlentities($book["image"]) ?>" height="200" width="200"></img>			
			<td><?= htmlentities($book["title"]) ?>
			<td><?= htmlentities($book["author"]) ?> 
			<td><?= htmlentities($book["id"]) ?>
			<td><input class="button" type="submit" value="Checkout">
			
												
<?php
	}
?>

	</table>
</div>