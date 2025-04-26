<?php
// Example credentials (in production, always use a database & hashing!)
$valid_username = "admin";
$valid_password = "secret123"; // In real apps, use hashed passwords

// Get form data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Validate credentials
if ($username === $valid_username && $password === $valid_password) {
    // Start session and store user info
    session_start();
    $_SESSION['username'] = $username;

    // Redirect to the dashboard or another protected page
    header("Location: dashboard.php"); // Modify to your target page after login
    exit();
} else {
    // Invalid login, show an alert and redirect back to login page
    echo "<script>
        alert('Invalid username or password');
        window.location.href = 'login.php';
    </script>";
}
?>
