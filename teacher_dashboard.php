<?php
include 'auth_check.php';
if ($_SESSION['role'] !== 'teacher') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f3f4;
            margin: 0;
        }
        .header {
            background: #5dade2;
            padding: 20px;
            color: white;
            text-align: center;
        }
        .nav {
            background: #3498db;
            padding: 15px;
        }
        .nav a {
            color: white;
            margin-right: 20px;
            text-decoration: none;
        }
        .content {
            padding: 30px;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>Teacher Dashboard</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?></p>
</div>
<div class="nav">
    <a href="#">Manage Classes</a>
    <a href="#">Grade Assignments</a>
    <a href="logout.php">Logout</a>
</div>
<div class="content">
    <p>You can manage your classes, view student work, and grade assignments.</p>
</div>
</body>
</html>
