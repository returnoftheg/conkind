<?php 
$servername = "localhost";
$username = "divineom_eatery";
$password = "divineom_eatery";
$dbname = "divineom_conkind";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

?>