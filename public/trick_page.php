<?php

	//config
	require("../includes/config.php");

	$trick_info = query("SELECT * FROM tricks WHERE num = ?", $_GET["num"]);	

	//render template
	render2("../templates/trick_page_template.php", ["title" => "Trick Info", "trick_info" => $trick_info]);

?>
