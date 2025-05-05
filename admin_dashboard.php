<?php
include 'auth_check.php';
if ($_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e9f7ef;
            margin: 0;
        }
        .header {
            background: #1abc9c;
            padding: 20px;
            color: white;
            text-align: center;
        }
        .nav {
            background: #16a085;
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
    <h1>Admin Dashboard</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?></p>
</div>
<div class="nav">
    <a href="#">Manage Users</a>
    <a href="#">Reports</a>
    <a href="logout.php">Logout</a>
</div>
<div class="content">
    <p>Here you can manage students, teachers, and view reports.</p>
</div>
</body>
</html>
