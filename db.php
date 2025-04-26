<?php
<<<<<<< HEAD
$servername = "localhost";
$username = "root";
$password = "";
$database = "kbhs";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
=======
$host = 'localhost';
$dbname = 'kamuiru_highschool';
$username = 'root';
$password = ''; // change if your MySQL has a password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Optional: Set default fetch mode
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
>>>>>>> 0b73ba4 (Configured line endings)
