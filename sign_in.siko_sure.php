<?php
// Example credentials (in production, always use a database & hashing!)
$valid_username = "admin";
$valid_password = "secret123"; // In real apps, use hashed passwords

// Get form data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Validate
if ($username === $valid_username && $password === $valid_password) {
    // Start session and redirect
    session_start();
    $_SESSION['username'] = $username;
    header("Location: dashboard.php"); // or any protected page
    exit();
} else {
    // Invalid login
    echo "<script>
        alert('Invalid username or password');
        window.location.href = 'login.php';
    </script>";
}
?>
