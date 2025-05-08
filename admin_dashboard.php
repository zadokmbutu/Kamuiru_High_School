<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome, Admin <?php echo $_SESSION['username']; ?>!</h2>
    <p>This is the admin dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
