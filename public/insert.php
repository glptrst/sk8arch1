<?php
    
    //configuration
    require("../includes/config.php");

    //if user isn't logged it warn him 
    if (empty($_SESSION["id"]))
    {
        render2("must_be_logged_in.php", ["title" => "Login requested"]);
    }
    else
    { 
        //if user reached page via GET (as by clicking a link or via redirect)
        if ($_SERVER["REQUEST_METHOD"] == "GET")
        {
            $rows = query("SELECT * FROM spots");
            //dump($rows);
            render2("../templates/insert_form.php", ["rows" => $rows, "title" => "Insert tricks"]);
        }
        //else if user reached page via POST (as by submitting a form via POST)
        else if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if ($_POST["skater"] == "" || $_POST["trick"] == "" || $_POST["source"] == "")
            {
                apologize("\"skater\", \"trick\" and \"source\" cannot be empty.");
            }
            else
            {
                //put the useraname of the proposer in $proposer[0]["username"]
                $proposer = query("SELECT username FROM users WHERE id = ?", $_SESSION["id"] );

                //put the id of the spot selected by the user in $id_spot[0]["id"] (query returns an array...);
                $id_spot = query("SELECT id FROM spots WHERE name = ?", $_POST["spot"] ); 

                //insert trick in the tricks table 
                query("INSERT INTO proposals (id, skater, trick, source, link, proposer) VALUES (?, ?, ?, ?, ?, ?)", $id_spot[0]["id"], $_POST["skater"], $_POST["trick"], $_POST["source"], $_POST["link"], $proposer[0]["username"]);
        
                //redirect to... 
                render2("../templates/proposed_template.php");
            }
        }
    } 
?>
