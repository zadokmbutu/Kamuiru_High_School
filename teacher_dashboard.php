<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'teacher') {
    header("Location: login.php");
    exit();
}
?>
<?php include 'header.php';?>
<?php include 'navbar.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>Teacher Dashboard</title>
</head>
<body>
    <h1>Welcome Teacher: <?php echo $_SESSION['username']; ?></h1>
    <p>You are logged in as a teacher.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
<?php include 'footer.php';?>

