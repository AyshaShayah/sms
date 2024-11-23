<?php
include 'Conn.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO classes (name, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $description);

    if ($stmt->execute()) {
        echo "Class added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Class</title>
</head>
<body>
    <h1>Add a New Class</h1>
    <form method="POST">
        Class Name: <input type="text" name="name" required><br>
        Description: <textarea name="description" required></textarea><br>
        <input type="submit" value="Add Class">
    </form>
    <a href="admin.php">Back to Admin Panel</a>
</body>
</html>