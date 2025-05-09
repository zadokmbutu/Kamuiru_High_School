<?php
session_start();

// Database connection
$host = "localhost";
$db_user = "root"; // change if your DB username is different
$db_pass = "";     // change if your DB has a password
$db_name = "kbhs";

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize input
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$role = $_POST['role'];

// Function to redirect with error
function redirectWithError($msg) {
    header("Location: login.php?error=" . urlencode($msg));
    exit();
}

// Check which table to query
if ($role === "student") {
    $stmt = $conn->prepare("SELECT * FROM students WHERE admission_number = ? AND password = ?");

} elseif ($role === "teacher") {
    $stmt = $conn->prepare("SELECT * FROM teachers WHERE teacher_id = ? AND password = ?");
} elseif ($role === "admin") {
    $stmt = $conn->prepare("SELECT * FROM admins WHERE admin_id = ? AND password = ?");
} else {
    redirectWithError("Invalid role selected.");
}

$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // Login successful
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;

    // Redirect to role-specific dashboard
    switch ($role) {
        case "student":
            header("Location: student_dashboard.php");
            break;
        case "teacher":
            header("Location: teacher_dashboard.php");
            break;
        case "admin":
            header("Location: admin_dashboard.php");
            break;
    }
    exit();
} else {
    redirectWithError("Invalid credentials.");
}

$stmt->close();
$conn->close();
?>
