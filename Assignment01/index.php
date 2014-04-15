<?php
$page_title = "Index Page";

include("values_assignment01.inc");

include("head.inc");
?>

		<p id="intro"> Hello <?php echo $instructor_name?>! Welcome to Assignment<?php echo $assignment_number?>.</p>

		<p> See <a href="second.php">Page Two</a></p>
<?php
include ("footer.inc");
?>
