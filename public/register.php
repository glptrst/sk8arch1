<?php

    //configuration
    require("../includes/config.php");
    
    //if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        //else render form
        render2("register_form.php", ["title" => "Register"]);
    }
    
    //else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //user and password cannot be empty
        if ($_POST["username"] == "" || $_POST["password"] == "" || $_POST["confirmation"] == "")
        {
            apologize("You didn't type all the information we need");
        }
        
        //password and confirmation have to match
        if ($_POST["password"] !== $_POST["confirmation"])
        {
            apologize("Passwords do not match!");
        }
        
        $result = query("INSERT INTO users (email, username, hash) VALUES(?, ?, ?)", $_POST["email"], $_POST["username"], crypt($_POST["password"]));
        //check if query gives false(meaning that the username [or email?] already exists)
        if ($result === false)
        {
            apologize("Username already exists...");
        }
        else
        {
            //log the user in:
            //find the id
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];           
            //store id in session
            $_SESSION["id"] = $id;
            //redirect to index.php
            redirect("registered.php");
        }
    }

?>
