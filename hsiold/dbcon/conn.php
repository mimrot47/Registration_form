<?php
$servername = "localhost";
$username = "bcsvipku_hsicon";
$password = "hsicon@12345#";
$dbname = "bcsvipku_hsicon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>