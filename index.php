<?php
 
// include("connection.php");
 
 
$file = "recipes.csv";
$categories = array();
 
if (file_exists($file)) {
 
    $filepath = fopen($file, "r");

    while( ($line = fgetcsv($filepath)) !== FALSE ){

        $cat =end($line);
        echo "INSERT INTO category (categoryname) VALUES ('". $cat."')";
        
        echo "<br>";
    }
}