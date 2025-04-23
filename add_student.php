<?php
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $room_number = $_POST['room_number'];

    $query = "INSERT INTO students (name, room_number) VALUES ('$name', $room_number)";
    if ($conn->query($query) === TRUE) {
        $success = "Student added successfully!";
    } else {
        $error = "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Add Student</h2>
        <form method="POST">
            <label>Name</label>
            <input type="text" name="name" required>
            <label>Room Number</label>
            <input type="number" name="room_number" required>
            <button type="submit">Add</button>
        </form>
        <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <a href="dashboard.php">Back to Dashboard</a>
    </div>
</body>
</html>