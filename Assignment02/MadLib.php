<?php

include("head.inc");

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {

$noun = htmlentities($_REQUEST["noun"]);
$verb = htmlentities($_REQUEST["verb"]);
$adjective = htmlentities($_REQUEST["adjective"]);
$first_number = htmlentities($_REQUEST["first_number"]);
$second_number = htmlentities($_REQUEST["second_number"]);
$bonus = htmlentities($_REQUEST["proper_noun"]);

}

if ($method == "GET") {
?>

	<p>Please complete all fields. The first number may trigger a bonus message.  The second number will affect whether or not your bonus word appears in the story!</p>

	<form method="post">
		<input name="noun" placeholder="noun">
		<input name="verb" placeholder="verb">
		<input name="adjective" placeholder="adjective">
		<input name="first_number" placeholder="number between 1 and 10">
		<input name="second_number" placeholder="any number greater than 1"> 
		
		<input name="proper_noun" placeholder="BONUS: Proper Noun">			
		
		<button>SUBMIT</button>
	
	</form>

<?php
} else if ($noun != "" &&
			$adjective != "" &&
			$verb != "" &&
			$bonus != "" &&
			$first_number >= 1 &&
			$first_number <= 10 &&
			$second_number >= 1) {
			
				if ($first_number == 6) {				
				?>				
					<h2>You've received a bonus message: </h2>
					<p id=bonus>Mad libs are fun but so are mad liberals...take a trip to: <a href="http://madliberal.org" target="_blank">madliberal.org</a></p>
			
				<?php
				}
				if ($second_number > 50) {							
				?>
					<h2>Your bonus word <u><?= $bonus;?></u> is used in the story!</h2>				
					
					<p class="mad">Long ago in a land far far away there was a <u><?= $noun;?></u>. The wise King <u><?= $bonus;?></u> believed that this <u><?= $noun;?></u> 
						was <u><?= $adjective;?></u>. Therefore he issued a decree that all people should <u><?= $verb;?></u> the <u><?= $adjective?></u> <u><?= $noun;?></u> twice daily. </p>  

					<p>Do you want to erase input and start over? <a href="MadLib.php">START OVER</a></p>

				<?php
				} else {
				?>
				
				<h2>Sorry your bonus word was not used. Maybe next time!</h2>
				
				<p class="mad">Long ago in a land far far away there was a <u><?= $noun;?></u>. The wise King believed that this <u><?= $noun;?></u> 
					was <u><?= $adjective;?></u>. Therefore he issued a decree that all people should <u><?= $verb;?></u> the <u><?= $adjective?></u> <u><?= $noun;?></u> twice daily. </p>  

				
				<p>Do you want to erase input and start over? <a href="MadLib.php">START OVER</a></p>

				<?php 
				}
	} else {
	?>

	<p>The input received does not meet the specified criteria. Please try again: <a href="MadLib.php">START OVER</a></p>

<?php 
}
?>

	</body>
</html>
