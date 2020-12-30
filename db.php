<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";

// Create connection
$db = new mysqli($servername, $username, $password);
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// Create database
$sql = "CREATE DATABASE ".$database;

if ($db->query($sql) === TRUE) {
    $sqlt = "create table data(idno INT,name VARCHAR(20) NOT NULL,branch VARCHAR(5) NOT NULL,semester VARCHAR(2) NOT NULL,phone VARCHAR(12) NOT NULL)";  
    $db = new mysqli($servername, $username, $password,$database);
    if ($db->query($sqlt) === TRUE) {
        ;
    } else {
        echo "Error creating table: " . $db->error;
    }
} else {
    $db = new mysqli($servername, $username, $password,$database);
}


?>