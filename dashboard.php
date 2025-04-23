<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['admin']; ?>!</h2>
        <a href="add_student.php">Add Student</a>
        <a href="view_students.php">View Students</a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>