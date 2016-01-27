<?php

        //configuration
        require("../includes/config.php");

        //insert proposal in the refused proposals table
        query("INSERT INTO refused_proposals (id, skater, trick, source, link, proposer) SELECT id, skater, trick, source, link, proposer FROM proposals WHERE num = ?", $_POST["num"]); 
    
        //remove the rows off the proposal table
        query("DELETE FROM proposals WHERE num = ?", $_POST["num"]);    

        //redirect to proposals page
        redirect("assess_proposals.php");

?>
