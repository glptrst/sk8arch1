<?php
	$data = [ ["Mark Benni", "Kickflip", "San Francisco"],
			  ["Jenny Steil", "Ollie", "Macba"],
			  ["Matt Fenni", "Shove it", "Parallel"]
			];

	header('Content-Type: application/json');

	echo json_encode($data);
?>