<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kbhs"; // or 'kamuiru_highschool' if that's the correct one

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
