<!DOCTYPE html>
<html>
<head>
        <title>prova</title>
</head>
<body>
A database test.


<?php
echo USERNAME;

require("../includes/config.php");

$result = query("INSERT INTO prova (colonna) VALUES (3)");



?>

</body>
</html>
