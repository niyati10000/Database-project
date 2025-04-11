<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_db";
$port = 3307; // Use your XAMPP MySQL port

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
