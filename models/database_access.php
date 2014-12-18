<?php

global $db;

//$dbh=mysql_connect ("localhost", "mackeoa8_michele", "1ns3cur3")
//or die ('I cannot connect to the database.');
//mysql_select_db ("mackeoa8_michelesart");
$dsn = 'mysql:host=localhost;dbname=mackeoa8_michelesart';
    $username = 'mackeoa8_michele';
    $password = '1ns3cur3';

    
$db = new PDO($dsn, $username, $password);
//$db = new PDO($dbh, 'mackeoa8_michele', '1ns3cur3');

//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
?>
