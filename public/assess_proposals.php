<?php

    //configuration
    require("../includes/config.php");

    //if page is reaches via GET
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        //store proposals rows in $proposals
        $proposals = query("SELECT * FROM proposals");

        //display proposals
        render_mod("../templates/assess_proposals_template.php", ["proposals" => $proposals]);
    }
    //else if paged is reached via POST
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //insert proposal in the tricks table
        query("INSERT INTO tricks (id, skater, trick, source, link) SELECT id, skater, trick, source, link FROM proposals WHERE num = ?", $_POST["num"]); 
    
        //remove the rows off the proposal table
        query("DELETE FROM proposals WHERE num = ?", $_POST["num"]);    

        //redirect to proposals page
        redirect("assess_proposals.php");
    }

?>
