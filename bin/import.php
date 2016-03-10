<?php
    
        require("../includes/config.php");

       
        //the file path is ./tricks.txt
        //Does the file exist? file_exist
        $existence = file_exists("./tricks.txt");
        if ($existence === false)
        {
            echo "File doesn't exist";
        }
        //Is the file readable? is_readable
        $readability = is_readable("./tricks.txt");
        if ($readability === false)
        {
            echo "File is not readable";
        }   
        //useful functions: fopen, fgetcsv, fclose, query    
        //open the file for reading 
        $filePtr = fopen("./tricks.txt", "r");
        if ($filePtr === false)
        {
            echo "Error while opening the file";
        }
    
        //copy rows in tricks.txt and insert them in database using query()
        //we know there are 666 rows in the file so we can simply use a for loop or a while loop that iterates that number of times
        $i = 0;
        while ($i < 2)
        {
            $row = fgetcsv($filePtr, 0, "\t");
            query("INSERT INTO tricks (num, id, skater, trick, source, year, link) VALUES (?, ?, ?, ?, ?, ?, ?)", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
            $i += 1;
        }

        //close the file
        fclose($filePtr);


?>  
