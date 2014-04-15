<?php
$page_title = "Page Two";

include("values_assignment01.inc");

include("head.inc");
?>

		<p id="intro"> Hello again <?php echo $instructor_name;?>! This is <?php echo $page_title;?>  of Assignment<?php echo $assignment_number;?>.</p>

		<p> Go back to <a href="index.php">Page One</a></p>

<?php
include ("footer.inc");
?>



