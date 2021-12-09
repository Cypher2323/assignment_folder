<?php
// this file will form a connection between the PHP code and the database server
// and will then select the required database
$server_name = "localhost";
$username = "root"; // default username for localhost is root
$password = ""; // default password for localhost is empty
$database_name = "assignment"; // database name

// Create connection
$connection = new mysqli($server_name, $username, $password, $database_name);

// Check connection
if (!$connection) {
die("Count not connect: " . $conn->connect_error);
}
?>