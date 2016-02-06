<?php

    //configuration
    require("../includes/config.php");
    
    //if user reached the page via GET
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $spot_info = query("SELECT * FROM spots WHERE id = ?", $_GET["id"]);

        //store tricks rows of the spot in $tricks 
        $tricks = query("SELECT * FROM tricks WHERE id = ?", $_GET["id"]);
        $counter = 0;

        //sort tricks by skater
        $sortedBySkater = array_sort($tricks, "skater", SORT_ASC);       
 
        //set default tricks to be sorted by skater
        $tricks = $sortedBySkater;
 
        //display tricks
        render2("../templates/display_template.php", ["spot_info" => $spot_info, "tricks" => $tricks, "counter" => $counter, "title" => "Tricks history"]);
    }
    //else if user reached the page via POST(by sorting the tricks)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //store tricks rows of the spot in $tricks 
        $tricks = query("SELECT skater, trick, source, link FROM tricks WHERE id = ?", $_GET["id"]);
        $counter = 0;

        //sort tricks by the way selected by the user
        //$selected_sorting = $_POST["sortingMethod"];
        $sorted_tricks = array_sort($tricks, $_POST["sortingMethod"], SORT_ASC);       
 
        //change original array(the one which will be passed to the template)
        $tricks = $sorted_tricks;
 
        //display tricks
        render2("../templates/display_template.php", ["tricks" => $tricks, "counter" => $counter, "title" => "Tricks history"]);
    }
    
?>
