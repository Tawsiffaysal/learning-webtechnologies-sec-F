<?php
$servername = "localhost";
$username = "root"; // Change as per your setup
$password = ""; // Change as per your setup
$dbname = "connectnet"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
