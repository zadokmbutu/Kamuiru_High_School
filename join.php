<?php
include 'header.php';
include 'navbar.php';

$success = $error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["alumni_register"])) {
    $conn = new mysqli("localhost", "root", "", "kbhs");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $adm = trim($_POST["admission_number"]);
    $name = trim($_POST["name"]);
    $raw_password = trim($_POST["password"]);
    $year_left = trim($_POST["year_left"]);
    $occupation = trim($_POST["occupation"]);
    $testimonial = trim($_POST["testimonial"]);

    if ($adm && $name && $raw_password && $year_left && $occupation && $testimonial) {
        $password = password_hash($raw_password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO alumni (admission_number, full_name, password, year_left, occupation, testimonial) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $adm, $name, $password, $year_left, $occupation, $testimonial);

        if ($stmt->execute()) {
            $success = "Successfully registered as an alumnus. <a href='alumni.php'>Go back to Alumni Page</a>";
        } else {
            $error = "Could not register. Admission number may already exist.";
        }
        $stmt->close();
    } else {
        $error = "All fields are required.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Join Kamuiru Alumni Association</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 5px;
        }

        .success, .error {
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
        }

        .success {
            background-color: #e0f7e9;
            color: #2e7d32;
        }

        .error {
            background-color: #fdecea;
            color: #c0392b;
        }

        a.back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #3498db;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Join Kamuiru Alumni Association</h2>

    <?php if ($success): ?>
        <div class="success"><?php echo $success; ?></div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST" action="join.php">
        <input type="hidden" name="alumni_register" value="1">

        <label>Admission Number</label>
        <input type="text" name="admission_number" required>

        <label>Full Name</label>
        <input type="text" name="name" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Year You Left</label>
        <input type="text" name="year_left" required>

        <label>Current Occupation</label>
        <input type="text" name="occupation" required>

        <label>Your Testimonial</label>
        <textarea name="testimonial" rows="5" required></textarea>

        <button type="submit">Join Now</button>
    </form>

    <a href="alumni.php" class="back-link">← Back to Alumni Page</a>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
