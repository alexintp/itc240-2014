<?php

include ("Bus.php");
include ("Tester.php");
include ("head.php");

$bus_test = new Tester();
$bus = new Bus();
$result = "";
?>

	<div class="detail">
		<h2> Test Results </h2>
		<ol>

<?php
$bus->setSpeed(20);
$bus_test->test($bus->armed, false);
$result = "Current Speed:  " . $bus->getSpeed()  .  "  --  Armed Test Result:  "  . $bus_test->message; 
?>
			<li> <?= $result ?>
<?php

$bus_test->test($bus->exploded, false);
$result = "Current Speed:  " . $bus->getSpeed()  .  "  --  Exploded Test Result:  "  . $bus_test->message;
?>
			<li> <?= $result ?>
<?php


$bus->setSpeed(55);
$bus_test->test($bus->armed, true);
$result = "Current Speed:  " . $bus->getSpeed()  .  "  --  Armed Test Result:  "  . $bus_test->message;
?>
			<li> <?= $result ?>
<?php

$bus_test->test($bus->exploded, false);
$result = "Current Speed:  " . $bus->getSpeed()  .  "  --  Exploded Test Result:  "  . $bus_test->message;
?>
			<li> <?= $result ?>
<?php

$bus->setSpeed(80);
$bus_test->test($bus->armed, true);
$result = "Current Speed:  " . $bus->getSpeed()  .  "  --  Armed Test Result:  "  . $bus_test->message;
?>
			<li> <?= $result ?>
<?php

$bus_test->test($bus->exploded, false);
$result = "Current Speed:  " . $bus->getSpeed()  .  "  --  Exploded Test Result:  "  . $bus_test->message;
?>
			<li> <?= $result ?>
<?php

$bus->setSpeed(30);
$bus_test->test($bus->armed, true);
$result = "Current Speed:  " . $bus->getSpeed()  .  "  --  Armed Test Result:  "  . $bus_test->message;
?>
			<li> <?= $result ?>
<?php

$bus_test->test($bus->exploded, true);
$result = "Current Speed:  " . $bus->getSpeed()  .  "  --  Exploded Test Result:  "  . $bus_test->message;
?>
			<li> <?= $result ?>
<?php

$bus->exploded = false;
$bus_test->test($bus->exploded, false);
$result = "Bus unexploded   " .  "  --  Exploded Test Result:  "  . $bus_test->message;
?>
			<li> <?= $result ?>
<?php

$bus->trigger();
$bus_test->test($bus->exploded, true);
$result = "Trigger pulled   " .  "  --  Exploded Test Result:  "  . $bus_test->message;
?>
			<li> <?= $result ?>

	</div>
	
	<div class="summary">
		<p>Tests passed: <?=$bus_test->passed ?> </p>
		<p>Tests failed:  <?=$bus_test->failed ?> </p>
	</div>



