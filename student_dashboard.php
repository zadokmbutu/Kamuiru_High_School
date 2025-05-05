<?php
include 'auth_check.php';
if ($_SESSION['role'] !== 'student') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fdf2e9;
            margin: 0;
        }
        .header {
            background: #e67e22;
            padding: 20px;
            color: white;
            text-align: center;
        }
        .nav {
            background: #d35400;
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
    <h1>Student Dashboard</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?></p>
</div>
<div class="nav">
    <a href="#">My Courses</a>
    <a href="#">Submit Assignments</a>
    <a href="logout.php">Logout</a>
</div>
<div class="content">
    <p>Check your assignments, courses, and grades here.</p>
</div>
</body>
</html>
