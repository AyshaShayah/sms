<?php
include 'Conn.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $class_id = $_POST['class_id'];

    $stmt = $conn->prepare("INSERT INTO articles (title, content, class_id) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $title, $content, $class_id);

    if ($stmt->execute()) {
        echo "Article added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Fetch classes for the dropdown
$classes = $conn->query("SELECT * FROM classes");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Article</title>
</head>
<body>
    <h1>Add a New Article</h1>
    <form method="POST">
        Title: <input type="text" name="title" required><br>
        Content: <textarea name="content" required></textarea><br>
        Class: 
        <select name="class_id" required>
            <?php while ($row = $classes->fetch_assoc()): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php endwhile; ?>
        </select><br>
        <input type="submit" value="Add Article">
    </form>
    <a href="admin.php">Back to Admin Panel</a>
</body>
</html>