<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "kbhs"; // or 'kamuiru_highschool' if that's the correct one


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update the visit count
$sql = "UPDATE visit_counter SET visit_count = visit_count + 1 WHERE id = 1";
if ($conn->query($sql) === TRUE) {
    // Successfully updated the counter
} else {
    echo "Error updating record: " . $conn->error;
}

// Retrieve the current visit count
$sql = "SELECT visit_count FROM visit_counter WHERE id = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Output the visit count
    $row = $result->fetch_assoc();
    echo "Number of visitors: " . $row['visit_count'];
} else {
    echo "No data found";
}

// Close connection
$conn->close();
?>
