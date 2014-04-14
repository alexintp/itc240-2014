<?php
$page_title = "Page Two";
$instructor_name = "Thomas Wilburn";
$assignment_number = "01";
$date = "4/13/2014";

include("head.inc");
?>

		<p id="intro"> Hello again <?php echo $instructor_name;?>! This is <?php echo $page_title;?>  of Assignment<?php echo $assignment_number;?>.</p>

		<p> Go back to <a href="index.php">Page One</a></p>

<?php
include ("footer.inc");
?>



