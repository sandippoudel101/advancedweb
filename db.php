<?php
$servername = "localhost";  // Database server (usually 'localhost')
$username = "root";         // Database username (default is 'root' for XAMPP and WAMP)
$password = "";             // Database password (empty by default for XAMPP and WAMP)
$dbname = "nepali_restaurant";  // Your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
