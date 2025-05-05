<?php
session_start();

// Example users (use a database in real apps)
$users = [
    ['username' => 'admin', 'password' => 'secret123', 'role' => 'admin'],
    ['username' => 'student1', 'password' => 'student123', 'role' => 'student'],
    ['username' => 'teacher1', 'password' => 'teacher123', 'role' => 'teacher']
];

// Get login credentials
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$found = false;

foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['role'];
        $found = true;

        // Redirect based on role
        switch ($user['role']) {
            case 'admin':
                header("Location: admin_dashboard.php");
                break;
            case 'student':
                header("Location: student_dashboard.php");
                break;
            case 'teacher':
                header("Location: teacher_dashboard.php");
                break;
        }
        exit();
    }
}

if (!$found) {
    echo "<script>
        alert('Invalid username or password');
        window.location.href = 'login.php';
    </script>";
}
?>
