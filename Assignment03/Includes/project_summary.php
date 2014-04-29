
<?php

$number = $proj["Number"];
$link = ($proj["Number"])-1;

?>
	<li>
		<a href="index.php?show=<?=$link?>">Project <?=$number?>:</a> <?=$proj["Name"]?>. Time required: <?=$proj["Time"]?> hours.
	