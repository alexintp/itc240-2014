<?php
$page_title = "Index Page";
$instructor_name = "Thomas Wilburn";
$assignment_number = "01";
$date = "4/13/2014";

include("head.inc");
?>

		<p id="intro"> Hello <?php echo $instructor_name?>! Welcome to Assignment<?php echo $assignment_number?>.</p>

		<p> See <a href="second.php">Page Two</a></p>
<?php
include ("footer.inc");
?>
