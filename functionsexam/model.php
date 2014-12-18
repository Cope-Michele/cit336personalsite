<?php

/* 
 * Function Exam model
 */

/*  Get the Guitar1 database connection before anything else */

$username = "mackeoa8";
$password = "063Winz!@";
$hostname = "localhost"; 
$dsn = 'mysql:host='.$hostname.';dbname='.$username;
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select Guitar1 database
$selected = mysql_select_db("mackeoa8_guitar1",$dbhandle) 
  or die(" Could not connect to Guitar1");
echo ' Connected to Guitar1';

$db = new PDO($dsn, $username, $password);
/*
 * Write the first function using the following SQL to query the Guitar1 database
  
 * Use a try - catch block to handle exceptions
 * Use a prepared statement inside the try to execute the query
 * The result of the query should be an array
 * Be sure to return the array if it has data or 'FALSE' if no data was retrieved
 */
function getQuery(){
    if(!isset($category_id)) {
        $category_id = $_GET['category_id'];
        if (!isset($category_id)) {
            $category_id = 1;
        }
    }
    
try{    
$sql = 'SELECT DISTINCT products.categoryID, categoryName '
            . 'FROM products 
               INNER JOIN categories '
            . 'WHERE products.categoryID = categories.categoryID';

    $results = mysql_query($sq);
    
} catch(Exception $e) {
    $error_message = $e->getMessage();
    echo "<p> error message: $error_message </p>";
}
}
/* 
 * Write the second function following this comment block
 
 * The function should be named "buildNav" and retrieve the needed 
 * information by calling the first function.
 
 * Then, the function should build an unordered list
 * placing each item retrieved from the database in an anchor element in a list item.
 * The entire list should be stored in a variable named $navigation.
 
 * If nothing is retrieved from the database, use the same $navigation variable 
 * to store an error message.
 
 * Finally, return $navigation (it was called in the controller).
 */

function buildNave(){
    getQuery();  
}