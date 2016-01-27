<!DOCTYPE html>
<html>
<head>
        <title>prova</title>
</head>
<body>
A database test.


<?php

//host fdb13.awardspace.net
$servername = "fdb13.awardspace.net";
$username = "2017535_sk8arch";
$password = "crimson89";

try {
    $conn = new PDO("mysql:host=$servername;dbname=2017535_sk8arch", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
?>

</body>
</html>
