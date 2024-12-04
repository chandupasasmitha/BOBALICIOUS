<?php
$servername = 'localhost';
$username = 'root';
$db_password = ''; // Database password
$database = 'sample';


// Create connection
$conn = new mysqli($fname, $lname, $email, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
