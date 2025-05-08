<?php
include 'db.php'; // Connect to your database

// Get the form input
$username = $_POST['username'];
$password = $_POST['password'];

// Query to get user data
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username]);

$user = $stmt->fetch();

// Check if the user exists and verify the password
if ($user && password_verify($password, $user['password'])) {
    // Successful login
    session_start();
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    
    // Redirect based on role
    if ($user['role'] == 'admin') {
        header('Location: admin_dashboard.php');
    } elseif ($user['role'] == 'teacher') {
        header('Location: teacher_dashboard.php');
    } elseif ($user['role'] == 'student') {
        header('Location: student_dashboard.php');
    }
    exit();
} else {
    // Invalid login
    echo "Invalid username or password.";
}
?>
