<?php
// Database configuration
$host = "localhost";  // Hostname
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "college"; // Database name

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>