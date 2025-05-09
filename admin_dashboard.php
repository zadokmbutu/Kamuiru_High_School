<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Database connection
$conn = new mysqli("localhost", "root", "", "kbhs");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_student'])) {
        $stmt = $conn->prepare("INSERT INTO students (admission_number, name, password, class, created_at) VALUES (?, ?, ?, ?, NOW())");
        $stmt->bind_param("ssss", $_POST['admission_number'], $_POST['student_name'], $_POST['student_password'], $_POST['student_class']);
        $stmt->execute();
        $stmt->close();
        $student_msg = "Student added successfully!";
    }

    if (isset($_POST['add_teacher'])) {
        $stmt = $conn->prepare("INSERT INTO teachers (teacher_id, name, password, subject, created_at) VALUES (?, ?, ?, ?, NOW())");
        $stmt->bind_param("ssss", $_POST['teacher_id'], $_POST['teacher_name'], $_POST['teacher_password'], $_POST['subject']);
        $stmt->execute();
        $stmt->close();
        $teacher_msg = "Teacher added successfully!";
    }
}
?>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 20px;
        }

        .dashboard-container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1, h2 {
            color: #2c3e50;
        }

        form {
            background: #f9f9f9;
            padding: 20px;
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"],
        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            transition: 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 10px;
            border: 1px solid #c3e6cb;
        }

        a.logout-link {
            display: inline-block;
            margin-top: 10px;
            color: white;
            font-weight: bold;
        }
        .logout-link {
            display: inline-block;
            margin-top: 10px;
            color: white;
            font-weight: bold;
        background-color: red;
       padding: 8px 16px;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .logout-link :hover {
        background-color: pink;
    }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome Admin: <?php echo $_SESSION['username']; ?></h1>
        <p>You are logged in as an admin.</p>
        <a href="logout.php" class="logout-link">Logout</a>

        <?php if (isset($student_msg)) echo "<div class='success-message'>$student_msg</div>"; ?>
        <?php if (isset($teacher_msg)) echo "<div class='success-message'>$teacher_msg</div>"; ?>

        <h2>Add Student</h2>
        <form method="POST">
            <input type="hidden" name="add_student" value="1">
            <input type="text" name="admission_number" placeholder="Admission Number" required>
            <input type="text" name="student_name" placeholder="Full Name" required>
            <input type="password" name="student_password" placeholder="Password" required>
            <input type="text" name="student_class" placeholder="Class" required>
            <button type="submit">Add Student</button>
        </form>

        <h2>Add Teacher</h2>
        <form method="POST">
            <input type="hidden" name="add_teacher" value="1">
            <input type="text" name="teacher_id" placeholder="Teacher ID" required>
            <input type="text" name="teacher_name" placeholder="Full Name" required>
            <input type="password" name="teacher_password" placeholder="Password" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <button type="submit">Add Teacher</button>
        </form>
    </div>
</body>
</html>

<?php include 'footer.php'; ?>
