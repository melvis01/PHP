<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    
    $friends = array();
    array_push($friends, "Eric","Bullet","Jones","Felix");
    
	// Sort the list
    sort($friends);
    $amount = count($friends)
	// Randomly select a winner!
	$rand = rand( 0, $amount);

	// Print the winner's name in ALL CAPS
	
	echo strtoupper($friends[$rand]); .""."WINS!";
	
	?>
	</p>
</html>