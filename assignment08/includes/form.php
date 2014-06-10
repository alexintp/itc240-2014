
<form class="entry" action="index.php" method="POST">		
			
		<label for="genre">Genre:</label>	
		<select class="autosubmit" name="genre" id="genre">
			<option value=<?= $genre ?> selected><?= htmlentities($genre); ?></option>
			<option value="history" >history</option>
			<option value="politics" >politics</option>
			<option value="sociology" >sociology</option>
		</select>		
		
		<label for="sort">Sort:</label>	
		<select class="autosubmit" name="sort" id="sort">
			<option value=<?= $sort ?> selected><?= htmlentities($sort); ?></option>
			<option value="title" >title</option>
			<option value="author" >author</option>
			<option value="id" >id</option>
		</select>
			
		<label for="view">View:</label>	
		<select class="autosubmit" name="view" id="view">			
			<option value=<?= $view ?> selected><?= htmlentities($view); ?></option>
			<option value="cover" >cover</option>
			<option value="listing" >listing</option>		
		</select>
		
		<label for="theme">Theme:</label>	
		<select class="autosubmit" name="theme" id="theme">			
			<option value=<?= $theme; ?> selected><?= htmlentities($theme); ?></option>
			<option value="default" >default</option>
			<option value="groovy" >groovy</option>
			<option value="hideous" >hideous</option>
			
		</select>	
			
	</form>

<script>

var inputs = document.querySelectorAll(".autosubmit");

for (var i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener("change", function() {
    this.form.submit();
  });
}

</script>