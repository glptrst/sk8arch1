<?php

	//config
	require("../includes/config.php");

	$user = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);	

	//render template
	render2("../templates/profile_template.php", ["title" => "Profile", "user" => $user]);

?>
