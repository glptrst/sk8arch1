<?php

    //configuration
    require("../includes/config.php");
    
    //store tricks rows of the spot in $tricks 
    $tricks = query("SELECT skater, trick, source, link FROM tricks WHERE id = ?", $_GET["id"]);
    $counter = 0;
    
    //display tricks
    render2("../templates/display_template.php", ["tricks" => $tricks, "counter" => $counter, "title" => "Tricks history"]);

?>
